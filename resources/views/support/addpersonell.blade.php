@extends('support.partials.main')

@section('head')

@endsection

@section('body')
<fieldset>
  <legend>Add Personell</legend>
  <form action="{{ route('support.addpersonellpost') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" id="title" placeholder="tittle e.g CGH">
    <input type="text" name="FirstName" id="FirstName" placeholder="first name">
    <input type="text" name="LastName" id="LastName" placeholder="last name">
    <input type="text" name="rank" id="rank" placeholder="rank">
   
    <input type="text" name="division" id="division" placeholder="minstry / division">
    <input type="file" name="image" id="photo" accept="image/*">
    <input type="submit" value="ADD">
  </form>
</fieldset>
@endsection