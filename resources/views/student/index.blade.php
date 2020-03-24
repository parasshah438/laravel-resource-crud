@extends('layouts.master')
@section('content')
@section('title','Student')
<a href="{{ route('student.create') }}" class="btn btn-primary">Add Student</a>
<div class="bs-example">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Roll Number</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody> 
            @if(count($data))
            @foreach($data as $students)
            <tr>
                <td>{{$students->roll_no}}</td>
                <td>{{$students->name}}</td>
                <td>{{$students->email}}</td>
                <td><a href="{{route('student.show', $students->id)}}" class="btn btn-info">Show</a>
                    <a href="{{route('student.edit', $students->id)}}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('student.destroy', $students->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <!-- <input type="hidden" name="_method" value="DELETE"> -->
                    <a onclick="return confirm('Are you sure?')"  href="{{route('student.destroy', $students->id)}}">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </a>
                    </form>
                </td>
            </tr>
            @endforeach 
            @else
            <tr>
                <td colspan="5">No Student Found</td>
            </tr>

            @endif          
        </tbody>
    </table>
    {{$data->links()}}
</div>                           
@endsection