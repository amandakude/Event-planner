@extends ('layouts.master')

@section ('content')
<div class="col-sm-8 blog-main">

    @foreach ($events as $event)
          @include ('events.event')
    @endforeach

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">More</a>
            <a class="btn btn-outline-secondary disabled" href="#">Less</a>
          </nav>

        </div><!-- /.blog-main -->

@endsection