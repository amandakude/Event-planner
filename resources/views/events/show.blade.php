@extends ('layouts.master')

@section ('content')
<div class="col-sm-8 blog-main">
    <h1>{{ $event->title }}</h1>
    
    {{ $event->body }}
    
    <hr>
    
    <div class="keywords">
        <h4>Keywords:</h4>
        @foreach ($event->keywords as $keyword)
            
        {{ $keyword->word }}
        
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
@endsection
