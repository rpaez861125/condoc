@extends('admin.template.main')

@section('title', 'Crear Consejo Popular')

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
                    {!! Form::open(['route' => 'cons_pop.store', 'role' => 'form', 'method' => 'POST']) !!}                                   
                        {{ csrf_field() }}
                        <div class="form-group">
                            {!! Form::label('name', 'Numero', ['class' => 'control-label']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control underlined', 'placeholder' => '10 de Octubre',
                            'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('municipality_id', 'Municipios', ['class' => 'control-label']) !!}
                            {!! Form::select('municipality_id', $munici, null, ['class' => 'form-control underlined']) !!}
                        </div> 
                        
                        <div class="form-group row mb-0 mt-1">
                                <div class="col-md-6 offset-md-4">
                                        {!! Form::submit('Insertar', ['class' => 'btn btn-primary']) !!}
                                    <a href=" {{ route('cons_pop.index')}} " class="btn btn-primary mx-5"> Cancelar </a>
                                </div>
                            </div>
                        
                    {!! Form::close() !!}                                 
                </div>
            </div>                           
        </div>
    </section>
@endsection
    
