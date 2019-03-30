@extends('admin.template.main')

@section('title', 'Perfil de Usuario')

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
                            'disabled']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('last_name', 'Apellidos', ['class' => 'control-label']) !!}
                            {!! Form::text('last_name', $user->last_name, ['class' => 'form-control underlined', 'placeholder' => 'Perez Días',
                            'disabled']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                            {!! Form::email('email', $user->email, ['class'=> 'form-control underlined', 'placeholder' => 'example@gmail.com',
                            'disabled']) !!} 
                        </div>                                           
                        <div class="form-group">
                            {!! Form::label('user', 'Usuario', ['class' => 'control-label']) !!}
                            {!! Form::text('user', $user->user, ['class' => 'form-control underlined', 'placeholder' => 'Pepe',
                            'disabled']) !!}
                        </div>                        
                        <div class="form-group">
                            {!! Form::label('rol', 'Rol', ['class' => 'control-label']) !!}
                            {!! Form::text('rol', $user->rol, ['class' => 'form-control underlined', 'placeholder' => 'Pepe',
                            'disabled']) !!}
                        </div> 
                        <div class="form-group">
                            {!! Form::label('unity', 'Unidad', ['class' => 'control-label']) !!}
                            {!! Form::text('unity', $user->unity, ['class' => 'form-control underlined', 'placeholder' => 'Pepe',
                            'disabled']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('active', 'Activar', ['class' => 'control-label']) !!}
                            {!! Form::text('active', $user->active, ['class' => 'form-control underlined', 'placeholder' => 'Pepe',
                            'disabled']) !!}
                        </div>                         
                        <div class="form-group row mb-0 mt-1">
                            @if (Auth::user()->admin()) 
                                <div class="col-md-4">
                                    <a href=" {{ route('users.edit', $user->id) }} " class="btn btn-primary mx-5"> Editar </a>                                   
                                </div>
                            @endif
                                <div class="col-md-4">                                       
                                        <a href=" {{ route('users.index')}} " class="btn btn-primary mx-5"> Cancelar </a>
                                </div>
                            </div>
                        
                    {!! Form::close() !!}                                 
                </div>
            </div>                           
        </div>
    </section>
@endsection
    
