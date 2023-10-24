@extends('layouts.base')

@section('title', 'Principal | Velos')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Gestión de Vuelos</h1>
            </div>
            <!-- div class="col-12">
                <form action="{ route('flights.search') }}" method="get" class="row">
                    <div class="col-12 mb-1">
                        <label for="destination_city" class="form-label">Destino:</label>
                        <input type="text" class="form-control" id="destination_city" name="destination_city">
                    </div>
                    <div class="col-1 mb-1">
                        <button type="submit" class="btn btn-sm btn-primary">
                            <i class="fa-solid fa-search"></i>
                        </button>
                    </div>
                    <hr>
                </form>
            </div> -->
            <div class="row">
                <div class="col-12 mb-1">
                    <a href="{{ route('flights.create') }}" class="btn btn-success">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                </div>
                @foreach($flights as $flight)
                    <div class="col-md-4">
                        <div class="card p-3 mb-2">
                            <img src="{{ $flight->fl_img  }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                    <strong>Origen:</strong> {{ $flight->fl_origin_city  }} <br>
                                    <strong>Destino:</strong> {{ $flight->fl_destination_city }} <br>
                                    <strong>Fecha:</strong> {{ $flight->fl_date }} <br>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('flights.edit', $flight) }}" class="btn btn-sm btn-warning">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('flights.destroy', $flight->fl_id) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('¿Está seguro que desea eliminar?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
