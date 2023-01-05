<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'tb_dosens';

    protected $fillable = [
        'nip',
        'nama_dosen',
        'foto_dosen',
        'ampu_id',
    ];

    /**
     * Get the tb_matkul that owns the Dosen
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tb_matkul()
    {
        return $this->hasMany(Matkul::class);
    }
}
