@extends('home')
@section('content')
<section class="tablita">
    
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br>
        <div id="titulo">
        <h3>LISTA DE CLIENTES</h3>
        </div>
        
        <br>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create" style="width:80px;">
<i class="fa-solid fa-user-plus"></i>
</button>

        <div
            class="table-responsive">
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr class="">
                        <td scope="row">{{$cliente->Id}}</td>
                        <td>{{$cliente->Nombre}}</td>
                        <td>{{$cliente->Telefono}}</td>
                        <td>{{$cliente->Correo}}</td>
                        <td>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$cliente->Id}}"> 
                        <i class="fa-solid fa-user-pen"></i>
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$cliente->Id}}">
                        <i class="fa-solid fa-trash-can"></i>
                        </button>
                        </td>
                    </tr>
                    @include('cliente.info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('cliente.create')
    </div>
    <div class="col-md-2"></div>
</div>
</section>
@endsection