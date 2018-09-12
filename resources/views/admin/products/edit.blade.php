@extends('layouts.app')

@section('title', 'Edición de productos')

@section('body-class', 'profile-page')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/profile_city.jpg') }}')">
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section">
        <h2 class="title text-center">Editar producto</h2>
        <form action="{{ route('products.update', $product->id) }}" method="post">
          @csrf
          @method('put')
          <div class="form-row">
            <div class="col form-group">
              <label for="" class="bmd-label-floating">Nombre</label>
              <input type="text" class="form-control" id="" name="name" value="{{ $product->name }}">
            </div>
            <div class="col form-group">
              <label for="" class="bmd-label-floating">Precio</label>
              <input type="number" step="0.01" class="form-control" id="" name="price" value="{{ $product->price }}">
            </div>
          </div>
          
          <div class="form-row">
            <div class="col form-group">
              <label for="" class="bmd-label-floating">Descripción corta</label>
              <input type="text" class="form-control" id="" name="description" value="{{ $product->description }}">
            </div>
          </div>
          
          <div class="form-row">
            <div class="col form-group">
              <label for="" class="bmd-label-floating">Descripción extensa del producto</label>
              <textarea class="form-control" id="" rows="5" name="long_description">{{ $product->long_description }}</textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <button type="submit" class="btn btn-primary">Guardar cambios</button>
              <a href="{{ route('products.index') }}" class="btn btn-default">Cancelar</a>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
  @include('includes.footer')
@endsection