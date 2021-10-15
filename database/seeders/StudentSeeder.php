<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710016',
            'name' => 'Aryandari Hanunggraeni',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '089508806963',
        ]);

    DB::table('students')->insert([
        'nim' => '2031710017',
        'name' => 'Eva Monika Septiana',
        'class' => 'MI-2E',
        'department' => 'JTI',
        'phone_number' => '085232753117',
    ]);

    DB::table('students')->insert([
        'nim' => '2031710054',
        'name' => 'Diska Oktavia',
        'class' => 'MI-2E',
        'department' => 'JTI',
        'phone_number' => '088996538919',
    ]);
}
}
