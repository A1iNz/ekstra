<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('anggota')->insert([
    			'nama' => $faker->name,
    			'kelas' => 'RPL',
    			'agama' => '-',
    			'alamat' => $faker->address,
                'no_hp' => '11111111'
    		]);
 
    	}
    }
}
