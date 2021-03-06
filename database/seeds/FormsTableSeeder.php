<?php

use Illuminate\Database\Seeder;

class FormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('forms')->insert(['soal' => 'No family member has dropped out of school']);
    	DB::table('forms')->insert(['soal' => 'Have family member that participated in skills training']);
        DB::table('forms')->insert(['soal' => 'No family member is unemployed']);
        DB::table('forms')->insert(['soal' => 'Have fixed income per month']);
        DB::table('forms')->insert(['soal' => 'No family member has chronic disease']);
        DB::table('forms')->insert(['soal' => 'Own homeowner']);
        DB::table('forms')->insert(['soal' => 'Harmonious family']);
        DB::table('forms')->insert(['soal' => 'Have lots of free time for family']);
        DB::table('forms')->insert(['soal' => 'No family member has ever had conflict with neighbors']);
        DB::table('forms')->insert(['soal' => 'Have comfortable environment']);
        DB::table('forms')->insert(['soal' => 'Have never experienced a crime']);
        DB::table('forms')->insert(['soal' => 'Feel happy/cheerful']);
        DB::table('forms')->insert(['soal' => 'No feeling of worry / anxiety']);
        DB::table('forms')->insert(['soal' => 'No feeling of depression']);
        DB::table('forms')->insert(['soal' => 'Independent family']);
        DB::table('forms')->insert(['soal' => 'No feeling of stress due to the environment']);
        DB::table('forms')->insert(['soal' => 'Feel self develops']);
        DB::table('forms')->insert(['soal' => 'Have positive relationship with other people']);
        DB::table('forms')->insert(['soal' => 'Have purpose in life']);
        DB::table('forms')->insert(['soal' => 'Able to control emotions (self-acceptance).']);
    }
}
