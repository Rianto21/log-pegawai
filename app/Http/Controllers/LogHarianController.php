<?php

namespace App\Http\Controllers;

use App\Models\LogHarian;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Log;

class LogHarianController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    if (auth('pegawai')->user()->jabatan == 1) {
      $daftar_log_harian = LogHarian::whereIdPegawai(auth('pegawai')->id())->orderBy('tanggal', 'desc')->get();
      $daftar_pegawai = Pegawai::whereIdDinas(auth('pegawai')->user()->id_dinas)->whereJabatan(2)->get();
      return view('log_page.home')->with(array('daftar_log_harian' => $daftar_log_harian, 'daftar_pegawai' => $daftar_pegawai));
    } elseif (auth('pegawai')->user()->jabatan == 2) {
      $daftar_log_harian = LogHarian::whereIdPegawai(auth('pegawai')->id())->orderBy('tanggal', 'desc')->get();
      $daftar_pegawai = Pegawai::whereIdBagian(auth('pegawai')->user()->id_bagian)->get();
      return view('log_page.home')->with(array('daftar_log_harian' => $daftar_log_harian, 'daftar_pegawai' => $daftar_pegawai));
    } else {
      $daftar_log_harian = LogHarian::whereIdPegawai(auth('pegawai')->id())->orderBy('tanggal', 'desc')->get();
      return view('log_page.home')->with(array('daftar_log_harian' => $daftar_log_harian));
    }
  }

  public function log_harian_staff($id_pegawai)
  {
    $pegawai = Pegawai::whereIdPegawai($id_pegawai)->with('log_harian')->first();
    if (auth('pegawai')->user()->jabatan == 1 && auth('pegawai')->user()->id_dinas == $pegawai->id_dinas && $pegawai->jabatan == 2) {
      return view('log_page.verification')->with('data', $pegawai);
    } elseif (auth('pegawai')->user()->jabatan == 2 && auth('pegawai')->user()->id_bagian == $pegawai->id_bagian && $pegawai->jabatan == 3) {
      return view('log_page.verification')->with('data', $pegawai);
    }
    session()->flash('message', 'Anda tidak bisa mengakses halaman tersebut.');
    return redirect('/log-harian');
  }

  /**
   * Show the form for creating a new resource.
   */

  private function upload_foto($file)
  {
    $filename = uniqid('foto_');
    $filetype = $file->extension();
    $file->storeAs('upload/foto/', $filename . '.' . $filetype, 'public');

    return '/storage/upload/foto/' . $filename . '.' . $filetype;
  }

  public function create_view()
  {
    return view('log_page.create');
  }


  public function create(Request $request)
  {

    $valid_request = $request->validate([
      'title' => 'required',
      'body' => 'required',
      'tanggal' => 'required',
    ]);

    $foto = $request->file('foto');

    $path_foto = $this->upload_foto($foto);

    $log_harian = array_merge($valid_request, array(
      'id_pegawai' => auth('pegawai')->id(),
      'foto' => $path_foto
    ));

    $log_harian = LogHarian::create($log_harian);

    session()->flash('message', 'Log harian berhasil ditambahkan.');
    return redirect('/log-harian');
  }

  public function edit_view($id_log_harian)
  {
    $log_harian = LogHarian::whereIdLogHarian($id_log_harian)->first();
    if ($log_harian->id_pegawai == auth('pegawai')->id()) {
      return view('log_page.edit')->with(array('log_harian' => $log_harian));
    }
    session()->flash('message', 'Anda tidak bisa mengubah log harian ini.');
    return redirect('/log-harian');
  }

  public function edit_log_harian($id_log_harian, Request $request)
  {
    $valid_request = $request->validate([
      'title' => 'required',
      'body' => 'required',
      'tanggal' => 'required'
    ]);

    $foto = $request->file('foto');
    if (!empty($foto)) {
      $path_foto = $this->upload_foto($foto);
      $e = array('foto' => $path_foto);
      $log_harian = array_merge($valid_request, $e);
      LogHarian::whereIdLogHarian($id_log_harian)->update($log_harian);
      return redirect('/log-harian');
    }

    LogHarian::whereIdLogHarian($id_log_harian)->update($valid_request);
    session()->flash('message', 'Log harian berhasil diperbarui');
    return redirect('/log-harian');
  }

  public function verifikasi_log_harian(Request $request)
  {
    $request->validate([
      'id_log_harian' => 'required|exists:log_harian,id_log_harian',
      'status' => 'required|min:2|max:3'
    ]);

    $log_harian = LogHarian::whereIdLogHarian($request->id_log_harian)->with('pegawai')->first();
    if (auth('pegawai')->user()->jabatan == 1) {
      if (auth($log_harian->pegawai->jabatan()) == 2 && auth('pegawai')->user()->id_bagian == $log_harian->pegawai->id_bagian) {
        LogHarian::whereIdLogHarian($request->id_log_harian)->update(['status' => $request->status]);
        session()->flash('message', 'Status log harian pegawai berhasil diperbarui');
        return redirect('/log-harian');
      }
    } elseif (auth('pegawai')->user()->jabatan == 2) {
      if (auth($log_harian->pegawai->jabatan()) == 3 && auth('pegawai')->user()->id_bagian == $log_harian->pegawai->id_bagian) {
        LogHarian::whereIdLogHarian($request->id_log_harian)->update(['status' => $request->status]);
        session()->flash('message', 'Status log harian pegawai berhasil diperbarui');
        return redirect('/log-harian');
      }
    }
    session()->flash('message', 'Anda tidak bisa melakukan verifikasi log harian ini.');
    return redirect('/log-harian');
  }
  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id_log_harian)
  {

    $log_harian = LogHarian::whereIdLogHarian($id_log_harian)->first();
    if ($log_harian->id_pegawai == auth('pegawai')->id()) {
      LogHarian::whereIdLogHarian($id_log_harian)->delete();
      session()->flash('message', 'Log harian berhasil dihapus.');
      return redirect('/log-harian');
    }
    session()->flash('message', 'Anda tidak bisa menghapus log harian ini.');
    return redirect('/log-harian');
  }
}
