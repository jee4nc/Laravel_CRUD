@extends('template')
@section('common_blade')
    <h1>Oficio details</h1>
    </form>
    <h3>ID: {{ $oficio->id }}</h3>
    <h3>Name: {{ $oficio->name }}</h3>
    <h3>Description: {{ $oficio->description }}</h3>
@endsection