@extends('admin.template.main')
@section('title','Lista Usuario')

@section('content')
    
    <table class="table table-striped">
        <thead>
            <th> ID </th>
            <th> Nombre</th>
            <th> Correo Electr&oacute;nico</th>
            <th> Tipo </th>
            <th> Accion </th>
        </thead>
        <tbody> 
            @foreach($users as $user)
            <tr> 
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @if($user->type=="admin")
                        <span class="label label-success">{{$user->type}}</span>
                    @else
                        <span class="label label-primary">{{$user->type}}</span>
                    @endif
                </td>
                    
                    
                <td><a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> </a> 
                    <a href="{{route('admin.users.destroy',$user->id)}}" onclick="return confirm('¿Seguro deseas eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div align="center"> {!!$users->render()!!}</div>
<hr>
<a href="{{route('admin.users.create')}}" class="btn btn-info">Registrar nuevo usuario</a>
<a href="" onclick="window.print(); return false;" class="btn btn-info">Imprimir</a>  <hr>
@endsection
