@extends('admin.template.main')

@section('title', 'Editar Usuario')

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
                    {!! Form::open(['route' => ['users.update', $user], 'role' => 'form', 'method' => 'PUT']) !!}                                   
                        {{ csrf_field() }}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
                            {!! Form::text('name', $user->name, ['class' => 'form-control underlined', 'placeholder' => 'Pepe',
                            'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('last_name', 'Apellidos', ['class' => 'control-label']) !!}
                            {!! Form::text('last_name', $user->last_name, ['class' => 'form-control underlined', 'placeholder' => 'Perez Días',
                            'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                            {!! Form::email('email', $user->email, ['class'=> 'form-control underlined', 'placeholder' => 'example@gmail.com',
                            'required']) !!} 
                        </div>                                           
                        <div class="form-group">
                            {!! Form::label('user', 'Usuario', ['class' => 'control-label']) !!}
                            {!! Form::text('user', $user->user, ['class' => 'form-control underlined', 'placeholder' => 'Pepe',
                            'required']) !!}
                        </div>                        
                        <div class="form-group">
                            {!! Form::label('rol', 'Rol', ['class' => 'control-label']) !!}
                            {!! Form::select('rol', ['secretary' => 'Secretario/a', 'general_secretary' => 'Secretario/a General', 
                            'director' => 'Director/a', 'admin' => 'Administrador'], $user->rol, ['class' => 'form-control underlined']) !!}
                        </div> 
                        <div class="form-group">
                            {!! Form::label('unity', 'Unidad', ['class' => 'control-label']) !!}
                            {!! Form::select('unity', ['1' => '1', '2' => '2', 
                            '3' => '3', '4' => '4'], $user->unity, ['class' => 'form-control underlined']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('active', 'Activar', ['class' => 'control-label']) !!}
                            {!! Form::select('active', ['si' => 'Si', 'no' => 'No' 
                            ], $user->active, ['class' => 'form-control underlined']) !!}
                        </div>                         
                        <div class="form-group row mb-0 mt-1">
                                <div class="col-md-6 offset-md-4">
                                        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
                                    <a href=" {{ route('users.index')}} " class="btn btn-primary mx-5"> Cancelar </a>
                                </div>
                            </div>
                        
                    {!! Form::close() !!}                                 
                </div>
            </div>                           
        </div>
    </section>
@endsection
    
