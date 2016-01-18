@extends('layout.index')

@section('body')
<div id="portfolio" class="light-texture-2">
  <div class="page-header">
    <div class="container">
      <div class="sixteen columns">
        <h1 class="one"><span>NOTICIAS</span></h1>
      </div>
    </div>
  </div>

  <div class="container">
      <!-- Portfolio Navigation Starts -->
      <div class="sixteen columns center">
        @include('admin.contenido.index')
      </div>
      <!-- Portfolio Navigation Ends -->
      
      <div class="clear"></div>
      <div id="container-thumbs" class="gallery">
          @foreach($all as $data)
            <!-- Project Starts -->
            <div class="one-third column element view view-third video">
              <img src="images/portfolio/thumbs/3.jpg" class="scale-with-grid image-shadow" alt="" />
              <div class="title">{{ $data->titulo }}</div>
              <div class="description"></div>
              <div class="mask">
                    <h3>Video[youtube]</h3>
                    <a href="https://www.youtube.com/watch?v=7tJ6uywPnQE" rel="prettyPhoto[mixed]" title="" class="info"><img src="images/portfolio/video.png" alt="" /></a> 
              </div>
            </div>
            <!-- Project Ends --> 
          @endforeach                         
      </div>
  </div>
</div>
@endsection