@extends('master')

@section('content')

<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album</h1>
        <p class="lead text-muted">More looks on Lenovo Legion 5</p>
  
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


      @if(count($images))
        @foreach($images as $image)
        <div class="col">
          <div class="card shadow-sm">
            <img src="{{$image}}" alt="Legion 5" width="100%">
  
          </div>
        </div>
        @endforeach
        @else
          No Images Available
        @endif

        
  
</main> 
  </body>
</html>


@endsection