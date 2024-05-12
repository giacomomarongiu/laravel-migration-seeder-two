@extends('layouts.app')

@section('content')
    <main class="bg-danger bg-opacity-50 py-3">
        <div class="container bg-success  py-3">
            <div class="row g-2">
                @foreach ($trains as $train)
                    <div class="col-3">
                        <a href="{{ route('single', $train) }}" style="text-decoration: none">
                            <div class="card border-0" style="width: 15rem;">
                                <div class="card-header bg-danger bg-opacity-50">
                                    <h1 class="">{{ $train->enterprise }}</h1>
                                    <h6>{{ $train->train_code }}</h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Stazione di partenza: <span
                                            class="fw-bold">{{ $train->departure_station }}</span></li>
                                    <li class="list-group-item">Stazione di arrivo: <span
                                            class="fw-bold">{{ $train->arrival_station }}</span></li>
                                    <li class="list-group-item">Orario di partenza: <span class="fw-bold">
                                            {{ $train->departure_time != null ? $train->departure_time : 'In aggiornamento' }}
                                        </span></li>
                                    <li class="list-group-item">Orario di partenza: <span class="fw-bold">
                                            {{ $train->arrival_time != null ? $train->arrival_time : 'In aggiornamento' }}
                                        </span></li>
                                    <li
                                        class="list-group-item {{ $train->is_in_time == 1 ? 'text-success' : 'text-danger' }}">
                                        <span class="fw-bold">
                                            {{ $train->is_in_time == 1 ? 'In orario' : 'È in ritardo' }}
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
