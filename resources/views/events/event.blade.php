<div class="blog-post">
    <h2 class="blog-post-title">
        <a href='/events/{{ $event->id }}'> 
            {{ $event->title }}
        </a>
    </h2>
            <p class="blog-post-meta">{{ $event->date }} {{ $event->time }}</p>

            <p>{{ $event->body }}</p>
</div>