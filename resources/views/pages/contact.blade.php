@extends('layout')
@section('title','| Liên Hệ ')
@section('content')
    <!-- Breadcrumbs -->
    <div class="container">
      <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
          <a href="index.html" class="breadcrumbs__url">Home</a>
        </li>
        <li class="breadcrumbs__item breadcrumbs__item--current">
          Liên Hệ
        </li>
      </ul>
    </div>

    <div class="main-container container" id="main-container">
      <!-- post content -->
      <div class="blog__content mb-72">
        <h1 class="page-title">Liên Hệ Chúng Tôi</h1>
        @php
          $message = Session::get('thongbao');
          if($message){
            echo "<h3 class='text-alert' style='color:green'> ".$message."</h3>";
            Session::put('thongbao',null);
          }
        @endphp
        <!-- Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.741034647359!2d106.61014931411682!3d10.83111926114514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bceba29a40d%3A0xfdd700e9dad8283a!2zMTY1LCAyMCBQaGFuIFbEg24gSOG7m24sIFTDom4gVGjhu5tpIE5o4bqldCwgUXXhuq1uIDEyLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1591256646693!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h4>Gửi tin nhắn tới chúng tôi</h4>
            <p>Đừng ngần ngại liên lạc. Chúng tôi sẽ trả lời bạn càng sớm càng tốt.</p>
            <ul class="contact-items">
              <li class="contact-item"><address>165/20 Phan Văn Hớn - Quận 12 - Tp.HCM</address></li>
              <li class="contact-item"><a href="tel:0365610561">0365610561</a></li>
              <li class="contact-item"><a href="mailto:phuocnv106@gmail.com">phuocnv106@gmail.com</a></li>
            </ul>

            <!-- Contact Form -->
            <form id="contact-form" class="contact-form mt-30 mb-30" action="{{URL::to('/lienhe')}}" method="post">
{{ csrf_field() }}
              <div class="contact-name">
                <label for="name">Họ và Tên <abbr title="required" class="required">*</abbr></label>
                <input name="name" id="name" type="text">
              </div>
              <div class="contact-email">
                <label for="email">Email <abbr title="required" class="required">*</abbr></label>
                <input name="email" id="email" type="email">
              </div>
              <div class="contact-subject">
                <label for="email">Tiêu Đề</label>
                <input name="subject" id="subject" type="text">
              </div>
              <div class="contact-message">
                <label for="message">Nội Dung <abbr title="required" class="required">*</abbr></label>
                <textarea id="message" name="message" rows="7" required="required"></textarea>
              </div>

              <input type="submit" class="btn btn-lg btn-color btn-button" value="Gửi" id="submit-message">
              <div id="msg" class="message"></div>


            </form>

          </div>
        </div>
      </div> <!-- end post content -->
    </div> <!-- end main container -->

@stop()
