<?php

use Illuminate\Database\Seeder;

class TinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tin')->insert([
           ['lang' => '1 ','idLT' => '1','TomTat' => '', 'TieuDe' => 'Hoàng hôn trên sông Mê Kông','idTag' => rand(0,50),'TinNoiBat' => rand(0,1),'SoLanXem' => rand(100,1000),'Content' => '','idUser' => rand(0,10),'Ngay' => 'new \DateTime()','urlHinh' => '','AnHien' => '1'],
           ['lang' => '1 ','idLT' => '2','TomTat' => '', 'TieuDe'=>'Tận cùng nỗi đau','idTag' => rand(0,50),'TinNoiBat' => rand(0,1),'SoLanXem' => rand(100,1000),'Content' => '','idUser' => rand(0,10),'Ngay' => 'new \DateTime()','urlHinh' => '','AnHien' => '1'],
           ['lang' => '1' , 'idLT' => '3','TomTat' => '', 'TieuDe'=>'Chuyện ở xứ Đền thiêng Đồng Cổ','idTag' => rand(0,50),'TinNoiBat' => rand(0,1),'SoLanXem' => rand(100,1000),'Content' => '','idUser' => rand(0,10),'Ngay' => 'new \DateTime()','urlHinh' => '','AnHien' => '1'],
           ['lang' => '1 ','idLT' => '4','TomTat' => '', 'TieuDe'=>'Thăm trang trại bò lớn nhất Việt Nam','idTag' => rand(0,50),'TinNoiBat' => rand(0,1),'SoLanXem' => rand(100,1000),'Content' => '','idUser' => rand(0,10),'Ngay' => 'new \DateTime()','urlHinh' => '','AnHien' => '1'],
           ['lang' => '1 ','idLT' => '5','TomTat' => '', 'TieuDe'=>'70 vạn lượt người truy cập chuyên trang về nhạc sỹ Trịnh Công Sơn','idTag' => rand(0,50),'TinNoiBat' => rand(0,1),'SoLanXem' => rand(100,1000),'Content' => '','idUser' => rand(0,10),'Ngay' => 'new \DateTime()','urlHinh' => '','AnHien' => '1'],
           ['lang' => '1' , 'idLT' => '6','TomTat' => '', 'TieuDe'=>'"Hồng lâu mộng" bản mới: Sẵn sàng khởi quay','idTag' => rand(0,50),'TinNoiBat' => rand(0,1),'SoLanXem' => rand(100,1000),'Content' => '','idUser' => rand(0,10),'Ngay' => 'new \DateTime()','urlHinh' => '','AnHien' => '1'],
           ['lang' => '1 ','idLT' => '7','TomTat' => '', 'TieuDe'=>'Ngày sẽ dài 25 tiếng','idTag' => rand(0,50),'TinNoiBat' => rand(0,1),'SoLanXem' => rand(100,1000),'Content' => '','idUser' => rand(0,10),'Ngay' => 'new \DateTime()','urlHinh' => '','AnHien' => '1'],
           ['lang' => '1 ','idLT' => '8','TomTat' => '', 'TieuDe'=>'Nói dối thời công nghệ số','TinNoiBat' => rand(0,1),'SoLanXem' => rand(100,1000),'Content' => '','idUser' => rand(0,10),'Ngay' => 'new \DateTime()','urlHinh' => '','AnHien' => '1'],
           ['lang' => '1' , 'idLT' => '9','TomTat' => '', 'TieuDe'=>'Tỷ phú Abramovich đóng du thuyền "Chelsea"','TinNoiBat' => rand(0,1),'SoLanXem' => rand(100,1000),'Content' => '','idUser' => rand(0,10),'Ngay' => 'new \DateTime()','urlHinh' => '','AnHien' => '1'],
           ['lang' => '1','idLT' => '10','TomTat' => '', 'TieuDe'=>'Đo tiếng cười thật hay giả','idTag' => rand(0,50),'TinNoiBat' => rand(0,1),'SoLanXem' => rand(100,1000),'Content' => '','idUser' => rand(0,10),'Ngay' => 'new \DateTime()','urlHinh' => '','AnHien' => '1'],
           ['lang' => '1 ','idLT' => '11','TomTat' => '', 'TieuDe'=>'Một góc đất phương Nam ','idTag' => rand(0,50),'TinNoiBat' => rand(0,1),'SoLanXem' => rand(100,1000),'Content' => '','idUser' => rand(0,10),'Ngay' => 'new \DateTime()','urlHinh' => '','AnHien' => '1'],
           ['lang' => '1' , 'idLT' => '12','TomTat' => '', 'TieuDe'=>'Làng cổ Miệt Vườn','idTag' => rand(0,50),'TinNoiBat' => rand(0,1),'SoLanXem' => rand(100,1000),'Content' => '','idUser' => rand(0,10),'Ngay' => 'new \DateTime()','urlHinh' => '','AnHien' => '1'],
       ]);
    }
}
