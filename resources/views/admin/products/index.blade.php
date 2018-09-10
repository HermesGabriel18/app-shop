@extends('layouts.app')

@section('title', 'Listado de productos')

@section('body-class', 'profile-page')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/profile_city.jpg') }}')">
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Listado de productos</h2>
        <div class="team">
          <a href="{{ route('products.create') }}" class="btn btn-primary btn-round">Nuevo producto</a>
          <div class="row">
            <table class="table table-responsive table-hover">
              <thead>
                  <tr class="d-flex">
                      <th class="col-1 text-center">#</th>
                      <th class="col-2">Nombre</th>
                      <th class="col-4">Descripción</th>
                      <th class="col-2">Categoría</th>
                      <th class="col-1 text-right">Precio</th>
                      <th class="col-2 text-right">Opciones</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                  <tr class="d-flex">
                      <td class="col-1 text-center">{{ $product->id }}</td>
                      <td class="col-2">{{ $product->name }}</td>
                      <td class="col-4">{{ $product->description }}</td>
                      <td class="col-2">{{ $product->category->name }}</td>
                      <td class="col-1 text-right">&euro; {{ $product->price }}</td>
                      <td class="col-2 td-actions text-right">
                          <button type="button" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-sm">
                              <i class="fa fa-info"></i>
                          </button>
                          <button type="button" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-sm">
                              <i class="fa fa-edit"></i>
                          </button>
                          <button type="button" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-sm">
                              <i class="fa fa-times"></i>
                          </button>
                      </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="d-flex justify-content-center">
            {{ $products->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
  </footer>
@endsection