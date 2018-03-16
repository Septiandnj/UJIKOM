<?php

use Illuminate\Database\Seeder;
use App\jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jurusan1 = Jurusan::create(['jurusan'=>'Rekayasa Perangkat Lunak']);
        $jurusan2 = Jurusan::create(['jurusan'=>'Teknik Kendraan Ringan']);
        $jurusan3 = Jurusan::create(['jurusan'=>'Teknik Sepeda Motor']);    
    }
}
