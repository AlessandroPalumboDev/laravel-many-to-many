@extends("layouts.app")


@section("content")
    <div class="container py-5 text-light">
        <div class="row">
            <div class="card my-5 bg-dark text-light">

                <div class="card-header">
                    <h2 class="text-center my-3">
                        {{ $project->name }}
                    </h2>
                </div>

                <div class="card-body">
                    <h5>
                        Tipo: {{$project->type?->title ?: 'Non definito'}}
                    </h5>

                    <hr>

                    <h5>
                        Tecnologie utilizzate: 
                    </h5>
                    <ul>
                        @foreach ($project->technology as $technology)
                        
                            <li >
                                {{$technology->name}}
                            </li>

                        @endforeach
                    </ul>

                    <hr>

                    <h5>
                        Descrizione:
                    </h5>
                    <p>
                        {{$project->description}}
                    </p>

                </div>
                <div class="card-footer py-3">

                    <a href="{{ route("projects") }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left"></i>
                        Torna alla lista Progetti
                    </a>
    
                </div>
            </div>

        </div>
        </div>
    </div>
@endsection