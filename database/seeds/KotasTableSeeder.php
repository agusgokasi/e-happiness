<?php

use Illuminate\Database\Seeder;

class KotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	// Provinsi aceh

        DB::table('kotas')->insert(['kota' => 'Kabupaten Aceh Barat','longitude'=>'96.152699','latitude'=>'4.454274','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Aceh Barat Daya','longitude'=>'97.006839','latitude'=>'3.796343','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Aceh Besar','longitude'=>'95.47781','latitude'=>'5.452917','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Aceh Jaya','longitude'=>'95.6457951','latitude'=>'4.7873684','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Aceh Selatan','longitude'=>'97.3516558','latitude'=>'3.3115056','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Aceh Singkil','longitude'=>'97.87216','latitude'=>'2.3589459','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Aceh Tamiang','longitude'=>'98.0028892','latitude'=>'4.2328871','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Aceh Tengah','longitude'=>'96.8350999','latitude'=>'4.4482641','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Aceh Tenggara','longitude'=>'97.6982272','latitude'=>'3.3088666','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Aceh Timur','longitude'=>'95.9885456','latitude'=>'5.255443','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Aceh Utara','longitude'=>'97.2221421','latitude'=>'4.9786331','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Bener Meriah','longitude'=>'97.0068393','latitude'=>'4.7748348','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Bireuen','longitude'=>'96.89005','latitude'=>'5.18254','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Gayo Lues','longitude'=>'97.3516558','latitude'=>'3.955165','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Nagan Raya','longitude'=>'96.4929797','latitude'=>'4.1248406','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Pidie','longitude'=>'95.940971','latitude'=>'5.0742659','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Pidie Jaya','longitude'=>'96.195132','latitude'=>'5.1548063','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Simeulue','longitude'=>'96.083333','latitude'=>'2.583333','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kota Banda Aceh','longitude'=>'95.3166667','latitude'=>'5.55','provinsi_id' => 1]);
		DB::table('kotas')->insert(['kota' => 'Kota Langsa','longitude'=>'97.9633333','latitude'=>'4.48','provinsi_id' => 1]);
		DB::table('kotas')->insert(['kota' => 'Kota Lhokseumawe','longitude'=>'97.1402778','latitude'=>'5.1880556','provinsi_id' => 1]);
		DB::table('kotas')->insert(['kota' => 'Kota Sabang','longitude'=>'95.31644','latitude'=>'5.88969','provinsi_id' => 1]);
        DB::table('kotas')->insert(['kota' => 'Kota Subulussalam','longitude'=>'98.0165205','latitude'=>'2.6449927','provinsi_id' => 1]);

		// Provinsi Sumatera Utara

		DB::table('kotas')->insert(['kota' => 'Kabupaten Asahan','longitude'=>'99.634135','latitude'=>'2.8174722','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Batu Bara','longitude'=>'99.5006143','latitude'=>'3.1740979','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Dairi','longitude'=>'98.265058','latitude'=>'2.8675801','provinsi_id' => 2,'provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Deli Serdang','longitude'=>'98.704075','latitude'=>'3.420180','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Humbang Hasundutan','longitude'=>'98.5721016','latitude'=>'2.1988508','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Labuhanbatu','longitude'=>'100.1703257','latitude'=>'2.3439863','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Labuhanbatu Selatan', 'longitude'=>'100.1703257','latitude'=>'1.8799353','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Labuhanbatu Utara','longitude'=>'99.8124935','latitude'=>'2.3465638','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Langkat','longitude'=>'98.3088441','latitude'=>'3.8653916','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Mandailing Natal','longitude'=>'99.3673084','latitude'=>'0.7432372','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Nias','longitude'=>'113.7111274','latitude'=>'-8.1712591','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Nias Barat','longitude'=>'97.5247243','latitude'=>'1.1255279','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Nias Selatan','longitude'=>'97.8286368','latitude'=>'0.7086091','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Nias Utara','longitude'=>'97.5247243','latitude'=>'1.1255279','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Padang Lawas','longitude'=>'99.8124935','latitude'=>'1.1186977','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Padang Lawas Utara','longitude'=>'99.634135','latitude'=>'1.5758644','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Pakpak Bharat','longitude'=>'98.299838','latitude'=>'2.545786','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Samosir','longitude'=>'98.8166667','latitude'=>'2.5833333','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Serdang Bedagai','longitude'=>'99.0571089','latitude'=>'3.3371694','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Simalungun','longitude'=>'99.2785583','latitude'=>'2.9781612','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Tapanuli Selatan','longitude'=>'99.2785583','latitude'=>'1.5774933','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Tapanuli Tengah','longitude'=>'98.704075','latitude'=>'1.8493299','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Tapanuli Utara','longitude'=>'99.1013498','latitude'=>'2.0405246','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Toba Samosir','longitude'=>'99.2785583','latitude'=>'2.3502398','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kota Binjai','longitude'=>'98.482246','latitude'=>'3.594462','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kota Gunungsitoli','longitude'=>'97.61594','latitude'=>'1.281964','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kota Medan','longitude'=>'98.6755979','latitude'=>'3.585242','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kota Padang Sidempuan','longitude'=>'99.273972','latitude'=>'1.380424','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kota Pematangsiantar','longitude'=>'99.06','latitude'=>'2.96','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kota Sibolga','longitude'=>'98.7827988','latitude'=>'1.7403745','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kota Tanjung Balai','longitude'=>'99.800331','latitude'=>'2.965122','provinsi_id' => 2]);
		DB::table('kotas')->insert(['kota' => 'Kota Tebing Tinggi','longitude'=>'99.2009815','latitude'=>'3.3856205','provinsi_id' => 2]);

		// Provinsi Sumatera Barat

		DB::table('kotas')->insert(['kota' => 'Kabupaten Agam','longitude'=>'100.1703257','latitude'=>'-0.2209392','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Dharmasraya','longitude'=>'101.6157773','latitude'=>'-1.1120568','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Kepulauan Mentawai','longitude'=>'98.9245343','latitude'=>'-1.426001','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Lima Puluh Kota','longitude'=>'99.4187929','latitude'=>'3.168216','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Padang Pariaman','longitude'=>'100.2151578','latitude'=>'-0.5546757','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Pasaman','longitude'=>'99.7901781','latitude'=>'0.1288752','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Pasaman Barat','longitude'=>'99.634135','latitude'=>'0.2213005','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Pesisir Selatan','longitude'=>'100.8903099','latitude'=>'-1.7223147','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Sijunjung','longitude'=>'100.997658','latitude'=>'-0.6881586','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Solok','longitude'=>'100.644402','latitude'=>'-0.803027','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Solok Selatan','longitude'=>'101.2523792','latitude'=>'-1.4157329','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Tanah Datar','longitude'=>'100.5746224','latitude'=>'-0.4797043','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kota Bukittinggi','longitude'=>'100.3691667','latitude'=>'-0.3055556','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kota Padang','longitude'=>'100.3530556','latitude'=>'-0.95','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kota Padang Panjang','longitude'=>'100.4059456','latitude'=>'-0.470679','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kota Pariaman','longitude'=>'100.1179574','latitude'=>'-0.6264389','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kota Payakumbuh','longitude'=>'100.632301','latitude'=>'-0.22887','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kota Sawahlunto','longitude'=>'100.7763604','latitude'=>'-0.6810286','provinsi_id' => 3]);
		DB::table('kotas')->insert(['kota' => 'Kota Solok','longitude'=>'100.644402','latitude'=>'-0.803027','provinsi_id' => 3]);

		// Provinsi Sumatera Selatan

		DB::table('kotas')->insert(['kota' => 'Kabupaten Banyuasin','longitude'=>'104.7520939','latitude'=>'-2.6095639','provinsi_id' => 4]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Empat Lawang','longitude'=>'102.8975098','latitude'=>'-3.7286029','provinsi_id' => 4]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Lahat','longitude'=>'103.5427778','latitude'=>'-3.7863889','provinsi_id' => 4]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Muara Enim','longitude'=>'103.770798','latitude'=>'-3.651581','provinsi_id' => 4]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Musi Banyuasin','longitude'=>'103.7289167','latitude'=>'-2.5442029','provinsi_id' => 4]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Musi Rawas','longitude'=>'102.989615','latitude'=>'-2.8625305','provinsi_id' => 4]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Ogan Ilir','longitude'=>'104.6121475','latitude'=>'-3.426544','provinsi_id' => 4]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Ogan Komering Ilir','longitude'=>'105.2194808','latitude'=>'-3.4559744','provinsi_id' => 4]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Ogan Komering Ulu','longitude'=>'104.0072348','latitude'=>'-4.0283486','provinsi_id' => 4]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Ogan Komering Ulu Selatan','longitude'=>'104.0072348','latitude'=>'-4.6681951','provinsi_id' => 4]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Penukal Abab Lematang Ilir','longitude'=>'104.000000','latitude'=>'-3.200000','provinsi_id' => 4]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Ogan Komering Ulu Timur','longitude'=>'104.7520939','latitude'=>'-3.8567934','provinsi_id' => 4]);
		DB::table('kotas')->insert(['kota' => 'Kota Lubuklinggau','longitude'=>'102.8616667','latitude'=>'-3.2966667','provinsi_id' => 4]);
		DB::table('kotas')->insert(['kota' => 'Kota Pagar Alam','longitude'=>'103.265297','latitude'=>'-4.03767','provinsi_id' => 4]);
		DB::table('kotas')->insert(['kota' => 'Kota Palembang','longitude'=>'104.7567333','latitude'=>'-2.9911083','provinsi_id' => 4]);
		DB::table('kotas')->insert(['kota' => 'Kota Prabumulih','longitude'=>'104.235397','latitude'=>'-3.440956','provinsi_id' => 4]);

		// Provinsi Riau

		DB::table('kotas')->insert(['kota' => 'Kabupaten Bengkalis','longitude'=>'102.0797222','latitude'=>'1.4897222','provinsi_id' => 5]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Indragiri Hilir','longitude'=>'102.989615','latitude'=>'-0.1456733','provinsi_id' => 5]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Indragiri Hulu','longitude'=>'102.2547919','latitude'=>'-0.7361181','provinsi_id' => 5]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Kampar','longitude'=>'101.1617356','latitude'=>'0.146671','provinsi_id' => 5]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Kuantan Singingi','longitude'=>'101.5248055','latitude'=>'-0.4411596','provinsi_id' => 5]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Pelalawan','longitude'=>'102.088699','latitude'=>'0.441415','provinsi_id' => 5]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Rokan Hilir','longitude'=>'100.8000051','latitude'=>'1.6463978','provinsi_id' => 5]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Rokan Hulu','longitude'=>'100.439656','latitude'=>'1.0410934','provinsi_id' => 5]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Siak','longitude'=>'113.921327','latitude'=>'-0.789275','provinsi_id' => 5]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Kepulauan Meranti','longitude'=>'102.69539','latitude'=>'0.97488','provinsi_id' => 5]);
		DB::table('kotas')->insert(['kota' => 'Kota Dumai','longitude'=>'101.447601','latitude'=>'1.665742','provinsi_id' => 5]);
		DB::table('kotas')->insert(['kota' => 'Kota Pekanbaru','longitude'=>'101.45','latitude'=>'0.5333333','provinsi_id' => 5]);

		// Provinsi Jambi

		DB::table('kotas')->insert(['kota' => 'Kabupaten Batanghari','longitude'=>'103.0817903','latitude'=>'-1.7083922','provinsi_id' => 6]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Bungo','longitude'=>'101.8891721','latitude'=>'-1.6401338','provinsi_id' => 6]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Kerinci','longitude'=>'101.264','latitude'=>'-1.697','provinsi_id' => 6]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Merangin','longitude'=>'101.9804613','latitude'=>'-2.1752789','provinsi_id' => 6]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Muaro Jambi','longitude'=>'103.615799','latitude'=>'-1.596672','provinsi_id' => 6]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Sarolangun','longitude'=>'102.6905326','latitude'=>'-2.2654937','provinsi_id' => 6]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Tanjung Jabung Barat','longitude'=>'103.7984428','latitude'=>'-1.2332122','provinsi_id' => 6]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Tanjung Jabung Timur','longitude'=>'103.89973','latitude'=>'-1.3291599','provinsi_id' => 6]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Tebo','longitude'=>'102.3463875','latitude'=>'-1.2592999','provinsi_id' => 6]);
		DB::table('kotas')->insert(['kota' => 'Kota Jambi','longitude'=>'103.615799','latitude'=>'-1.596672','provinsi_id' => 6]);
		DB::table('kotas')->insert(['kota' => 'Kota Sungai Penuh','longitude'=>'101.387199','latitude'=>'-2.06314','provinsi_id' => 6]);

		// Kepulauan Riau

		DB::table('kotas')->insert(['kota' => 'Kabupaten Bintan','longitude'=>'104.5189214','latitude'=>'1.0619173','provinsi_id' => 7]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Karimun','longitude'=>'103.3666667','latitude'=>'1.05','provinsi_id' => 7]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Kepulauan Anambas','longitude'=>'105.666664','latitude'=>'3.0999996','provinsi_id' => 7]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Lingga','longitude'=>'104.6354631','latitude'=>'-0.1627686','provinsi_id' => 7]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Natuna','longitude'=>'108.1812242','latitude'=>'3.9329945','provinsi_id' => 7]);
		DB::table('kotas')->insert(['kota' => 'Kota Batam','longitude'=>'104.0304535','latitude'=>'1.0456264','provinsi_id' => 7]);
		DB::table('kotas')->insert(['kota' => 'Kota Tanjung Pinang','longitude'=>'104.446464','latitude'=>'0.9179205','provinsi_id' => 7]);

		// Provinsi Kepulauan Bangka Belitung

		DB::table('kotas')->insert(['kota' => 'Kabupaten Bangka','longitude'=>'106.0640179','latitude'=>'-2.2884782','provinsi_id' => 8]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Bangka Barat','longitude'=>'106.0640179','latitude'=>'-2.2884782','provinsi_id' => 8]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Bangka Selatan','longitude'=>'106.0640179','latitude'=>'-2.2884782','provinsi_id' => 8]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Bangka Tengah','longitude'=>'106.0640179','latitude'=>'-2.2884782','provinsi_id' => 8]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Belitung','longitude'=>'107.9531836','latitude'=>'-2.8708938','provinsi_id' => 8]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Belitung Timur','longitude'=>'107.9531836','latitude'=>'-2.8708938','provinsi_id' => 8]);
		DB::table('kotas')->insert(['kota' => 'Kota Pangkal Pinang','longitude'=>'106.109596','latitude'=>'-2.129323','provinsi_id' => 8]);

		// Provinsi Bengkulu

		DB::table('kotas')->insert(['kota' => 'Kabupaten Bengkulu Selatan','longitude'=>'103.035694','latitude'=>'-4.3248409','provinsi_id' => 9]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Bengkulu Tengah','longitude'=>'102.416664','latitude'=>'-3.683333','provinsi_id' => 9]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Bengkulu Utara','longitude'=>'102.1632718','latitude'=>'-3.4219555','provinsi_id' => 9]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Kaur','longitude'=>'103.4511768','latitude'=>'-4.6792278','provinsi_id' => 9]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Kepahiang','longitude'=>'102.578201','latitude'=>'-3.651431','provinsi_id' => 9]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Lebong','longitude'=>'104.382202','latitude'=>'-2.992617','provinsi_id' => 9]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Mukomuko','longitude'=>'101.1169805','latitude'=>'-2.5760003','provinsi_id' => 9]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Rejang Lebong','longitude'=>'102.6675575','latitude'=>'-3.4548154','provinsi_id' => 9]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Seluma','longitude'=>'102.5642261','latitude'=>'-4.0622929','provinsi_id' => 9]);
		DB::table('kotas')->insert(['kota' => 'Kota Bengkulu','longitude'=>'102.2591667','latitude'=>'-3.7955556','provinsi_id' => 9]);

		// Provinsi Lampung

		DB::table('kotas')->insert(['kota' => 'Kabupaten Lampung Barat','longitude'=>'104.1930918','latitude'=>'-5.1490396','provinsi_id' => 10]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Lampung Selatan','longitude'=>'105.5474373','latitude'=>'-5.5622614','provinsi_id' => 10]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Lampung Tengah','longitude'=>'105.3131185','latitude'=>'-4.8008086','provinsi_id' => 10]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Lampung Timur','longitude'=>'105.6881788','latitude'=>'-5.1134995','provinsi_id' => 10]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Lampung Utara','longitude'=>'104.7520939','latitude'=>'-4.8133905','provinsi_id' => 10]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Mesuji','longitude'=>'105.3131185','latitude'=>'-4.0044783','provinsi_id' => 10]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Pesawaran','longitude'=>'105.0791228','latitude'=>'-5.493245','provinsi_id' => 10]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Pringsewu','longitude'=>'104.9622498','latitude'=>'-5.3539884','provinsi_id' => 10]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Tanggamus','longitude'=>'104.5655273','latitude'=>'-5.3027489','provinsi_id' => 10]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Tulang Bawang','longitude'=>'105.5005483','latitude'=>'-4.3176576','provinsi_id' => 10]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Tulang Bawang Barat','longitude'=>'105.079123','latitude'=>'-4.525697','provinsi_id' => 10]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Way Kanan','longitude'=>'104.5655273','latitude'=>'-4.4963689','provinsi_id' => 10]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Pesisir Barat','longitude'=>'101.0824912','latitude'=>'-2.2885814', 'provinsi_id' => 10]);
		DB::table('kotas')->insert(['kota' => 'Kota Bandar Lampung','longitude'=>'105.2666667','latitude'=>'-5.45','provinsi_id' => 10]);
		DB::table('kotas')->insert(['kota' => 'Kota Kotabumi','longitude'=>'104.8817','latitude'=>'-4.82505','provinsi_id' => 10]);
		DB::table('kotas')->insert(['kota' => 'Kota Liwa','longitude'=>'104.082878755','latitude'=>'-5.03735444174','provinsi_id' => 10]);
		DB::table('kotas')->insert(['kota' => 'Kota Metro','longitude'=>'105.3','latitude'=>'-5.1166667','provinsi_id' => 10]);

		//Java_Banten
		DB::table('kotas')->insert(['kota'=>'Kabupaten Lebak','longitude'=>'106.2522143','latitude'=>'-6.5643956','provinsi_id' => 11]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Pandeglang','longitude'=>'106.103897','latitude'=>'-6.314835','provinsi_id' => 11]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Serang','longitude'=>'106.150299','latitude'=>'-6.12009','provinsi_id' => 11]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Tangerang','longitude'=>'106.6318889','latitude'=>'-6.1783056','provinsi_id' => 11]);
		DB::table('kotas')->insert(['kota'=>'Kota Cilegon','longitude'=>'106.040506','latitude'=>'-6.0169825','provinsi_id' => 11]);
		DB::table('kotas')->insert(['kota'=>'Kota Serang','longitude'=>'106.150299','latitude'=>'-6.12009','provinsi_id' => 11]);
		DB::table('kotas')->insert(['kota'=>'Kota Tangerang','longitude'=>'106.6318889','latitude'=>'-6.1783056','provinsi_id' => 11]);
		DB::table('kotas')->insert(['kota'=>'Kota Tangerang Selatan','longitude'=>'106.7180556','latitude'=>'-6.2888889','provinsi_id' => 11]);

		//Java_Jakarta
		DB::table('kotas')->insert(['kota'=>'Kota Jakarta Utara','longitude' => '106.863956','latitude'=>'-6.138414','provinsi_id' => 12,]);
		DB::table('kotas')->insert(['kota'=>'Kota Jakarta Selatan','longitude' =>'106.810600','latitude'=>'-6.261493','provinsi_id' => 12,]);
		DB::table('kotas')->insert(['kota'=>'Kota Jakarta Timur','longitude' =>'106.900447','latitude'=>' -6.225014','provinsi_id' => 12,]);
		DB::table('kotas')->insert(['kota'=>'Kota Jakarta Pusat','longitude' =>'106.834091','latitude'=>'-6.186486','provinsi_id' => 12,]);
		DB::table('kotas')->insert(['kota'=>'Kota Jakarta Barat','longitude' =>'106.758849','latitude'=>'-6.168329 ','provinsi_id' => 12,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kepulauan Seribu','longitude' =>'106.507198','latitude'=>'-5.798526','provinsi_id' => 12,]);

		//Java_JawaBarat
		DB::table('kotas')->insert(['kota'=>'Kabupaten Bandung','longitude' =>'107.619123','latitude'=>'-6.917464 ','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Bandung Barat','longitude' => '107.491977','latitude'=>'-6.865221','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Bekasi','longitude' => '106.975573','latitude'=>'-6.238270 ','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Bogor','longitude' => '106.800000','latitude'=>'-6.600000','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Ciamis','longitude' => '108.332255','latitude'=>'-7.329868 ','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Cianjur','longitude' => '107.142544','latitude'=>'-6.816824 ','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Cirebon','longitude' => '108.552316','latitude'=>'-6.732023 ','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Garut', 'longitude' => '107.908699','latitude'=>'-7.227906','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Indramayu','longitude' => '108.325820','latitude'=>'-6.337310 ','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Karawang','longitude' => '107.337579','latitude'=>'-6.322730 ','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kuningan','longitude' => '108.492891','latitude'=>'-6.981010 ','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Majalengka','longitude' => '108.227373','latitude'=>'-6.836382','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Pangandaran','longitude' => '108.498827','latitude'=>'-7.615061 ','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Purwakarta','longitude' => '107.446272','latitude'=>'-6.540666','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Subang','longitude' => '107.757699','latitude'=>'-6.558325','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sumedang','longitude' => '110.033055','latitude'=>'0.609595','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sukabumi','longitude' => '106.927200','latitude'=>'-6.919600 ','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Tasikmalaya','longitude' => '108.200000','latitude'=>'-7.333333 ','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kota Bandung','longitude' => '107.6098111','latitude'=>'-6.9147444','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kota Banjar','longitude' => '108.542274','latitude'=>'-7.376310','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kota Bekasi','longitude' => '107','latitude'=>'-6.2333333','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kota Bogor','longitude' => '106.8','latitude'=>'-6.6','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kota Cimahi','longitude' => '107.5355','latitude'=>'-6.880239','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kota Cirebon','longitude' => '108.552316','latitude'=>'-6.732023','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kota Depok','longitude' => '106.794241','latitude'=>'-6.402484 ','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kota Sukabumi','longitude' => '106.927200','latitude'=>'-6.919600 ','provinsi_id' => 13,]);
		DB::table('kotas')->insert(['kota'=>'Kota Tasikmalaya','longitude' => '108.214104','latitude'=>'-7.327954','provinsi_id' => 13,]);

		//Java_jawaTengah
		DB::table('kotas')->insert(['kota'=>'Kabupaten Banjarnegara','longitude' => '109.553857','latitude'=>'-7.447390 ','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Banyumas','longitude' => '109.140438','latitude'=>'-7.483213','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Batang','longitude' => '109.732680','latitude'=>'-6.908045','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Blora','longitude' => '111.418670','latitude'=>'-6.969128','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Boyolali','longitude' =>'110.595023','latitude'=>'-7.520530','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Brebes','longitude' => '109.039376','latitude'=>'-6.856421','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Cilacap','longitude' => '109.023521','latitude'=>'-7.698299 ','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Demak','longitude' => '110.637750','latitude'=>'-6.892161 ','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Grobogan','longitude' => '110.962585','latitude'=>'-7.021719','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Jepara','longitude' => '110.678983','latitude'=>'-6.580498','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Karanganyar','longitude' => ' 110.986694','latitude'=>'-7.607073','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kebumen','longitude' => '109.663699','latitude'=>'-7.676190 ','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kendal','longitude' => '110.5947222','latitude'=>'-7.0147222','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Klaten','longitude' => '110.664568','latitude'=>'-7.739967','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kudus','longitude' => '110.841371','latitude'=>'-6.807260','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Magelang','longitude' => '110.217694','latitude'=>'-7.479734 ','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Pati','longitude' => '111.038','latitude'=>'-6.7559','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Pekalongan','longitude'=>'109.674592','latitude'=>'-6.889836 ','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Pemalang','longitude'=>'109.370576','latitude'=>'-6.920132','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Purbalingga','longitude'=>'109.360430','latitude'=>'-7.385735','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Purworejo','longitude'=>'110.007833','latitude'=>'-7.713582','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Rembang','longitude'=>'110.007833','latitude'=>'-7.713582','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Semarang','longitude'=>'110.416667','latitude'=>'-6.966667 ','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sragen','longitude'=>'111.022491','latitude'=>'-7.419408 ','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sukoharjo','longitude'=>'110.814733','latitude'=>'-7.683029 ','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Tegal','longitude'=>'109.125592','latitude'=>'-6.879704','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Temanggung','longitude'=>'110.166666','latitude'=>'-7.2999988','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Wonogiri','longitude'=>'110.938742','latitude'=>'-7.797852','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Wonosobo','longitude'=>'109.913959','latitude'=>'-7.355577','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kota Magelang','longitude'=>'110.213799','latitude'=>'-7.481253','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kota Pekalongan','longitude'=>'109.669998','latitude'=>'-6.882887','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kota Salatiga','longitude'=>'110.508437','latitude'=>'-7.330523','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kota Semarang','longitude'=>'110.4166667','latitude'=>'-6.9666667','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kota Surakarta','longitude'=>'110.816667','latitude'=>'-7.566667','provinsi_id' => 14,]);
		DB::table('kotas')->insert(['kota'=>'Kota Tegal','longitude'=>'109.1333333','latitude'=>'-6.8666667','provinsi_id' => 14,]);

        //Java_DIYogyakarta
     	DB::table('kotas')->insert(['kota'=>'Kabupaten Bantul','longitude'=>'110.325536','latitude'=>'-7.874818','provinsi_id' => 15,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Gunungkidul','longitude'=>'110.616892','latitude'=>'-8.030509','provinsi_id' => 15,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kulon Progo','longitude'=>'110.164085','latitude'=>'-7.826680','provinsi_id' => 15,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sleman','longitude'=>'110.335403','latitude'=>'-7.716165','provinsi_id' => 15,]);
		DB::table('kotas')->insert(['kota'=>'Kota Yogyakarta','longitude'=>'110.369490','latitude'=>'-7.795580','provinsi_id' => 15,]);

		//Java_jawatimur
		DB::table('kotas')->insert(['kota'=>'Kabupaten Bangkalan','longitude'=>'112.751982','latitude'=>'-7.025282','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Banyuwangi','longitude'=>'114.369227','latitude'=>'-8.219233','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Blitar','longitude'=>'112.160906','latitude'=>'-8.095463','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Bojonegoro','longitude'=>'111.886929','latitude'=>'-7.152479','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Bondowoso','longitude'=>'113.820641','latitude'=>'-7.918759','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Gresik','longitude'=>'112.652642','latitude'=>'-7.163456','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Jember','longitude'=>'113.700931','latitude'=>'-8.173312','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Jombang','longitude'=>'112.286090','latitude'=>'-7.574087','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kediri','longitude'=>'112.017829','latitude'=>'-7.848016','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Lamongan','longitude'=>'112.414981','latitude'=>'-7.118111','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Lumajang','longitude'=>'113.233490','latitude'=>'-8.134774','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Madiun','longitude'=>'111.530016','latitude'=>'-7.631059','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Magetan','longitude'=>'111.338159','latitude'=>'-7.649341','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Malang','longitude'=>'112.632632','latitude'=>'-7.966620','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Mojokerto','longitude'=>'112.434084','latitude'=>'-7.472638','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Nganjuk','longitude'=>'111.899348','latitude'=>'-7.604372','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Ngawi','longitude'=>'111.457399','latitude'=>'-7.419073','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Pacitan','longitude'=>'111.099692','latitude'=>'-8.195569','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Pamekasan','longitude'=>'113.473910','latitude'=>'-7.154249','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Pasuruan','longitude'=>'112.899923','latitude'=>'-7.646919','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Ponorogo','longitude'=>'111.466610','latitude'=>'-7.866688','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Probolinggo','longitude'=>'113.203713','latitude'=>'-7.776423','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sampang','longitude'=>'113.246701','latitude'=>'-7.193902','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sidoarjo','longitude'=>'112.701550','latitude'=>'-7.449772','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Situbondo','longitude'=>'113.995279','latitude'=>'-7.705053','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sumenep','longitude'=>'113.858299','latitude'=>'-7.009557','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Trenggalek','longitude'=>'111.713129','latitude'=>'-8.086410','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Tuban','longitude'=>'112.050000','latitude'=>'-6.900000','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Tulungagung','longitude'=>'111.964173','latitude'=>'-8.091221','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kota Batu','longitude'=>'112.523903','latitude'=>'-7.867100','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kota Blitar','longitude'=>'112.160906','latitude'=>'-8.095463','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kota Kediri','longitude'=>'112.017829','latitude'=>'-7.848016','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kota Madiun','longitude'=>'111.530016','latitude'=>'-7.631059','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kota Malang','longitude'=>'112.626503','latitude'=>'-7.981894','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kota Mojokerto','longitude'=>'112.434084','latitude'=>'-7.472638','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kota Pasuruan','longitude'=>'112.903297','latitude'=>'-7.644872113211502','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kota Probolinggo','longitude'=>'113.211502','latitude'=>'-7.756928','provinsi_id' => 16,]);
		DB::table('kotas')->insert(['kota'=>'Kota Surabaya','longitude'=>'112.752088','latitude'=>'-7.257472','provinsi_id' => 16,]);

        // Provinsi Bali

		DB::table('kotas')->insert(['kota' => 'Kabupaten Badung','longitude'=>'115.1770586','latitude'=>'-8.5819296','provinsi_id' => 17]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Bangli','longitude'=>'115.354897','latitude'=>'-8.454303','provinsi_id' => 17]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Buleleng','longitude'=>'115.126999','latitude'=>'-8.113831','provinsi_id' => 17]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Gianyar','longitude'=>'115.3255','latitude'=>'-8.544185','provinsi_id' => 17]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Jembrana','longitude'=>'114.6418','latitude'=>'-8.361852','provinsi_id' => 17]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Karangasem','longitude'=>'108.0503042','latitude'=>'-6.3996057','provinsi_id' => 17]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Klungkung','longitude'=>'115.4045111','latitude'=>'-8.5389222','provinsi_id' => 17]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Tabanan','longitude'=>'115.119797','latitude'=>'-8.544516','provinsi_id' => 17]);
		DB::table('kotas')->insert(['kota' => 'Kota Denpasar','longitude'=>'115.222099','latitude'=>'-8.65629','provinsi_id' => 17]);

		// Provinsi Nusa Tenggara Barat

		DB::table('kotas')->insert(['kota' => 'Kabupaten Bima','longitude'=>'118.727402','latitude'=>'-8.460566','provinsi_id' => 18]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Dompu','longitude'=>'118.4747173','latitude'=>'-8.4966318','provinsi_id' => 18]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Lombok Barat','longitude'=>'116.1123078','latitude'=>'-8.6464599','provinsi_id' => 18]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Lombok Tengah','longitude'=>'116.2777073','latitude'=>'-8.694623','provinsi_id' => 18]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Lombok Timur','longitude'=>'116.5609857','latitude'=>'-8.5134471','provinsi_id' => 18]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Lombok Utara','longitude'=>'116.277707','latitude'=>'-8.373908','provinsi_id' => 18]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Sumbawa','longitude'=>'117.3616476','latitude'=>'-8.6529334','provinsi_id' => 18]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Sumbawa Barat','longitude'=>'116.8910342','latitude'=>'-8.9292907','provinsi_id' => 18]);
		DB::table('kotas')->insert(['kota' => 'Kota Bima','longitude'=>'118.727402','latitude'=>'-8.460566','provinsi_id' => 18]);
		DB::table('kotas')->insert(['kota' => 'Kota Mataram','longitude'=>'116.1166667','latitude'=>'-8.5833333','provinsi_id' => 18]);

		// Provinsi Nusa Tenggara Timur

		DB::table('kotas')->insert(['kota' => 'Kabupaten Alor','longitude'=>'124.7298765','latitude'=>'-8.2754027','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Belu','longitude'=>'124.9506625','latitude'=>'-9.4125796','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Ende','longitude'=>'121.654198','latitude'=>'-8.854053','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Flores Timur','longitude'=>'122.9663018','latitude'=>'-8.3130942','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Kupang','longitude'=>'123.5833333','latitude'=>'-10.1833333','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Lembata','longitude'=>'123.4831906','latitude'=>'-8.4719075','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Manggarai','longitude'=>'120.3896651','latitude'=>'-8.6796987','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Manggarai Barat','longitude'=>'120.0665236','latitude'=>'-8.6688149','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Manggarai Timur','longitude'=>'120.6199895','latitude'=>'-8.6206712','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Ngada','longitude'=>'120.9876321','latitude'=>'-8.7430424','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Nagekeo','longitude'=>'121.3084088','latitude'=>'-8.6753545','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Rote Ndao','longitude'=>'123.1239049','latitude'=>'-10.7386421','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Sikka','longitude'=>'122.1291843','latitude'=>'-8.6766175','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Sumba Barat','longitude'=>'119.3947135','latitude'=>'-9.6548326','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Sumba Barat Daya','longitude'=>'119.1390642','latitude'=>'-9.539139','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Sumba Tengah','longitude'=>'119.6962677','latitude'=>'-9.4879226','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Sumba Timur','longitude'=>'120.3435506','latitude'=>'-9.9802103','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Timor Tengah Selatan','longitude'=>'124.4198243','latitude'=>'-9.7762816','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kabupaten Timor Tengah Utara','longitude'=>'124.597132','latitude'=>'-9.4522647','provinsi_id' => 19]);
		DB::table('kotas')->insert(['kota' => 'Kota Kupang','longitude'=>'123.5833333','latitude'=>'-10.1833333','provinsi_id' => 19]);

        //Kalimantan Utara

        DB::table('kotas')->insert(['kota'=>'Kabupaten Bulungan','longitude'=>'116.9852422','latitude'=>'2.9042476','provinsi_id' => 20]);
        DB::table('kotas')->insert(['kota'=>'Kabupaten Malinau','longitude'=>'116.647797','latitude'=>'3.584221','provinsi_id' => 20]);
        DB::table('kotas')->insert(['kota'=>'Kabupaten Nunukan','longitude'=>'117.666952','latitude'=>'4.0609227','provinsi_id' => 20]);
        DB::table('kotas')->insert(['kota'=>'Kabupaten Tana Tidung','longitude'=>'117.0794082','latitude'=>'3.551869','provinsi_id' => 20]);
        DB::table('kotas')->insert(['kota'=>'Kota Tarakan','longitude'=>'117.6333333','latitude'=>'3.3','provinsi_id' => 20]);

		//KalimantanBarat
		DB::table('kotas')->insert(['kota'=>'Kabupaten Bengkayang','longitude'=>'109.021545','latitude'=>'0.658269','provinsi_id' => 21,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kapuas Hulu','longitude'=>'112.76667','latitude'=>'0.81667','provinsi_id' => 21,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kayong Utara','longitude'=>'110.0449662','latitude'=>'-0.9225877','provinsi_id' => 21,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Ketapang','longitude'=>'109.971901','latitude'=>'-1.859098','provinsi_id' => 21,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kubu Raya','longitude'=>'109.473507','latitude'=>'-0.353394','provinsi_id' => 21,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Landak','longitude'=>'109.759167','latitude'=>'0.423729','provinsi_id' => 21,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Melawi','longitude'=>'111.698','latitude'=>'-0.33617','provinsi_id' => 21,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Mempawah','longitude'=>'109.16667','latitude'=>'0.25','provinsi_id' => 21,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sambas','longitude'=>'109.33333','latitude'=>'1.41667','provinsi_id' => 21, ]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sanggau','longitude'=>'110.45','latitude'=>'0.25472','provinsi_id' => 21,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sekadau','longitude'=>'110.95066','latitude'=>'0.03485','provinsi_id' => 21,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sintang','longitude'=>'112.08333','latitude'=>'-0.08333','provinsi_id' => 21,]);
		DB::table('kotas')->insert(['kota'=>'Kota Pontianak','longitude'=>'109.32199','latitude'=>'-0.03109','provinsi_id' => 21,]);
		DB::table('kotas')->insert(['kota'=>'Kota Singkawang','longitude'=>'108.98463','latitude'=>'0.90925','provinsi_id' => 21,]);

        //kalimantantengah
     	DB::table('kotas')->insert(['kota'=>'Kabupaten Barito Selatan','longitude'=>'114.809269','latitude'=>'-1.875943','provinsi_id' => 22,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Barito Timur','longitude'=>'115.24041064768','latitude'=>'-2.1978948','provinsi_id' => 22,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Barito Utara','longitude'=>'115.33','latitude'=>'1.06','provinsi_id' => 22,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Gunung Mas','longitude'=>'113.572850','latitude'=>'-1.252246','provinsi_id' => 22,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kapuas','longitude'=>'114.334143','latitude'=>'-1.811645','provinsi_id' => 22,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Katingan','longitude'=>'112.810551','latitude'=>'-0.975838','provinsi_id' => 22,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kotawaringin Barat','longitude'=>'111.629247','latitude'=>'-2.6865269','provinsi_id' => 22,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kotawaringin Timur','longitude'=>'112.958687','latitude'=>'-2.539465','provinsi_id' => 22,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Lamandau','longitude'=>'111.2869','latitude'=>'-1.83828','provinsi_id' => 22,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Murung Raya','longitude'=>'114.26667','latitude'=>'-0.01667','provinsi_id' => 22,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Pulang Pisau','longitude'=>'113.8623','latitude'=>'-3.11858','provinsi_id' => 22,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sukamara','longitude'=>'111.23681','latitude'=>'-2.62675 ','provinsi_id' => 22,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Seruyan','longitude'=>'112.25','latitude'=>'-2.33333','provinsi_id' => 22,]);
		DB::table('kotas')->insert(['kota'=>'Kota Palangkaraya','longitude'=>'113.9108','latitude'=>'-2.2136','provinsi_id' => 22,]);

		//KalimantanSElatan
		DB::table('kotas')->insert(['kota'=>'Kabupaten Balangan','longitude'=>'115.123417','latitude'=>'-8.792048','provinsi_id' => 23,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Banjar','longitude'=>'108.542274','latitude'=>'-7.376310','provinsi_id' => 23,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Barito Kuala','longitude'=>'114.666794','latitude'=>'-3.071474','provinsi_id' => 23,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Hulu Sungai Selatan','longitude'=>'115.236341','latitude'=>'2.766268','provinsi_id' => 23,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Hulu Sungai Tengah','longitude'=>'115.520736','latitude'=>'-2.615316','provinsi_id' => 23,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Hulu Sungai Utara','longitude'=>'115.188916','latitude'=>'-2.442122','provinsi_id' => 23,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kotabaru','longitude'=>'116.217','latitude'=>'-3.233','provinsi_id' => 23,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Tabalong','longitude'=>'115.568108','latitude'=>'-1.864302','provinsi_id' => 23,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Tanah Bumbu','longitude'=>'115.568108','latitude'=>'-3.451224','provinsi_id' => 23,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Tanah Laut','longitude'=>'114.809269','latitude'=>'-3.769405','provinsi_id' => 23,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Tapin','longitude'=>'-71.307152','latitude'=>'41.740494','provinsi_id' => 23,]);
		DB::table('kotas')->insert(['kota'=>'Kota Banjar Baru','longitude'=>'114.810318','latitude'=>'-3.457242','provinsi_id' => 23,]);
		DB::table('kotas')->insert(['kota'=>'Kota Banjarmasin','longitude'=>'114.594378','latitude'=>'-3.318607','provinsi_id' => 23,]);

		//kalimantantimur
		DB::table('kotas')->insert(['kota'=>'Kabupaten Berau','longitude'=>'116.702492','latitude'=>'1.846291','provinsi_id' => 24,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kutai Barat','longitude'=>'115.8521764','latitude'=>'-0.4051796','provinsi_id' => 24,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kutai Kartanegara','longitude'=>'116.98139','latitude'=>'-0.44019','provinsi_id' => 24,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kutai Timur','longitude'=>'117.61000','latitude'=>'0.41000','provinsi_id' => 24,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Mahakam Ulu','longitude'=>'115.38048','latitude'=>'0.37822','provinsi_id' => 24,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Paser','longitude'=>'116.23535','latitude'=>'-1.43517','provinsi_id' => 24,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Penajam Paser Utara','longitude'=>'116.466598','latitude'=>'-1.32687','provinsi_id' => 24,]);
		DB::table('kotas')->insert(['kota'=>'Kota Balikpapan','longitude'=>'116.831200','latitude'=>'-1.265386','provinsi_id' => 24,]);
		DB::table('kotas')->insert(['kota'=>'Kota Bontang','longitude'=>'117.500000','latitude'=>'0.133333','provinsi_id' => 24,]);
		DB::table('kotas')->insert(['kota'=>'Kota Samarinda','longitude'=>'117.153709','latitude'=>'-0.502106','provinsi_id' => 24,]);

		//gorontalo
		DB::table('kotas')->insert(['kota'=>'Kabupaten Boalemo','longitude'=>'122.3568','latitude'=>'0.62689','provinsi_id' => 25,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Bone Bolango','longitude'=>'123.106773','latitude'=>'0.546004','provinsi_id' => 25,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Gorontalo','longitude'=>'123.058548','latitude'=>'0.556174','provinsi_id' => 25,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Gorontalo Utara','longitude'=>'122.4920088','latitude'=>'0.9252647','provinsi_id' => 25,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Pohuwato','longitude'=>'121.7195459','latitude'=>'0.7055278','provinsi_id' => 25,]);
		DB::table('kotas')->insert(['kota'=>'Kota Gorontalo','longitude'=>'123.0666667','latitude'=>'0.5333333','provinsi_id' => 25,]);

        //sulut
        DB::table('kotas')->insert(['kota'=>'Kabupaten Bolaang Mongondow','longitude'=>'124.0641419','latitude'=>'0.6870994','provinsi_id' => 26,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Bolaang Mongondow Selatan','longitude'=>'123.8411288','latitude'=>'0.4053215','provinsi_id' => 26,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten BOlaang Mongondow Timur','longitude'=>'124.4641848','latitude'=>'0.7152651','provinsi_id' => 26,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten BOlaang Mongondow Utara','longitude'=>'123.5280072','latitude'=>'0.818691','provinsi_id' => 26,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kepulauan Sangihe','longitude'=>'125.5438967','latitude'=>'3.5303212','provinsi_id' => 26,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kepulauan Talaud','longitude'=>'126.768','latitude'=>'4.092','provinsi_id' => 26,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kepulauan Siau Tagulandang Biaro','longitude'=>'125.4124355','latitude'=>'2.345964','provinsi_id' => 26,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Minahasa','longitude'=>'124.5833333','latitude'=>'1.2537','provinsi_id' => 26,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Minahasa Selatan','longitude'=>'124.4641848','latitude'=>'1.0946773','provinsi_id' => 26,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Minahasa Tenggara','longitude'=>'124.7298765','latitude'=>'1.0278551','provinsi_id' => 26,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Minahasa Utara','longitude'=>'124.994751','latitude'=>'1.5327973','provinsi_id' => 26,]);
		DB::table('kotas')->insert(['kota'=>'Kota Bitung','longitude'=>'125.204697','latitude'=>'1.4553529','provinsi_id' => 26,]);
		DB::table('kotas')->insert(['kota'=>'Kota Kotamobagu','longitude'=>'124.3166667','latitude'=>'0.7333333','provinsi_id' => 26,]);
		DB::table('kotas')->insert(['kota'=>'Kota Manado','longitude'=>'124.842843','latitude'=>'1.4917014','provinsi_id' => 26,]);
		DB::table('kotas')->insert(['kota'=>'Kota Tomohon','longitude'=>'124.8384504','latitude'=>'1.3234131','provinsi_id' => 26,]);

        //sulbar
        DB::table('kotas')->insert(['kota'=>'Kabupaten Majene','longitude'=>'118.9062794','latitude'=>'118.9062794','provinsi_id' => 27,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Mamasa','longitude'=>'119.368202','latitude'=>'-2.960135','provinsi_id' => 27,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Mamuju','longitude'=>'118.9295737','latitude'=>'-2.7293364','provinsi_id' => 27,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Mamuju Utara','longitude'=>'119.5107708','latitude'=>'-1.5264542','provinsi_id' => 27,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Pasangkayu','longitude'=>'119.362373','latitude'=>'-1.175216','provinsi_id' => 27,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Polewali Mandar','longitude'=>'119.1390642','latitude'=>'-3.3419323','provinsi_id' => 27,]);

        //sulteng
        DB::table('kotas')->insert(['kota'=>'Kabupaten Banggai','longitude'=>'123.5504076','latitude'=>'-1.6408137','provinsi_id' => 28,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Banggai Kepulauan','longitude'=>'123.5504076','latitude'=>'-1.6408137','provinsi_id' => 28,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Banggai Laut','longitude'=>'123.49388','latitude'=>'-1.61841','provinsi_id' => 28,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Buol','longitude'=>'121.3541631','latitude'=>'0.9695452','provinsi_id' => 28,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Donggala','longitude'=>'119.8352303','latitude'=>'-0.4233155','provinsi_id' => 28,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Morowali','longitude'=>'121.5370003','latitude'=>'-2.3003072','provinsi_id' => 28,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Morowali Utara','longitude'=>'120.9876','latitude'=>' -1.9066','provinsi_id' => 28,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Parigi Moutong','longitude'=>'120.8039474','latitude'=>'0.5817607','provinsi_id' => 28,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Poso','longitude'=>'120.766998','latitude'=>'-1.391922','provinsi_id' => 28,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sigi','longitude'=>'120.0665236','latitude'=>'-1.3834127','provinsi_id' => 28,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Tojo Una-Una','longitude'=>'121.5370003','latitude'=>'-1.098757','provinsi_id' => 28,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Tolitoli','longitude'=>'120.7579834','latitude'=>'0.8768231','provinsi_id' => 28,]);
		DB::table('kotas')->insert(['kota'=>'Kota Palu','longitude'=>'119.850601','latitude'=>'-0.898583','provinsi_id' => 28,]);

		//sulsel
		DB::table('kotas')->insert(['kota'=>'Kabupaten Bantaeng','longitude'=>'120.0202964','latitude'=>'-5.5169316','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Barru','longitude'=>'119.6730939','latitude'=>'-4.4172651','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Bone','longitude'=>'120.216667','latitude'=>'-2.083333','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Bulukumba','longitude'=>'120.2051096','latitude'=>'-5.4329368','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Enrekang','longitude'=>'119.7612','latitude'=>'-3.563128','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Gowa','longitude'=>'119.742604','latitude'=>'-5.3102888','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Jeneponto','longitude'=>'119.6730939','latitude'=>'-5.554579','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kepulauan Selayar','longitude'=>'120.5','latitude'=>'-6.0','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Luwu','longitude'=>'120.2512728','latitude'=>'-3.3052214','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Luwu Timur','longitude'=>'121.1710389','latitude'=>'-2.5825518','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Luwu Utara','longitude'=>'119.9740534','latitude'=>'-2.2690446','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Maros','longitude'=>'119.578903','latitude'=>'-4.94695','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Pangkajene dan kepualauan','longitude'=>'119.5571677','latitude'=>'-4.805035','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Pinrang','longitude'=>'119.557168','latitude'=>'-3.648349','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sindenreng Rappang','longitude'=>'119.794714','latitude'=>'-3.9569217','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sinjai','longitude'=>'120.112735','latitude'=>'-5.217196','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Soppeng','longitude'=>'119.89','latitude'=>'-4.3842','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Takalar','longitude'=>'119.5167','latitude'=>'-5.4167','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Tana Toraja','longitude'=>'119.7966','latitude'=>'-3.0024','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Toraja Utara','longitude'=>'119.7922','latitude'=>'-2.9274','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Wajo','longitude'=>'120.1667','latitude'=>'-4.0','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kota Makassar','longitude'=>'119.4319','latitude'=>'-5.1486','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kota Palopo','longitude'=>'120.2','latitude'=>'-3.0','provinsi_id' => 29,]);
		DB::table('kotas')->insert(['kota'=>'Kota Parepare','longitude'=>'119.6236111','latitude'=>'-4.0166667','provinsi_id' => 29,]);

		//sultra
		DB::table('kotas')->insert(['kota'=>'Kabupaten Bombana','longitude'=>'121.9017954','latitude'=>'-4.6543462','provinsi_id' => 30,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Buton','longitude'=>'122.9888319','latitude'=>'-5.3096355','provinsi_id' => 30,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Buton Selatan','longitude'=>'122.7','latitude'=>'-5.56667','provinsi_id' => 30,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Buton Tengah','longitude'=>'122.33333','latitude'=>'-5.31667','provinsi_id' => 30,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Buton Utara','longitude'=>'123.0338767','latitude'=>'-4.7023424','provinsi_id' => 30,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kolaka','longitude'=>'121.593803','latitude'=>'-4.049665','provinsi_id' => 30,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kolaka Timur','longitude'=>'121.833336','latitude'=>'-3.833333','provinsi_id' => 30,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kolaka Utara','longitude'=>'121.1710389','latitude'=>'-3.1347227','provinsi_id' => 30,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Konawe','longitude'=>'122.0837445','latitude'=>'-3.9380432','provinsi_id' => 30,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Konawe Kepulauan','longitude'=>'123.0999996','latitude'=>'-4.1333328','provinsi_id' => 30,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Konawe Selatan','longitude'=>'122.4467238','latitude'=>'-4.2027915','provinsi_id' => 30,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Konawe Utara','longitude'=>'122.0837445','latitude'=>'-3.3803291','provinsi_id' => 30,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Muna','longitude'=>'122.6277455','latitude'=>'-4.901629','provinsi_id' => 30,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Muna Barat','longitude'=>'122.48333','latitude'=>'-4.83333','provinsi_id' => 30,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Wakatobi','longitude'=>'123.5951925','latitude'=>'-5.3264442','provinsi_id' => 30,]);
		DB::table('kotas')->insert(['kota'=>'Kota Bau-Bau','longitude'=>'122.633','latitude'=>'-5.46667','provinsi_id' => 30,]);
		DB::table('kotas')->insert(['kota'=>'Kota Kendari','longitude'=>'122.5149028','latitude'=>'-3.972201','provinsi_id' => 30,]);
		
        // Provinsi Maluku

        DB::table('kotas')->insert(['kota' => 'Kabupaten Buru','longitude'=>'126.7819505','latitude'=>'-3.3927754','provinsi_id' => 31]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Buru Selatan','longitude'=>'126.7819505','latitude'=>'-3.3927754','provinsi_id' => 31]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Kepulauan Aru','longitude'=>'134.5501935','latitude'=>'-6.1946502','provinsi_id' => 31]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Maluku Barat Daya','longitude'=>'126.3498097','latitude'=>'-7.7851588','provinsi_id' => 31]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Maluku Tengah','longitude'=>'129.4864411','latitude'=>'-3.0166501','provinsi_id' => 31]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Maluku Tenggara','longitude'=>'132.7271587','latitude'=>'-5.7512455','provinsi_id' => 31]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Maluku Tenggara Barat','longitude'=>'131.3611121','latitude'=>'-7.5322642','provinsi_id' => 31]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Seram Bagian Barat','longitude'=>'128.4008357','latitude'=>'-3.1271575','provinsi_id' => 31]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Seram Bagian Timur','longitude'=>'130.390488','latitude'=>'-3.4150761','provinsi_id' => 31]);
        DB::table('kotas')->insert(['kota' => 'Kota Ambon','longitude'=>'128.166419','latitude'=>'-3.65607','provinsi_id' => 31]);
        DB::table('kotas')->insert(['kota' => 'Kota Tual','longitude'=>'132.7475093','latitude'=>'-5.640851','provinsi_id' => 31]);

        //Provinsi Maluku Utara

        DB::table('kotas')->insert(['kota' => 'Kabupaten Halmahera Barat','longitude'=>'128.4849923','latitude'=>'1.3121235','provinsi_id' => 32]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Halmahera Tengah','longitude'=>'128.4849923','latitude'=>'1.3121235','provinsi_id' => 32]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Halmahera Utara','longitude'=>'128.4849923','latitude'=>'1.3121235','provinsi_id' => 32]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Halmahera Selatan','longitude'=>'128.4849923','latitude'=>'1.3121235','provinsi_id' => 32]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Halmahera Timur','longitude'=>'128.4849923','latitude'=>'1.3121235','provinsi_id' => 32]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Kepulauan Sula','longitude'=>'125.3666667','latitude'=>'-1.8666667','provinsi_id' => 32]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Pulau Morotai','longitude'=>'128.400836','latitude'=>'2.365667','provinsi_id' => 32]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Pulau Taliabu','longitude'=>'124.774079','latitude'=>'-1.826834','provinsi_id' => 32]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Ternate','longitude'=>'127.3666667','latitude'=>'0.7833333','provinsi_id' => 32]);
        DB::table('kotas')->insert(['kota' => 'Kabupaten Tidore Kepulauan','longitude'=>'127.4','latitude'=>'0.6833333','provinsi_id' => 32]);


		//PAPUA
		DB::table('kotas')->insert(['kota'=>'Kabupaten Asmat','longitude'=>'138.3988186','latitude'=>'-5.0573958','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Biak Numfor','longitude'=>'135.9800848','latitude'=>'-1.0381022','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Boven Digoel','longitude'=>'140.3481835','latitude'=>'-5.7400018','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Deiyai','longitude'=>'136.4393054','latitude'=>'-4.0974893','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Dogiyai','longitude'=>'135.9610446','latitude'=>'-4.0193872','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Intan Jaya','longitude'=>'136.7478493','latitude'=>'-3.5076422','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Jayapura','longitude'=>'140.717','latitude'=>'-2.533','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Jayawijaya','longitude'=>'138.7995122','latitude'=>'-4.0004481','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Keerom','longitude'=>'140.7624493','latitude'=>'-3.3449536','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kepulauan Yapen','longitude'=>'136.1709012','latitude'=>'-1.7469359','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Lanny Jaya','longitude'=>'138.3190276','latitude'=>'-3.971033','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Mamberamo Raya','longitude'=>'137.7637565','latitude'=>'-2.5331255','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Mamberamo Tengah','longitude'=>'138.4525','latitude'=>'-2.4606','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Mappi','longitude'=>'139.396393','latitude'=>'-7.102232','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Merauke','longitude'=>'140.3945527','latitude'=>'-8.4960406','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Mimika','longitude'=>'137.1362125','latitude'=>'-4.4553223','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Nabire','longitude'=>'135.7520985','latitude'=>'-3.5095462','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Nduga','longitude'=>'138.2393528','latitude'=>'-4.4069496','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Paniai','longitude'=>'136.3624686','latitude'=>'-3.7876441','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Pegunungan Bintang','longitude'=>'140.5135589','latitude'=>'-4.42994','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Puncak','longitude'=>'137.4390','latitude'=>'-3.6724','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Puncak Jaya','longitude'=>'137.1847222','latitude'=>'-4.0836111','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sarmi','longitude'=>'138.743607','latitude'=>'-1.868727','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Supiori','longitude'=>'135.6385125','latitude'=>'-0.7295099','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Tolikara','longitude'=>'138.4787258','latitude'=>'-3.481132','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Waropen','longitude'=>'136.670534','latitude'=>'-2.8435717','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Yahukimo','longitude'=>'139.5279996','latitude'=>'-4.4939717','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Yalimo','longitude'=>'139.4466005','latitude'=>'-3.7852847','provinsi_id' => 33,]);
		DB::table('kotas')->insert(['kota'=>'Kota Jayapura','longitude'=>'140.717','latitude'=>'-2.533','provinsi_id' => 33,]);

		//PAPUA BARAT
		DB::table('kotas')->insert(['kota'=>'Kabupaten Fakfak','longitude'=>'132.2658282','latitude'=>'-2.885237','provinsi_id' => 34,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Kaimana','longitude'=>'133.774506','latitude'=>'-3.660925','provinsi_id' => 34,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Manokwari','longitude'=>'134.0620421','latitude'=>'-0.8614531','provinsi_id' => 34,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Manokwari Selatan','longitude'=>'134.016663','latitude'=>'134.016663','provinsi_id' => 34,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Maybat','longitude'=>'101.6997','latitude'=>'-3.1472','provinsi_id' => 34,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Pegunungan Arfak','longitude'=>'133.9666628','latitude'=>'-1.083333','provinsi_id' => 34,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Raja Ampat','longitude'=>'130.8778586','latitude'=>'-1.0915151','provinsi_id' => 34,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sorong','longitude'=>'131.25','latitude'=>'-0.8666667','provinsi_id' => 34,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Sorong Selatan','longitude'=>'131.25','latitude'=>'-0.8666667','provinsi_id' => 34,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Tambrauw','longitude'=>'132.3938375','latitude'=>'-0.781856','provinsi_id' => 34,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Teluk Bintuni','longitude'=>'133.329466','latitude'=>'-1.9056848','provinsi_id' => 34,]);
		DB::table('kotas')->insert(['kota'=>'Kabupaten Teluk Wondama','longitude'=>'134.3236557','latitude'=>'-2.8551699','provinsi_id' => 34,]);
		DB::table('kotas')->insert(['kota'=>'Kota Sorong','longitude'=>'131.25', 'latitude'=>'-0.8666667','provinsi_id' => 34,]);

		DB::table('kotas')->insert(['kota'=>'Other','longitude'=>'0', 'latitude'=>'0','provinsi_id' => 35,]);
    }
}
