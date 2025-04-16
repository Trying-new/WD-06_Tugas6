<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nama',
        'email',
        'password',
        'no_hp',
        'role',
        'alamat'
    ];

<<<<<<< HEAD
    public function pasien(): HasMany
    {
        return $this->hasMany(Periksa::class,'id_pasien');
    }

    public function dokter(): HasMany
    {
        return $this->hasMany(Periksa::class,'id_dokter');
    }

=======
    // relasi ke periksa sebagai pasien
    public function pasien(): HasMany{
        return $this->hasMany(Periksa::class, 'id_pasien');
    }

    // relasi ke periksa sebagai dokter
    public function dokter(): HasMany{
        return $this->hasMany(Periksa::class, 'id_dokter');
    }
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
