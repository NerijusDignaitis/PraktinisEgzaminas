@extends ('main')
@section('content')
    <div>
        <h2 class="text-center py-5 bg-success">Laisvos knygos rezervacijai !</h2>
    </div>
    <section class="pt-4">
        <div class="container">
            <div class="row mt-3">
         {{-- @foreach($books as $book)   --}}

                <div class="col-4 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="" class="card-img-top" alt="Neatvaizduojama">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                            <a href="/renginys/" class="btn btn-primary">Rezervuoti knyga</a>
                            <a href="/renginys/register/" class="btn btn-primary">Prideti i megstamu sarasa</a>
                        </div>
                    </div>
                </div>
            {{-- @endforeach --}}
        </div>
        </div>
    </section>
        <br>
    @endsection