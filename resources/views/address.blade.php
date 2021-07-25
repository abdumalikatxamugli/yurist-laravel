@extends('layout')

@section('content')

<h3>FULL NAME: {{$contract->FIRSTNAME}}
	{{$contract->LASTNAME}}
	{{$contract->PATRONYMIC}}
</h3>
<h3>
	CONTRACT NO: {{$contract->CARD}}
</h3>
<form action="{{route('pdf', $contract->IDPERSON)}}" method="POST" target="blank">
	@csrf
	<label>Please type the address</label>
	<input type="test" name="address" class="form-control" value="{{$contract->ADDRESS}}">
	<button class="btn btn-primary mt-3">GENERATE</button>
</form>

@endsection