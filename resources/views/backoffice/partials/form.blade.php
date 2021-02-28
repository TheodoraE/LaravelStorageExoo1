<div class="container">
    <h1 class="my-5">Ajouter des fichiers</h1>

    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
	    @endif
    </div>

    <form action="/store-fichier" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="name" id="">
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
</div>