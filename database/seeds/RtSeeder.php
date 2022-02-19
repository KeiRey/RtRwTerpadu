<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 30 ; $i++) { 
            DB::table('rts')->insert([
                'no_rt' => $i,
            ]);
        }
        // DB::table('rts')->insert([
        //     'no_rt' => '1',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '2',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '3',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '4',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '5',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '6',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '7',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '8',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '9',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '10',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '11',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '12',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '13',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '14',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '15',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '16',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '17',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '18',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '19',
        // ]);
        //         DB::table('rts')->insert([
        //     'no_rt' => '20',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '21',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '22',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '23',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '24',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '25',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '26',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '27',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '28',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '29',
        // ]);
        // DB::table('rts')->insert([
        //     'no_rt' => '30',
        // ]);
    }
}
