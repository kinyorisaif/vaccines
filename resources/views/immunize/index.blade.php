@extends('layouts.app')

@section('template_title')
    Immunize
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Immunize') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('immunizes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Type</th>
										<th>Age</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($immunizes as $immunize)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $immunize->name }}</td>
											<td>{{ $immunize->type }}</td>
											<td>{{ $immunize->age }}</td>

                                            <td>
                                                <form action="{{ route('immunizes.destroy',$immunize->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('immunizes.show',$immunize->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('immunizes.edit',$immunize->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $immunizes->links() !!}
            </div>
        </div>
    </div>
@endsection
