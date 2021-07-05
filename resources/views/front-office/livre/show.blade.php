<x-master-layout>
    <div class="container">
        <div class="row">
            @if(session('statut'))
                <div class="col-md-12">

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong> {{ session('statut') }}</strong> 
                    </div>
                </div>
           @endif
            <div class="col-md-12">
                <h1 class="text-center mt-2">{{ $livre->titre }}</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-primary">Auteur:{{ $livre->auteur }}</li>
                    <li class="list-group-item list-group-item-primary">Editeur:{{ $livre->editeur }}</li>
                    <li class="list-group-item list-group-item-warning">Exempaire: {{ $livre->exemplaire }}</li>
                    <li class="list-group-item list-group-item-warning">Résumé: {{ $livre->resume }}</li>
                    <li class="list-group-item list-group-item-dark"> {{ $livre->titre }}</li>
                </ul>
            </div>
        </div>
    </div>
</x-master-layout>