<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Periksa extends Model {
    use HasFactory;

    protected $table = 'periksas'; 

    protected $fillable = [
        'id_dokter',
        'id_pasien',
        'tanggal_periksa',
        'catatan',
        'biaya_periksa'
    ];

    /**
     * Relasi ke User sebagai Dokter
     */
    public function dokter(): BelongsTo {
        return $this->belongsTo(User::class, 'id_dokter');
    }

    /**
     * Relasi ke User sebagai Pasien
     */
    public function pasien(): BelongsTo {
        return $this->belongsTo(User::class, 'id_pasien');
    }

    /**
     * Relasi ke DetailPeriksa (Satu Periksa bisa punya banyak DetailPeriksa)
     */
    public function detailPeriksa(): HasMany {
        return $this->hasMany(DetailPeriksa::class, 'id_periksa');
    }
}
=======
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Periksa extends Model
{
    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'tgl_periksa',
        'catatan',
        'biaya_periksa',
    ];

    public function dokter(): BelongsTo{
        return $this->belongsTo(User::class, 'id_dokter');
    }

    public function pasien(): BelongsTo{
        return $this->belongsTo(User::class, 'id_pasien');
    }
    
}
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef
