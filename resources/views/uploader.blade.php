@extends('layout')
@section('content')

<link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/> 
<h3>
    <a href="{{route('show')}}">
    Data imported so far
    </a>
</h3>
@if(!($file_path??false))  
    <form action="{{route('xlsx.upload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="file-upload">
            <div class="file-upload-select">
                <div class="file-select-button" >Choose Excel file</div>
            <div class="file-select-name">No file chosen...</div> 
            <input type="file" required name="file-upload-input" id="file-upload-input">
            </div>
        </div>
        <button class="upload-btn">UPLOAD</button>
    </form>
    <script>
        let fileInput = document.getElementById("file-upload-input");
        let fileSelect = document.getElementsByClassName("file-upload-select")[0];
        fileSelect.onclick = function() {
            fileInput.click();
        }
        fileInput.onchange = function() {
            let filename = fileInput.files[0].name;
            let selectName = document.getElementsByClassName("file-select-name")[0];
            selectName.innerText = filename;
        }
    </script>
@else
    <h1>XLS file uploaded successfully</h1>
    <span>Do you want to import it to database?</span>
    <form action="{{route('xlsx.importer')}}" method="POST">
        @csrf
        <input type="hidden" name="path" value="{{$file_path}}">
        <button class="upload-btn">YES</button> 
        <a class="upload-btn" href="{{route('xlsx.upload')}}">NO</a>    
    </form>
@endif

<script type="text/javascript">
    var menus=document.getElementsByClassName('nav-item');
    for(let i=0;i<menus.length;i++){
        if(menus[i].id=="importmenu"){
            menus[i].classList.add('active');
        }else{
            menus[i].classList.remove('active');
        }
    }
</script>

@endsection