@extends('layouts.app')

@section('template_title')
    {{ $immunize->name ?? 'Show Immunize' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Immunize</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('immunizes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $immunize->name }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $immunize->type }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $immunize->age }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
