@extends('layouts.app')

@section('content')
    <h1>Studenti:</h1>
    @foreach ($treni as $singoloTreno)
        <p>{{ $singoloTreno->Azienda }} {{ $singoloTreno->Cancellato }}</p>
    @endforeach
@endsection
