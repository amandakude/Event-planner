@extends ('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>{{ $event->title }}</h1>
                <p>When: {{ $event->date }} {{ $event->time }}</p>
                </div>

                <div class="panel-body">
                    
                    {{ $event->body }}
    
                    <hr>

                    <div class="keywords">
                        <h4>Keywords:</h4>
                        @foreach ($event->keywords as $keyword)

                        <mark>{{ $keyword->word }}</mark>

                        @endforeach
                    </div>

                    <br>
                    <form method="POST" action="/events/{{ $event->id }}/keywords">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="word">Add a new keyword:</label>
                            <input type="text" class="form-control" id="word" name="word">
                        </div>

                        @if ($errors->has('word'))
                            <span class="help-block">
                                <strong>{{ $errors->first('word') }}</strong>
                            </span>
                        <br>
                        @endif

                        <button type="submit" class="btn btn-primary">Add</button>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
