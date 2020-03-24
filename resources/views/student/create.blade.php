@extends('layouts.master')
@section('content')
@section('title','Add Student')
<div class="bs-example">
<form method="post" autocomplete="off" action="{{route('student.store')}}">
    @csrf
  <div class="form-group col-md-6">
    <div class="form-group">
        <label for="exampleInputPassword1">Roll No</label>
        <input type="text" class="form-control" id="roll_no" placeholder="Roll NO" name="roll_no" value="{{old('roll_no')}}">
        <div class="text-danger">{{$errors->first('roll_no')}}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{old('name')}}">
        <div class="text-danger">{{$errors->first('name')}}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{old('email')}}">
        <div class="text-danger">{{$errors->first('email')}}</div>
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="submit" class="btn btn-link"><a href="{{route('student.index')}}">Back</a></button>
    </div>
  </div>  
</form> 
</div>                    
@endsection