<div class="container mt-3">
    <h1 class="my-3">Fichiers uploadés</h1>

    <div>
        @foreach ($store as $item)
            <img src="{{asset('storage/img/'.$item->src)}}" alt="">
            
        @endforeach
        {{-- <img src="{{asset('/storage/img/wlss4Y7jZU71DSeYfpYzIBPuqPcqL16P4kHEnnyJ.pdf')}}" alt=""> --}}
        {{-- {{dd($store)}} --}}
    </div>
</div>