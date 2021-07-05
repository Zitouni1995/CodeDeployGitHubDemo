<x-master-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <h1 class="text-center mt-2">Ajout d'un nouveau livre</h1>
              <hr>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 offset-3">
              <form method="post" action="{{route('livres.store')}}">
                @method('POST')
                @include('partials._livre-form')
              </form> 
            </div>
          </div>
        </div>
    </div>
</x-master-layout>
