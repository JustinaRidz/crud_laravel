@extends('layouts.master')

@section('content')
    <h1>Welcom to this app!!</h1>




    {{-- @if ($people)
        @foreach($people as $person)
            {{ $person->age }}
            {{ $person->name }}
            <br>
        @endforeach
    @endif --}}


    {{-- {{ $person->name . " " . $person->age }} --}}


    {{-- <h1>{{ $var }}</h1> --}} 
     {{-- <h1>Hello World!</h1>
     <h1>{{ 2 == 2 ? "Equals" : "Does not equal" }}</h1> --}}
     {{-- <h1>Hi, {{ $var }} !</h1> --}}

    {{-- @if ($var === 1)
        First section!
    @elseif ($var === 2)
        Second section!
    @endif

    @foreach($letters as $letter)
        <br>
        {{ $letter }}
    @endforeach --}}
    
    
@endsection

