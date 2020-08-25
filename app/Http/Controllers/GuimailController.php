<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class GuimailController extends Controller {
    function guimaillienhe(Request $request){
        $input = $request->all();
          Mail::send('pages.mauthulienhe',
            array(  'name'=>$input["name"],
                    'email'=>$input["email"],
                    'subject'=>$input["subject"],
                    'content'=>$input['message']
             ),
            function($message){
                $message
                ->from('phuocnv1112@gmail.com','Từ ứng dụng website')
                ->to('phuocnv106@gmail.com', 'Ban quan tri')
                //->attach('img/a.png') // gửi đính kèm file nếu muốn nó còn k qua đc đây mà
                ->subject('Thư liên hệ');
            }
          );
          Session::put('thongbao', 'Cảm ơn bạn đã liên hệ đến chúng tôi');
          return Redirect::to('/contact.html');
        //print_r($_POST);
      }
}
