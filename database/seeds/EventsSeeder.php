<?php

use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'caption' => 'Atlas Weekend 2017',
        ] );
        DB::table('events')->insert([
            'caption' => 'Green Grey',
        ] );
    }
}
