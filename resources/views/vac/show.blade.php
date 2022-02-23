@extends('layouts.app')

@section('template_title')
    {{ $vac->name ?? 'Show Vac' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Vac</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vacs.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>A:</strong>
                            {{ $vac->a }}
                        </div>
                        <div class="form-group">
                            <strong>B:</strong>
                            {{ $vac->b }}
                        </div>
                        <div class="form-group">
                            <strong>C:</strong>
                            {{ $vac->c }}
                        </div>
                        <div class="form-group">
                            <strong>D:</strong>
                            {{ $vac->d }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
