@extends('layout')
@section('title','| Về Chúng Tôi')
@section('content')
<!-- Breadcrumbs -->
<div class="container">
  <ul class="breadcrumbs">
    <li class="breadcrumbs__item">
      <a href="index.html" class="breadcrumbs__url">Home</a>
    </li>
    <li class="breadcrumbs__item breadcrumbs__item--current">
      Về Chúng Tôi
    </li>
  </ul>
</div>

<div class="main-container container" id="main-container">
  <!-- post content -->
  <div class="blog__content mb-72">
    <h1 class="page-title">Về Chúng Tôi</h1>
    <img src="img/content/about/about_bg.jpg" class="page-featured-img">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="entry__article">
          Chúng tôi dựa trên sự tuân thủ pháp luật để đưa tin tức đúng và mới nhất đến quý bạn đọc.
        </div>
      </div>
    </div>
  </div> <!-- end post content -->
</div> <!-- end main container -->

@stop()
