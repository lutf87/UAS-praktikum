<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;

    protected $table = "tb_matkuls";

    protected $fillable = [
        'nama_matkul',
        'kode_matkul',
    ];

    /**
     * Get all of the tb_dosen for the Matkul
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tb_dosen()
    {
        return $this->hasMany(Dosen::class);
    }
}
