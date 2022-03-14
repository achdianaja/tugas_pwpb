<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;
use Illuminate\Database\Seeder;

class siswaseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($x = 1; $x <= 10; $x++){

          DB::table('siswa')->insert([
              'nama' =>  $faker->name,
              'kelas' => $faker->address,
              'umur' => $faker->randomDigit
          ]); 

        }
    }
}
