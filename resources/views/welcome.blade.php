@extends('./partials/layout')
{{-- või ('partials.layout'), laraveli eelistatud --}}
@section('title', 'Home')

@section('content')
    <h1>Home</h1>
    <h1>Hello, {{ $name }}</h1>
@endsection
