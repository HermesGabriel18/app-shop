@extends('layouts.app')

@section('title', 'Imágenes de productos')

@section('body-class', 'profile-page')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/profile_city.jpg') }}')">
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Imágenes del producto seleccionado <u>({{ $product->id }})</u></h2>
        <a href="{{ route('productsImages.create', $product->id) }}" class="btn btn-primary btn-round">Subir nueva imagen</a>
        <a href="{{ route('products.index') }}" class="btn btn-default btn-round">Volver al listado de productos</a>
        <div class="row">
          @foreach($images as $image)
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <img src="{{ $image->image }}" alt="Texto alternativo">
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  @include('includes.footer')
@endsection