<x-sinkondo_sandrine_layout>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-2">Les livres de notre bibliothèque</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
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
                <div class="ml-2">
                    <a class="btn btn-primary btn sm "href="#i class="fas fa-plus"></i>Ajouter</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th>Editeur</th>
                            <th>Exemplaire</th>
                            <th>Description</th>
                            <th>Actions</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($livres as $livre)
                            <tr>
                                <td scope="row">{{ $livre->titre }}</td>
                                <td>{{ $livre->auteur }}</td>
                                <td>{{ $livre->editeur }}</td>
                                <td>{{ $livre->exemplaire }}</td>
                                <td>{{ $livre->resume }}</td>
                                <td class="d-flex">
                                        {{-- <a onClick="event.preventDefault();delConfirm('{{ $livre->id }}')" class="btn btn-danger btn-sm" href="{{ route('livres.destroy',$livre) }}"><i class="fas fa-trash"></i></a> --}}
                                        <form  method="post"  action="{{ route('livres.destroy',$livre) }}">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger d-flex" type="submit">Supprimer </button>
                                        </form>   
                                </td> 
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                <div class="row d-flex justify-content-center mt-5">
                    <div class="">
                        {{ $livres->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-sinkondo_sandrine_layout>