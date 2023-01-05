<?php

namespace Database\Seeders;

use App\Models\Matkul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $in['nama_matkul'] = 'UI/Ux';
        $in['kode_matkul'] = 'MTK-4';
        Matkul::create($in);
    }
}
