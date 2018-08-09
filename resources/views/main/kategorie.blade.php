<div class="list-group">
    @foreach ($items as $item)
        <a href="{{ url($item->link()) }}" class="list-group-item">{{ $item->title }}</a>
    @endforeach
</div>

