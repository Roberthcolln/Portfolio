@extends('layouts.index')
@section('content')
<?php
$title = 'Home';
?>
<div class="videoWrapper">
  <video  autoplay="" loop="" muted="" style="max-width: 100%;" class="custom-video" poster="videos/792bd98f3e617786c850493560e11c45.jpg">
    <source src="videos/vid.mp4" type="video/mp4" >

    Your browser does not support the video tag.
  </video>
</div>
@endsection