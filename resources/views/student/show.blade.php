@extends('layouts.master')
@section('content')
@section('title','Student')
<div class="bs-example col-md-4">
    <h2>Information of student</h2>
    <a href="{{ route('student.index') }}" class="btn btn-primary">Back</a>
    <table class="table table-bordered">
            <tr>
                <th>Roll Number</th>
                <td>{{$data->roll_no}}</td>
            </tr>
             <tr>
                <th>Name</th>
                <td>{{$data->name}}</td>
            </tr>
             <tr>
                <th>Email</th>
                <td>{{$data->email}}</td>
            </tr>
            <tr>
    </table>
</div>                            
@endsection