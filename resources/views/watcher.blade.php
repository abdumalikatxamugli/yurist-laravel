@extends('layout')
@section('content')
<style>
    *{
        font-family: sans-serif;
    }
</style>
<h3 style="text-align:center; margin-top:50px">
    Your imports are successfully handled
    
      
</h3>
<div style="text-align:center">
    <a href="{{route('xlsx.upload')}}">Go back and upload some more</a>
</div>

@endsection