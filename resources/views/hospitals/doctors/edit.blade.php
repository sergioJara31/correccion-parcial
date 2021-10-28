@extends('hospitals.master')

@section('content')
    @include('hospitals.partials.validation-error')
    <form action="{{ route('doctor.update', $doctor->id) }}" method="POST">
        @method('PUT')
        @include('hospitals.doctors._form')
    </form>
@endsection
