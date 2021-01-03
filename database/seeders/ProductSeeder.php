<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
        [
            'no_tender'=>'25/2020',
            'name'=>'Cadangan Perolehan Komputer Riba Untuk Kegunaan Pejabat-Pejabat Pentadbiran MARA',
            'publish_date'=>'19/10/2020',
            'closing_date'=>'27/11/2020',
            'agent'=>'uitm',
            'kod_bidang'=>'330101',
            'description'=>'Dokumen tender boleh didapati pada waktu pejabat (8.30 pagi – 4.30 petang) di alamat seperti di
            bawah. Dokumen tawaran tidak akan dijual selepas tempoh ini. ',
        ],
        [
            'no_tender'=>'22/2020',
            'name'=>'Cadangan Perolehan Komputer Riba Untuk Kegunaan Pejabat-Pejabat Pentadbiran MARA',
            'publish_date'=>'09/10/2020',
            'closing_date'=>'12/11/2020',
            'agent'=>'MARA',
            'kod_bidang'=>'210101',
            'description'=>'Dokumen tender boleh didapati pada waktu pejabat (8.30 pagi – 4.30 petang) di alamat seperti di
            bawah. Dokumen tawaran tidak akan dijual selepas tempoh ini. ', 
        ],
        [
            'no_tender'=>'99/2029',
            'name'=>'Cadangan Perolehan Komputer Riba Untuk Kegunaan Pejabat-Pejabat Pentadbiran MARA',
            'publish_date'=>'25/10/2020',
            'closing_date'=>'17/12/2020',
            'agent'=>'jkr',
            'kod_bidang'=>'910106',
            'description'=>'Dokumen tender boleh didapati pada waktu pejabat (8.30 pagi – 4.30 petang) di alamat seperti di
            bawah. Dokumen tawaran tidak akan dijual selepas tempoh ini. ',
        ]
            
        ]);
    }
}
