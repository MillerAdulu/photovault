@if (count($photos) > 0)
    @foreach ($photos as $photo)
        Url: {{ $photo->images[0]->source }}<br>
        ------------------------------------<br>
    @endforeach
@endif