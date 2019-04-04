@extends('admin.template.main')

@section('title', 'Editar Grupo')

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
                    {!! Form::open(['route' => ['groups.update', $groups], 'role' => 'form', 'method' => 'PUT']) !!}                                   
                        {{ csrf_field() }}
                        <div class="form-group">
                            {!! Form::label('number', 'Numero', ['class' => 'control-label']) !!}
                            {!! Form::text('number', $groups->number, ['class' => 'form-control underlined', 'placeholder' => '5,8,15',
                            'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('grade_id', 'Unidad', ['class' => 'control-label']) !!}
                            {!! Form::select('grade_id', $grades, $groups->grade->id, ['class' => 'form-control underlined', 'disabled']) !!}
                        </div> 
                        
                        <div class="form-group row mb-0 mt-1">
                                <div class="col-md-6 offset-md-4">
                                        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
                                    <a href=" {{ route('groups.index')}} " class="btn btn-primary mx-5"> Cancelar </a>
                                </div>
                            </div>
                        
                    {!! Form::close() !!}                                 
                </div>
            </div>                           
        </div>
    </section>
@endsection
    
