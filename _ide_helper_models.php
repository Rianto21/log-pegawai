<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property mixed $password
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Bagian
 *
 * @property int $id_bagian
 * @property string $nama_bagian
 * @property int $id_dinas
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Dinas|null $dinas
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Pegawai> $pegawai
 * @property-read int|null $pegawai_count
 * @method static \Illuminate\Database\Eloquent\Builder|Bagian newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bagian newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bagian query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bagian whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bagian whereIdBagian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bagian whereIdDinas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bagian whereNamaBagian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bagian whereUpdatedAt($value)
 */
	class Bagian extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Dinas
 *
 * @property int $id_dinas
 * @property string $nama_dinas
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Bagian> $bagian
 * @property-read int|null $bagian_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Pegawai> $pegawai
 * @property-read int|null $pegawai_count
 * @method static \Illuminate\Database\Eloquent\Builder|Dinas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Dinas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Dinas query()
 * @method static \Illuminate\Database\Eloquent\Builder|Dinas whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dinas whereIdDinas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dinas whereNamaDinas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dinas whereUpdatedAt($value)
 */
	class Dinas extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Jabatan
 *
 * @property int $id_jabatan
 * @property string $nama_jabatan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Pegawai> $pegawai
 * @property-read int|null $pegawai_count
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan whereIdJabatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan whereNamaJabatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan whereUpdatedAt($value)
 */
	class Jabatan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LogHarian
 *
 * @property int $id_log_harian
 * @property string $title
 * @property string $body
 * @property string $foto
 * @property string $tanggal
 * @property int $id_pegawai
 * @property \App\Models\StatusLogHarian|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Pegawai $pegawai
 * @method static \Illuminate\Database\Eloquent\Builder|LogHarian newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LogHarian newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LogHarian query()
 * @method static \Illuminate\Database\Eloquent\Builder|LogHarian whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogHarian whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogHarian whereFoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogHarian whereIdLogHarian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogHarian whereIdPegawai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogHarian whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogHarian whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogHarian whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogHarian whereUpdatedAt($value)
 */
	class LogHarian extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pegawai
 *
 * @property int $id_pegawai
 * @property string $email
 * @property string $password
 * @property string $nama_pegawai
 * @property int $id_dinas
 * @property int $id_bagian
 * @property int $jabatan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Bagian $bagian
 * @property-read \App\Models\Dinas $dinas
 * @property-read \App\Models\Jabatan $jabatan_method
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LogHarian> $log_harian
 * @property-read int|null $log_harian_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Pegawai newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pegawai newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pegawai query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pegawai whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pegawai whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pegawai whereIdBagian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pegawai whereIdDinas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pegawai whereIdPegawai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pegawai whereJabatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pegawai whereNamaPegawai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pegawai wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pegawai whereUpdatedAt($value)
 */
	class Pegawai extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StatusLogHarian
 *
 * @property int $id_status_log_harian
 * @property string $nama_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Pegawai> $log_harian
 * @property-read int|null $log_harian_count
 * @method static \Illuminate\Database\Eloquent\Builder|StatusLogHarian newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusLogHarian newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusLogHarian query()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusLogHarian whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusLogHarian whereIdStatusLogHarian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusLogHarian whereNamaStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusLogHarian whereUpdatedAt($value)
 */
	class StatusLogHarian extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

