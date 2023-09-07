<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Auth;
use Hash;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $daftar_pegawai = Pegawai::whereIdDinas(auth('pegawai')->user()->id_dinas)->with(['dinas', 'bagian', 'jabatan_method'])->orderBy('jabatan', 'asc')->get();
    // dd($daftar_pegawai);
    return view('pegawai.index')->with(array(
      'daftar_pegawai' => $daftar_pegawai
    ));
  }

  public function profile()
  {
    $pegawai = Pegawai::whereIdPegawai(auth('pegawai')->id())->first();

    return view('pegawai.profil')->with('profil', $pegawai);
  }

  public function login_view()
  {
    return view('authentication.login');
  }

  public function login(Request $request)
  {
    $valid_request = $request->validate([
      'email' => 'required',
      'password' => 'required'
    ]);

    if (auth('pegawai')->attempt($valid_request)) {
      return redirect('/');
    };
    session()->flash('message', 'Email atau password salah, silahkan periksa ulang!');
    return redirect('/login');
  }

  public function logout()
  {
    if (auth('pegawai')->check()) {
      auth('pegawai')->logout();
      session()->flash('message', 'Anda telah berhasil log out.');
      return redirect('/');
    }
  }
  /**
   * Show the form for creating a new resource.
   */
  public function create_view()
  {
    return view('pegawai.index');
  }

  public function create_pegawai(Request $request)
  {
    $request->validate([
      'email' => 'required|unique:pegawai,email',
      'password' => 'required|min:8',
      'nama_pegawai' => 'required',
      'id_dinas' => 'required|exists:dinas,id_dinas',
      'id_bagian' => 'required|exists:bagian,id_bagian',
    ]);

    $new_pegawai = Pegawai::create([
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'nama_pegawai' => $request->nama_pegawai,
      'id_dinas' => $request->id_dinas,
      'id_bagian' => $request->id_bagian
    ]);

    session()->flash('message', 'Pembuatan akun pegawai berhasil!');
    return redirect('/');
  }

  public function edit_view($id_pegawai)
  {
    Pegawai::whereIdPegawai($id_pegawai)->first();

    return view('pegawai.edit');
  }

  public function edit_pegawai($id_pegawai, Request $request,)
  {
    $valid_request = $request->validate([
      'nama_pagawai' => 'required',
      'id_dinas' => 'required|exists:dinas,id_dinas',
      'id_bagian' => 'required|exists:bagian,id_bagian',
    ]);

    Pegawai::whereIdPegawai($id_pegawai)->update($valid_request);
  }

  public function edit_password(Request $request,)
  {
    $valid_request = $request->validate([
      'old_password' => 'required',
      'new_password' => 'required|min:8'
    ]);
    $pegawai = Pegawai::whereIdPegawai(auth('pegawai')->id())->first();
    if (Hash::check($valid_request->old_password, $pegawai->password)) {
      Pegawai::whereIdPegawai(auth('pegawai')->id())->update([
        'password' => Hash::make($valid_request->new_password)
      ]);
      session()->flash('message', 'Password berhasil diganti');
      return redirect('/');
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Request $request)
  {
    $request->validate([
      'id_pegawai' => 'required|exists:pegawai,id_pegawai'
    ]);

    Pegawai::whereIdPegawai($request->id_pegawai)->delete();
    session()->flash('message', 'Pegawai berhasil dihapuskan.');
    return redirect('/pegawai');
  }
}
