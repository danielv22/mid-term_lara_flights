<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fl_date' => ['required', 'date'],
            'fl_origin_airport' => ['required', 'string', 'max:5'],
            'fl_origin_city' => ['required', 'string', 'max:200'],
            'fl_destination_airport' => ['required', 'string', 'min:3', 'max:5'],
            'fl_destination_city' => ['required', 'string', 'max:200'],
            'fl_airline' => ['required', 'string', 'max:100'],
            'fl_distance' => ['required', 'numeric', 'min:1', 'max:10000'],
            'fl_img' => ['required', 'string', 'max:2048']
        ];
    }

    public function messages()
    {
        return [
            'fl_date.required' => 'Debe colocarle una fecha al vuelo',
            'fl_date.date' => 'Formato de fecha inválido',
            'fl_origin_airport.required' => 'Debe colocarle un aeropuerto de origen al vuelo',
            'fl_origin_airport.min' => 'La abreviatura del aeropuerto origen no puede tener menos de 3 caracteres',
            'fl_origin_airport.max' => 'La abreviatura del aeropuerto origen no puede tener más de 5 caracteres',
            'fl_origin_city.required' => 'Debe colocarle una ciudad de origen al vuelo',
            'fl_origin_city.max' => 'La ciudad de origen no puede tener más de 200 caracteres',
            'fl_destination_airport.required' => 'Debe colocarle un aeropuerto de destino al vuelo',
            'fl_destination_airport.min' => 'La abreviatura del aeropuerto destino no puede tener menos de 3 caracteres',
            'fl_destination_airport.max' => 'La abreviatura del aeropuerto destino no puede tener más de 5 caracteres',
            'fl_destination_city.required' => 'Debe colocarle una ciudad de destino al vuelo',
            'fl_destination_city.max' => 'La ciudad de destino no puede tener más de 200 caracteres',
            'fl_airline.required' => 'Debe colocarle una aerolínea al vuelo',
            'fl_airline.max' => 'La aerolínea no puede tener más de 100 caracteres',
            'fl_distance.required' => 'Debe colocarle una distancia al vuelo',
            'fl_distance.numeric' => 'La distancia debe ser un número',
            'fl_distance.min' => 'La distancia debe ser mayor a 1',
            'fl_distance.max' => 'La distancia debe ser menor a 10000',
            'fl_img.required' => 'Debe colocarle una imagen al vuelo, referente al destino.'
        ];
    }
}
