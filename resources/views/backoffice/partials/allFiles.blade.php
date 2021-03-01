<div class="container mt-3">
    <h1 class="my-3">Fichiers uploadés</h1>

    <div>
        @foreach ($store as $item)
            @if (Str::after($item->src, '.') =='jpeg' || Str::after($item->src, '.') =='png' || Str::after($item->src, '.') =='jpg')
                <img height="100px" src="{{asset('storage/img/'.$item->src)}}" alt="">
            @else
                <p>{{$item->src}}</p>
            @endif
            
        @endforeach
    </div>
</div>