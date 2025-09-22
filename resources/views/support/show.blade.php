@extends('support.partials.main')
@section('head')

@endsection
@section('body')

<h1> {{ $personell->rank }}</h1>
<h1> {{ $personell['LastName'] }}</h1>
<!-- <img src="{{asset( 'storage/' . $personell->image )}}" alt="" /> -->

<fieldset>
  <legend>Add Personell</legend>
  <form action="{{route('support.editpersonell', $personell)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="title" id="title" placeholder="tittle e.g CGH" value="{{ $personell->title }}">
    <input type="text" name="FirstName" id="FirstName" placeholder="first name" value="{{ $personell->FirstName }}">
    <input type="text" name="LastName" id="LastName" placeholder="last name" value="{{ $personell->LastName }}">
    <input type="text" name="rank" id="rank" placeholder="rank" value="{{ $personell->rank }}">
   
    <input type="text" name="division" id="division" placeholder="minstry / division" value="{{ $personell->division }}">
    <input type="file" name="image" id="photo" accept="image/*" >
    <figure>
      <img src="{{asset( 'storage/' . $personell->image )}}"  height="200" width="200"alt="">
    <figcaption><h1>current photo</h1></figcaption>
  </figure>
    <input type="submit" value="Update">
  </form>
</fieldset>

@endsection