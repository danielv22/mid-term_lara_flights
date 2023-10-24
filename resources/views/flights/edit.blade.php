@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="alert alert-info text-center">Editar Vuelo</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('flights.update', $flight) }}" method="post" class="row">
                    @csrf
                    @method('PUT')
                    <div class="col-6">
                        <label for="fl_date" class="form-label">Fecha de salida del vuelo</label>
                        <input type="date" class="form-control" id="fl_date" name="fl_date"
                               value="{{ old('fl_date', $flight->fl_date) }}">
                    </div>
                    <div class="col-6">
                        <label for="fl_origin_airport" class="form-label">Abreviatura Aeropuerto Origen</label>
                        <input type="text" class="form-control" id="fl_origin_airport" name="fl_origin_airport"
                               value="{{ old('fl_origin_airport', $flight->fl_origin_airport) }}">
                    </div>
                    <div class="col-6">
                        <label for="fl_origin_city" class="form-label">Cuidad origen:</label>
                        <input type="text" class="form-control" id="fl_origin_city" name="fl_origin_city"
                               value="{{ old('fl_origin_city', $flight->fl_origin_city) }}">
                    </div>
                    <div class="col-6">
                        <label for="fl_destination_airport" class="form-label">Cuidad Destino:</label>
                        <input type="text" class="form-control" id="fl_destination_airport"
                               name="fl_destination_airport"
                               value="{{ old('fl_destination_airport', $flight->fl_destination_airport) }}">
                    </div>
                    <div class="col-6">
                        <label for="fl_destination_city" class="form-label">Abreviatura Aeropuerto Destino:</label>
                        <input type="text" class="form-control" id="fl_destination_city" name="fl_destination_city"
                               value="{{ old('fl_destination_airport', $flight->fl_destination_airport) }}">
                    </div>
                    <div class="col-6">
                        <label for="fl_airline" class="form-label">Aerolinea:</label>
                        <input type="text" class="form-control" id="fl_airline" name="fl_airline"
                               value="{{ old('fl_airline', $flight->fl_airline) }}">
                    </div>
                    <div class="col-6">
                        <label for="fl_distance" class="form-label">Distancia:</label>
                        <div class="input-group">
                            <input type="number" id="fl_distance" name="fl_distance" class="form-control"
                                   aria-describedby="addon_cow_height"
                                   value="{{ old('fl_distance', $flight->fl_distance) }}">
                            <span class="input-group-text" id="addon_cow_height">Millas</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="fl_img" class="form-label">URL Imagen</label>
                        <input type="text" class="form-control" id="fl_img" name="fl_img"
                               value="{{ old('fl_img', $flight->fl_img) }}">
                    </div>
                    @if($errors->any())
                        <div class="alert alert-danger col-12 mt-2">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col-12 my-4">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                        <div class="d-grid gap-2 mt-1">
                            <a href="{{ route('flights.index') }}" class="btn btn-info">Regresar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
