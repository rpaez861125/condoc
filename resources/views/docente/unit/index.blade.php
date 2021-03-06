@extends('admin.template.main')

@section('title', 'Lista de Unidades')
    
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
                                            <th>Numero</th> 
                                            <th>Acción</th>                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($unity as $unit)                                          
                                        
                                        <tr>
                                            <td>{{ $unit->id }}</td>
                                            <td>{{ $unit->number }}</td>                                            
                                            <td>
                                                <a href="{{ route('units.edit', $unit->id) }}" class="btn btn-link" >
                                                    <span style="color: green" >
                                                      <i class="fa fa-edit icon" aria-hidden="true"></i>
                                                    </span>
                                                  </a>
                                                  <a href="{{ route('units.destroy', $unit->id) }}" class="btn btn-link" onclick="return confirm('Seguro de eliminar?')">
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
                                    {!! $unity->render() !!}
                                    <a href=" {{ route('units.create') }} " class="btn btn-primary m-1">Registrar</a>
                                 </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection