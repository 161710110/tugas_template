    <?php

use Illuminate\Database\Seeder;

class siswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a =[
        		[
        		'NIM'=>'111111111',
        		'Nama'=>'Fikri Haikal',
        		'Tempat_Lahir'=>'Bandung',
        	 	'Tanggal_Lahir'=>'2001-03-20',
        	 	'Alamat'=>'Rancamanyar',
        	 	'Cita_Cita'=>'Programer and Gamerpro',
        	 	'Hobi'=>'Tidur',
        	 	'Photo'=>'ac.jpg' 
        	 	],
        	 	[
        		'NIM'=>'222222222',
        		'Nama'=>'Muhammad Gema Nuryana Agung',
        		'Tempat_Lahir'=>'Medan',
        	 	'Tanggal_Lahir'=>'1996-12-02',
        	 	'Alamat'=>'Sayuran',
        	 	'Cita_Cita'=>'Pengangguran',
        	 	'Hobi'=>'Game',
        	 	'Photo'=>'n.png' 
        	 	],
                [
                'NIM'=>'333333333',
                'Nama'=>'Haikal Maulana Firdaus',
                'Tempat_Lahir'=>'Bandung',
                'Tanggal_Lahir'=>'2001-04-13',
                'Alamat'=>'Baleendah',
                'Cita_Cita'=>'Bandar ekso',
                'Hobi'=>'Papanasan',
                'Photo'=>'mau.jpg' 
                ],
                [
                'NIM'=>'444444444',
                'Nama'=>'Adithia Janwar',
                'Tempat_Lahir'=>'Solo',
                'Tanggal_Lahir'=>'2000-01-26',
                'Alamat'=>'Situ Tarate',
                'Cita_Cita'=>'Pemain Cadangan',
                'Hobi'=>'Basket',
                'Photo'=>'adt.jpg' 
                ],
                [
                'NIM'=>'555555555',
                'Nama'=>'Rafy Fakhrizal',
                'Tempat_Lahir'=>'Bandung',
                'Tanggal_Lahir'=>'2001-12-02',
                'Alamat'=>'Rancamanyar',
                'Cita_Cita'=>'Tampan',
                'Hobi'=>'Futsal',
                'Photo'=>'han.jpg' 
                ]
    		];
        	DB::table('siswas')->insert($a);
    }
}
