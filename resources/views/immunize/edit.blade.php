@extends('layouts.app')

@section('template_title')
    Update Immunize
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Immunize</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('immunizes.update', $immunize->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('immunize.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
