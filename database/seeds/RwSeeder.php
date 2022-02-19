<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RwSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 30 ; $i++) { 
            DB::table('rws')->insert([
                'no_rw' => $i,
            ]);
        }
    }
}
