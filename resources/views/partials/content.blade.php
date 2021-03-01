<div class="container mt-3">
    <h1 class="my-3">Tous les fichiers</h1>

    <div class="my-5">
        <h3>Les images</h3>

        @foreach ($store as $item)
            @if (Str::after($item->src, '.') =='jpeg' || Str::after($item->src, '.') =='png' || Str::after($item->src, '.') =='jpg')
                <img height="100px" src="{{asset('storage/img/'.$item->src)}}" alt="">
            @endif            
        @endforeach
    </div>

    <div class="my-5">
        <h3>Les fichiers</h3>

        @foreach ($store as $item)
            @if (Str::after($item->src, '.') =='pdf' || Str::after($item->src, '.') =='doc')
                <p>{{$item->src}}</p>
            @endif            
        @endforeach
    </div>
</div>