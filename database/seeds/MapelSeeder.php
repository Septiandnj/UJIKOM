<?php

use Illuminate\Database\Seeder;
use App\mapel;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $mapel1 = mapel::create(['mapel'=>'Al-Quran']);
        $mapel2 = mapel::create(['mapel'=>'Seni Budaya']);
        $mapel3 = mapel::create(['mapel'=>'Bahasa Indonesia']);
        $mapel4 = mapel::create(['mapel'=>'Matematika']);
        $mapel5 = mapel::create(['mapel'=>'Penjas']);
        $mapel6 = mapel::create(['mapel'=>'PKN']);
        $mapel7 = mapel::create(['mapel'=>'PAI']);
        $mapel8 = mapel::create(['mapel'=>'DKK']);
        $mapel9 = mapel::create(['mapel'=>'Fisika']);
        $mapel10 = mapel::create(['mapel'=>'Bahasa Inggris']);
        $mapel11 = mapel::create(['mapel'=>'IPA']);
        $mapel12 = mapel::create(['mapel'=>'Kimia']);
    }
}
