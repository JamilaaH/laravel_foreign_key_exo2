<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouleurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('couleurs')->insert([
            [
                'nom' => "rouge",
                "created_at"=> now()
            ],
            [
                'nom' => "bleu",
                "created_at"=> now()
            ],
        ]);
    }
}
