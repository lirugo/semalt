<?php

use Illuminate\Database\Seeder;

class BidsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bids')->insert([
            'id_event' => 1,
            'name' => 'Василий',
            'email' => 'vas@gmail.com',
            'price' => '100',
        ] );
        DB::table('bids')->insert([
            'id_event' => 1,
            'name' => 'Николай',
            'email' => 'nk@gmail.com',
            'price' => '150',
        ] );
    }
}
