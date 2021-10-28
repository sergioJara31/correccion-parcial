@extends('hospitals.master')
@section('content')
    @include('hospitals.partials.validation-error')
    <form action="{{ route('doctor.store') }}" method="post">
        @include('hospitals.doctors._form')
    </form>
@endsection
