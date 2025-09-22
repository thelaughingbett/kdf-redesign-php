@extends('support.partials.main')

@section('head')

@endsection
@section('body')
@foreach ($personells as $personell )
<h1> {{ $personell['FirstName'] }}</h1>
<h1> {{ $personell['LastName'] }}</h1>
 <img src="{{ asset( 'storage/' . $personell->image )}}" alt=""  height="200" width="200"/>
 <a href="{{ route('support.showpersonell', $personell) }}">edit</a>
 
@endforeach

<br>
 <br>
 <a href="{{ route('support.addpersonellget') }}"> add personell</a>
@endsection