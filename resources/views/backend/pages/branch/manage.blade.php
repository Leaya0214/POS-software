@extends('backend.templates.master')
    @section('content')
<table class="table table-striped">
    <tr>
        <th>Br_name</th>
        <th>Br_manager</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Status</th>
        <th colspan="2">Action</th>
    </tr>
   
        @foreach ($show as $show)
        <tr >
            <td>{{$show->br_name}}</td>
            <td>{{$show->br_manager}}</td>
            <td>{{$show->phone}}</td>
            <td>{{$show->email}}</td>
            <td>{{$show->status}}</td>
            <td><button class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button></td>
            <td><a href="{{ route('delete',[$show->id]) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
        </tr>
        @endforeach
    
</table>
@endsection 