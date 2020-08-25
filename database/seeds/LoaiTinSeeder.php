<?php

use Illuminate\Database\Seeder;

class LoaiTinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      DB::table('loaitin')->insert([
           ['lang' => '1 ','idTL' => '1', 'Ten'=>'Thể thao','ThuTu' => rand(0,100),'AnHien' => '1'],
           ['lang' => '1 ','idTL' => '2', 'Ten'=>'Du lịch','ThuTu' => rand(0,100),'AnHien' => '1'],
           ['lang' => '1' , 'idTL' => '3', 'Ten'=>'Khoa học','ThuTu' => rand(0,100),'AnHien' => '1'],
           ['lang' => '1 ','idTL' => '4', 'Ten'=>'Xã hội','ThuTu' => rand(0,100),'AnHien' => '1'],
           ['lang' => '1 ','idTL' => '5', 'Ten'=>'Văn hoá','ThuTu' => rand(0,100),'AnHien' => '1'],
           ['lang' => '1' , 'idTL' => '6', 'Ten'=>'Pháp luật','ThuTu' => rand(0,100),'AnHien' => '1'],
           ['lang' => '1 ','idTL' => '7', 'Ten'=>'Giáo dục','ThuTu' => rand(0,100),'AnHien' => '1'],
           ['lang' => '1 ','idTL' => '8', 'Ten'=>'Chia sẻ','ThuTu' => rand(0,100),'AnHien' => '1'],
           ['lang' => '1' , 'idTL' => '9', 'Ten'=>'Sống đẹp','ThuTu' => rand(0,100),'AnHien' => '1'],
           ['lang' => '1','idTL' => '10', 'Ten'=>'Mẹo vặt','ThuTu' => rand(0,100),'AnHien' => '1'],
           ['lang' => '1 ','idTL' => '11', 'Ten'=>'Sức khỏe ','ThuTu' => rand(0,100),'AnHien' => '1'],
           ['lang' => '1' , 'idTL' => '12', 'Ten'=>'Thơ hay','ThuTu' => rand(0,100),'AnHien' => '1'],
       ]);
    }
}
