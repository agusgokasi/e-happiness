<?php

use Illuminate\Database\Seeder;

class ProvinsisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinsis')->insert(['provinsi' => 'Aceh', 'nama' => 'Aceh']);
        DB::table('provinsis')->insert(['provinsi' => 'Sumatera Utara', 'nama' => 'Sumatera Utara']);
        DB::table('provinsis')->insert(['provinsi' => 'Sumatera Barat', 'nama' => 'Sumatera Barat']);
        DB::table('provinsis')->insert(['provinsi' => 'Sumatera Selatan', 'nama' => 'Sumatera Selatan']);
        DB::table('provinsis')->insert(['provinsi' => 'Riau', 'nama' => 'Riau']);
        DB::table('provinsis')->insert(['provinsi' => 'Jambi', 'nama' => 'Jambi']);
        DB::table('provinsis')->insert(['provinsi' => 'Kepulauan Riau', 'nama' => 'Kepulauan Riau']);
        DB::table('provinsis')->insert(['provinsi' => 'Bangka Belitung', 'nama' => 'Bangka Belitung']);
        DB::table('provinsis')->insert(['provinsi' => 'Bengkulu', 'nama' => 'Bengkulu']);
        DB::table('provinsis')->insert(['provinsi' => 'Lampung', 'nama' => 'Lampung']);
        DB::table('provinsis')->insert(['provinsi' => 'Banten', 'nama' => 'Banten']);
        DB::table('provinsis')->insert(['provinsi' => 'Jakarta Raya', 'nama' => 'DKI Jakarta']);
        DB::table('provinsis')->insert(['provinsi' => 'Jawa Barat', 'nama' => 'Jawa Barat']);
        DB::table('provinsis')->insert(['provinsi' => 'Jawa Tengah', 'nama' => 'Jawa Tengah']);
        DB::table('provinsis')->insert(['provinsi' => 'Yogyakarta', 'nama' => 'Yogyakarta']);
        DB::table('provinsis')->insert(['provinsi' => 'Jawa Timur', 'nama' => 'Jawa Timur']);
        DB::table('provinsis')->insert(['provinsi' => 'Bali', 'nama' => 'Bali']);
        DB::table('provinsis')->insert(['provinsi' => 'Nusa Tenggara Barat', 'nama' => 'Nusa Tenggara Barat']);
        DB::table('provinsis')->insert(['provinsi' => 'Nusa Tenggara Timur', 'nama' => 'Nusa Tenggara Timur']);
		DB::table('provinsis')->insert(['provinsi' => 'Kalimantan Utara', 'nama' => 'Kalimantan Utara']);
		DB::table('provinsis')->insert(['provinsi' => 'Kalimantan Barat', 'nama' => 'Kalimantan Barat']);
		DB::table('provinsis')->insert(['provinsi' => 'Kalimantan Tengah', 'nama' => 'Kalimantan Tengah']);
		DB::table('provinsis')->insert(['provinsi' => 'Kalimantan Selatan', 'nama' => 'Kalimantan Selatan']);
		DB::table('provinsis')->insert(['provinsi' => 'Kalimantan Timur', 'nama' => 'Kalimantan Timur']);
		DB::table('provinsis')->insert(['provinsi' => 'Gorontalo', 'nama' => 'Gorontalo']);
		DB::table('provinsis')->insert(['provinsi' => 'Sulawesi Utara', 'nama' => 'Sulawesi Utara']);
		DB::table('provinsis')->insert(['provinsi' => 'Sulawesi Barat', 'nama' => 'Sulawesi Barat']);
		DB::table('provinsis')->insert(['provinsi' => 'Sulawesi Tengah', 'nama' => 'Sulawesi Tengah']);
		DB::table('provinsis')->insert(['provinsi' => 'Sulawesi Selatan', 'nama' => 'Sulawesi Selatan']);
		DB::table('provinsis')->insert(['provinsi' => 'Sulawesi Tenggara', 'nama' => 'Sulawesi Tenggara']);
		DB::table('provinsis')->insert(['provinsi' => 'Maluku Utara', 'nama' => 'Maluku Utara']);
		DB::table('provinsis')->insert(['provinsi' => 'ID-MA', 'nama' => 'Maluku']);
		DB::table('provinsis')->insert(['provinsi' => 'ID-PB', 'nama' => 'Papua Barat']);
        DB::table('provinsis')->insert(['provinsi' => 'Papua', 'nama' => 'Papua']);
        DB::table('provinsis')->insert(['provinsi' => 'Other', 'nama' => 'Other']);
    }
}
