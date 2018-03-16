<?php

use Illuminate\Database\Seeder;
use App\kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //KELAS 10
        $kelas1 = kelas::create(['kelas'=>'X RPL 1']);
        $kelas2 = kelas::create(['kelas'=>'X RPL 2']);
        $kelas3 = kelas::create(['kelas'=>'X TKR 1']);
        $kelas4 = kelas::create(['kelas'=>'X TKR 2']);
        $kelas5 = kelas::create(['kelas'=>'X TSM 1']);
        $kelas6 = kelas::create(['kelas'=>'X TSM 2']);
        // KELAS 11
        $kelas7 = kelas::create(['kelas'=>'XI RPL 1']);
        $kelas8 = kelas::create(['kelas'=>'XI RPL 2']);
        $kelas9 = kelas::create(['kelas'=>'XI TKR 1']);
        $kelas10 = kelas::create(['kelas'=>'XI TSM 1']);
        // KELAS 12
        $kelas11 = kelas::create(['kelas'=>'XII RPL 1']);
        $kelas12 = kelas::create(['kelas'=>'XII RPL 2']);
        $kelas13 = kelas::create(['kelas'=>'XII RPL 3']);
        $kelas14 = kelas::create(['kelas'=>'XII TKR 1']);
        $kelas15 = kelas::create(['kelas'=>'XII TKR 2']);
        $kelas16 = kelas::create(['kelas'=>'XII TKR 3']);
        $kelas17 = kelas::create(['kelas'=>'XII TSM 1']);
        $kelas18 = kelas::create(['kelas'=>'XII TSM 2']);
    }
}
