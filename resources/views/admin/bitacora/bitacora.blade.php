@extends('admin.template.main')
@section('title','Bitacora')

@section('content')
    
    <table class="table table-striped">
        <thead>
            <th> ID </th>
            <th> Usuario</th>
            <th> Transaccion </th>
            <th> Fecha y hora de transaccion </th>
      
        </thead>
        <tbody> 
            @foreach($bitacora as $bitacora)
            <tr> 
                <td>{{$bitacora->id_bitacora}}</td>
                <td>{{$bitacora->usuario}}</td>
                <td>{{$bitacora->transaccion_realizada}}</td>
                <td>{{$bitacora->fecha_hora_transaccion}}</td>
              
            </tr>
            @endforeach
        </tbody>
    </table>

<hr>
@endsection
