@extends('layouts.main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Crear producto
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('products.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <input type="text" class="form-control" name="description">
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <input type="number" class="form-control" name="price">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{route('products.index')}}" class="btn btn-danger">Cancelar</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection