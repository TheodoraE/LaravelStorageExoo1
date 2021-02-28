<div class="container mt-3">
    <h1 class="my-3">Tous les fichiers</h1>

    <div class="my-5">
        <h3>Les images</h3>

        @foreach ($store as $item)
            <img src="{{asset('storage/img/'.$item->src)}}" alt="">
            
        @endforeach
    </div>

    <div class="my-5">
        <h3>Les fichiers</h3>

    </div>
</div>