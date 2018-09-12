@extends('layouts.app')

@section('title', 'Registro de productos')

@section('body-class', 'profile-page')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/profile_city.jpg') }}')">
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section">
        <h2 class="title text-center">Registrar nuevo producto</h2>
        <form action="{{ route('products.store') }}" method="post">
          @csrf
          <div class="form-row">
            <div class="col form-group">
              <label for="" class="bmd-label-floating">Nombre</label>
              <input type="text" class="form-control" id="" name="name">
            </div>
            <div class="col form-group">
              <label for="" class="bmd-label-floating">Precio</label>
              <input type="number" step="0.01" class="form-control" id="" name="price">
            </div>
          </div>
          
          <div class="form-row">
            <div class="col form-group">
              <label for="" class="bmd-label-floating">Descripción corta</label>
              <input type="text" class="form-control" id="" name="description">
            </div>
          </div>
          
          <div class="form-row">
            <div class="col form-group">
              <label for="" class="bmd-label-floating">Descripción extensa del producto</label>
              <textarea class="form-control" id="" rows="5"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 ml-auto mr-auto text-center">
              <button type="submit" class="btn btn-primary">Registrar nuevo producto</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
  @include('includes.footer')
@endsection