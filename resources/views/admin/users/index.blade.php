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
  
                    
        </td>
    </table>
<div align="center"> {!!$users->render()!!}</div>
<hr>
<a href="{{route('admin.users.create')}}" class="btn btn-info">Registrar nuevo usuario</a>
<a href="" onclick="window.print(); return false;" class="btn btn-info">Imprimir</a>  
<!--boton de alertas o mensajes-->
<a href="#ventana1" class="btn btn- btn-info" data-toggle="modal">boton Alerta</a>
    <div  class="modal fade" id="ventana1"> 
        <div class="modal-dialog">
            <div class="modal-content"> 
                <!--header de la ventana-->
                <div class="modal-header">
                    <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     
                    <h4 class="modal-title">Encabezado de nuestra ventana</h4>
                </div>
                <!-- Contenido de la ventana -->
                <div class="modal-body">
                     <table> 
                        <tr>
                            <td>
                                <img src="{{asset('imagenes/warning.png')}}" alt="warning" class="img-thumbnail"/>                                
                            </td>
                            <td>
                                 <p ><font color="white">...</font></p>
                            </td>
                            <td>
                                 <p>contenido de la ventana</p>
                            </td>
                        </tr>
                                            
                    </table>  
                   
                </div>
                <!--footer de la ventana-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
         
        </div>
    </div>
<!--boton de ayuda-->
<a href="#ventana2" class="btn btn- btn-info" data-toggle="modal">Ayuda</a>
    <div  class="modal fade" id="ventana2"> 
        <div class="modal-dialog">
            <div class="modal-content"> 
                <!--header de la ventana-->
                <div class="modal-header">
                    <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                     
                    <h4 class="modal-title">Encabezado de nuestra ventana</h4>
                </div>
                <!-- Contenido de la ventana -->
                <div class="modal-body">             
                    <p>contenido de la ventana</p>
                <!--footer de la ventana-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
         
            </div>
        </div>
    </div>

@endsection
