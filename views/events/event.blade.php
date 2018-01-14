<div class="event-post">
    <h2 class="event-title">
        <a href='/events/{{ $event->id }}'> 
            {{ $event->title }}
        </a>
    </h2>
            <p class="event-meta">{{ $event->date }} {{ $event->time }}</p>

            <p>{{ $event->body }}</p>
</div>
