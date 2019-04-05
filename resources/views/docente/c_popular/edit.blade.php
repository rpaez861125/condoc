@extends('admin.template.main')

@section('title', 'Editar Consejo Popular')

@section('content')
    <div class="sidebar-overlay" id="sidebar-overlay"></div>
    <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
    <div class="mobile-menu-handle"></div>
    <article class="content responsive-tables-page">
         <div class="title-block">
            <h1 class="title"> @yield('title', 'Default') </h1>                        
        </div>
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-8 align-content-center">
                <div class="card card-block sameheight-item"> 
                    {!! Form::open(['route' => ['cons_pop.update', $popul], 'role' => 'form', 'method' => 'PUT']) !!}                                   
                        {{ csrf_field() }}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
                            {!! Form::text('name', $popul->name, ['class' => 'form-control underlined',
                            'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('municipality_id', 'Municipio', ['class' => 'control-label']) !!}
                            {!! Form::select('municipality_id', $munic, $popul->municipality->id, ['class' => 'form-control underlined']) !!}
                        </div> 
                        
                        <div class="form-group row mb-0 mt-1">
                                <div class="col-md-6 offset-md-4">
                                        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
                                    <a href=" {{ route('cons_pop.index')}} " class="btn btn-primary mx-5"> Cancelar </a>
                                </div>
                            </div>
                        
                    {!! Form::close() !!}                                 
                </div>
            </div>                           
        </div>
    </section>
@endsection
    
