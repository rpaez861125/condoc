@extends('admin.template.main')

@section('title', 'Lista de Consejos Populares')
    
@section('content')
<div class="sidebar-overlay" id="sidebar-overlay"></div>
<div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
<div class="mobile-menu-handle"></div>
<article class="content responsive-tables-page">
    <div class="title-block">
        <h1 class="title">             
                @yield('title', 'Default')                              
        </h1>        
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">                       
                        <section class="example">
                            <div class="table-responsive">
                                    @include('flash::message')
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nombre</th> 
                                            <th>Municipio</th>
                                            <th>Acción</th>                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($popula as $popul)                                          
                                        
                                        <tr>
                                            <td>{{ $popul->id }}</td>
                                            <td>{{ $popul->name }}</td>
                                            <td>{{ $popul->municipality->name }}</td>                                            
                                            <td>
                                                <a href="{{ route('cons_pop.edit', $popul->id) }}" class="btn btn-link" >
                                                    <span style="color: green" >
                                                      <i class="fa fa-edit icon" aria-hidden="true"></i>
                                                    </span>
                                                  </a>
                                                  <a href="{{ route('cons_pop.destroy', $popul->id) }}" class="btn btn-link" onclick="return confirm('Seguro de eliminar?')">
                                                    <span style="color: red" >
                                                      <i class="fa fa-trash-o icon"></i>
                                                    </span>
                                                  </a> 
                                            </td>
                                        </tr> 
                                        @endforeach                                       
                                    </tbody>
                                </table>
                                <div class="d-flex d-inline-block justify-content-around">
                                    {!! $popula->render() !!}
                                    <a href=" {{ route('cons_pop.create') }} " class="btn btn-primary m-1">Registrar</a>
                                 </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection