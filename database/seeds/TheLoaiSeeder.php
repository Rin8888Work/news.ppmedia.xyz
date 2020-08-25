<?php

use Illuminate\Database\Seeder;

class TheLoaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('theloai')->insert([
             ['lang' => '1 ','TenTL'=>'Tin xã hội','ThuTu' => rand(0,100),'AnHien' => '1'],
             ['lang' => '1 ','TenTL'=>'Việc làm','ThuTu' => rand(0,100),'AnHien' => '1'],
             ['lang' => '1' , 'TenTL'=>'Nghệ thuật sống','ThuTu' => rand(0,100),'AnHien' => '1'],
             ['lang' => '1 ','TenTL'=>'Thường thức','ThuTu' => rand(0,100),'AnHien' => '1'],
             ['lang' => '1 ','TenTL'=>'Thư giãn','ThuTu' => rand(0,100),'AnHien' => '1'],
             ['lang' => '1' , 'TenTL'=>'Thế giới web','ThuTu' => rand(0,100),'AnHien' => '1'],
             ['lang' => '0 ','TenTL'=>'Travel','ThuTu' => rand(0,100),'AnHien' => '1'],
             ['lang' => '0 ','TenTL'=>'Health','ThuTu' => rand(0,100),'AnHien' => '1'],
             ['lang' => '0' , 'TenTL'=>'Business','ThuTu' => rand(0,100),'AnHien' => '1'],
             ['lang' => '0 ','TenTL'=>'LifeStyle & Living','ThuTu' =>rand(0,100),'AnHien' => '1'],
             ['lang' => '0 ','TenTL'=>'Entertainment ','ThuTu' => rand(0,100),'AnHien' => '1'],
             ['lang' => '1' , 'TenTL'=>'Thiên nhiên','ThuTu' => rand(0,100),'AnHien' => '1'],
         ]);
    }
}
