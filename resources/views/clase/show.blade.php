@extends('layouts.app')

@section('template_title')
    {{ $clase->name ?? "{{ __('Show') Clase" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Clase</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clases.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $clase->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $clase->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Curso Id:</strong>
                            {{ $clase->curso_id }}
                        </div>
                        <div class="form-group">
                            <strong>Free:</strong>
                            {{ $clase->free }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
