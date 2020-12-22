<?php

use Illuminate\Database\Seeder;
use app\produks;

class produkseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert(array(
          [
              'namaproduk'=>"Flashdisk 4GB KengStong",
              'id_kat'=>'3',
              'qty'=>'210',
              'harga_jual'=>'60000',
              'harga_brli'=>'45000'
          ],  
          [
            'namaproduk'=>"Flashdisk 8GB KengStong",
            'id_kat'=>'3',
            'qty'=>'210',
            'harga_jual'=>'85000',
            'harga_brli'=>'60000'
          ]
          ));
    }
}
