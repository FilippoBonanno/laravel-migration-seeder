@extends('layouts.app')

@section('content')
    <h1>Studenti:</h1>
    @foreach ($treni as $singoloTreno)
        <p>{{ $singoloTreno->azienda }} {{ $singoloTreno->orario_di_partenza }}</p>
    @endforeach
@endsection
