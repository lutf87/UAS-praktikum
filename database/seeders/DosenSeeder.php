<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $in['nip'] = '15141312';
        $in['nama_dosen'] = 'Eka Yuniar';
        $in['foto_dosen'] = 'eka.jpg';
        $in['ampu_id'] = '2';
        Dosen::create($in);
    }
}
