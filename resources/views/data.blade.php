@extends('layout')
@section('content')
@livewireStyles

<livewire:clientable/>

@livewireScripts
<script type="text/javascript">
	var menus=document.getElementsByClassName('nav-item');
	for(let i=0;i<menus.length;i++){
		if(menus[i].id=="showmenu"){
			menus[i].classList.add('active');
		}else{
			menus[i].classList.remove('active');
		}
	}
</script>

@endsection