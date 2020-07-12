@extends('layouts.app')
@section('title','Forum')
@section('content')
<div class="container">
  <div class="jumbotron" id="tc_jumbotron">
    <div class="card-body" id="xx" style="color: #fff;     border:1px solid #fff;">
        <div class="text-center"> 
           <h1 style="    font-size: 3.5rem;">{{$shows->judulPertanyaan}}</h1> 

          </div>
        </div> 
      </div> 
    </div>

        <div class="container"> 
            <div class="row">
             <div class="col-md-12" id="tc_container_wrap">
            <div class="card" id="tc_paneldefault"> 
                <div class="card-body" id="tc_panelbody"  style="background: #f9f9f9;">  
               <div class="row">
               <div class="col-md-8" style="    padding-right: 0;"><br>
               <p><h1>{{$shows->judulPertanyaan}}</h1></p>
               <p>{{$shows->judulPertanyaan}}</p>
          </div>
        </div>
    </div>
</div>
</div>
@endsection