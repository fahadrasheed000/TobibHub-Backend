<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Hospital;

use Illuminate\Support\Facades\Schema;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate table before insert data to get fresh data
        Schema::disableForeignKeyConstraints();

        Hospital::truncate();

        Schema::enableForeignKeyConstraints();


        $data = array(

            array(
                'name' => 'Hospital1',
                'phone' => '+6063737373',
                'facilities'=>'Clean,Good Staff',
                'country'=>'',
                'state'=>'',
                'city'=>'',
                'address'=>''
            ),
            array(
                'name' => 'Hospital2',
                'phone' => '+6063788373',
                'facilities'=>'Clean,Good Staff',
                'country'=>'',
                'state'=>'',
                'city'=>'',
                'address'=>''
            ),
          

        );
        Hospital::insert($data);
    }
}
