@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1>Elenco treni in partenza</h1>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="card mx-3 " style="width: 18rem;">
                    <div class="card-header text-center">
                        <h3>{{ $train->departure_station }} - {{ $train->arrival_station }}</h3>
                        <p>Codice treno: {{ $train->train_code }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Compagnia: {{ $train->company }}</li>

                        <li class="list-group-item">Partenza: {{ $train->departure_time }}</li>
                        <li class="list-group-item">Arrivo: {{ $train->arrival_time }}</li>

                        <li class="list-group-item">Vagoni: {{ $train->wagons_number }}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
