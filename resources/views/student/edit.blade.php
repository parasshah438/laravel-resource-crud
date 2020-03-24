@extends('layouts.master')
@section('content')
@section('title','Edit Student')
<div class="bs-example">
<form method="POST" autocomplete="off" action="{{ route('student.update',$data->id)}}" >
   <!--  <input type="hidden" name="_method" value="PUT"> -->
    @method('PUT')
    @csrf
  <div class="form-group col-md-6">
    <div class="form-group">
        <label for="exampleInputPassword1">Roll No</label>
        <input type="text" class="form-control" id="roll_no" placeholder="Roll NO" name="roll_no" value="{{$data->roll_no}}">
        <div class="text-danger">{{$errors->first('roll_no')}}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{$data->name}}">
        <div class="text-danger">{{$errors->first('name')}}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{$data->email}}">
        <div class="text-danger">{{$errors->first('email')}}</div>
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>  
</form>  
</div>                    
@endsection