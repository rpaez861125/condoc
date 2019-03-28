@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')
<div class="sidebar-overlay" id="sidebar-overlay"></div>
    <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
    <div class="mobile-menu-handle"></div>
    <article class="content responsive-tables-page">
        <div class="title-block">
            <h1 class="title"> Crear Usuarios </h1>                        
        </div>
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-8 align-content-center">
                    <div class="card card-block sameheight-item"> 
                        {!! Form::open(['route' => 'users.store', 'role' => 'form', 'method' => 'POST']) !!}                                   
                          @csrf
                            <div class="form-group">
                                {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
                                {!! Form::text('name', null, ['class' => 'form-control underlined', 'placeholder' => 'Pepe',
                                'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('last_name', 'Apellidos', ['class' => 'control-label']) !!}
                                {!! Form::text('last_name', null, ['class' => 'form-control underlined', 'placeholder' => 'Perez Días',
                                'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                                {!! Form::email('email', null, ['class'=> 'form-control underlined', 'placeholder' => 'example@gmail.com',
                                'required']) !!} 
                            </div>                                           
                            <div class="form-group">
                                {!! Form::label('user', 'Usuario', ['class' => 'control-label']) !!}
                                {!! Form::text('user', null, ['class' => 'form-control underlined', 'placeholder' => 'Pepe',
                                'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
                                {!! Form::password('password', ['class' => 'form-control underlined', 'placeholder' => '*************',
                                'required']) !!}
                            </div>  
                            <div class="form-group">
                                {!! Form::label('rol', 'Rol', ['class' => 'control-label']) !!}
                                {!! Form::select('rol', ['secretary' => 'Secretaría', 'general_secretary' => 'Secretaría General', 
                                'director' => 'Director', 'admin' => 'Administrador'], null, ['class' => 'form-control underlined']) !!}
                            </div> 
                            <div class="form-group">
                                {!! Form::label('unity', 'Unidad', ['class' => 'control-label']) !!}
                                {!! Form::select('unity', ['1' => '1', '2' => '2', 
                                '3' => '3', '4' => '4'], null, ['class' => 'form-control underlined']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('active', 'Activar', ['class' => 'control-label']) !!}
                                {!! Form::select('active', ['si' => 'Si', 'no' => 'No' 
                                ], null, ['class' => 'form-control underlined']) !!}
                            </div> 
                            
                            <div class="form-group">
                                    {!! Form::submit('Insertar', ['class' => 'btn btn-primary']) !!}
                            </div>
                            
                        {!! Form::close() !!}                                 
                    </div>
                </div>                           
            </div>
        </section>
@endsection
    
