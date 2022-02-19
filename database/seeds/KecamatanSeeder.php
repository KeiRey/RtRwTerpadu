<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Beji',
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Bojongsari',
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Cilodong',
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Cimanggis',
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Cinere',
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Cipayung',
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Limo',
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Pancoran Mas',
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Sawangan',
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Sukmajaya',
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Tapos',
        ]);
    }
}
