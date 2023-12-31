<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_US');
        for($i=1; $i<=20; $i++){
            DB::table('pegawai')->insert([
                'no_pegawai' => $faker->randomNumber($nbDigits = null, $strict = false),
                'nama' => $faker->name,
                'jabatan' => $faker->jobTitle,
                'diterima' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'telepon' => $faker->unixTime($max = 'now'),
                'alamat' => $faker->city,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ]);
        }
    }
}
