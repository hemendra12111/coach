<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoachTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$coach = array(
  			array('id' => '1','name' => 'mahesh','number_of_seat' => '5','booking_seat' => 'A1,A2,A3,A4,A5','created_at' => '2019-10-24 00:00:00','updated_at' => '2019-10-24 00:00:00'),
  			array('id' => '2','name' => 'ramesh','number_of_seat' => '6','booking_seat' => 'A6,A7,B1,B2,B3,B4','created_at' => '2019-10-24 00:00:00','updated_at' => '2019-10-24 00:00:00')
		);
        DB::table('coach')->insert($coach);
    }
}
