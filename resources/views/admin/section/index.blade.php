@extends('admin.master')

@section('title') Section @stop

@section('content')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card strpied-tabled-with-hover">
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Key</th>
                                        <th>Value</th>
                                        <th>Option</th>
                                    </thead>
                                    <tbody>
                                        @foreach($sections as $section)
                                        <tr>
                                            <td>{{ $section->id }}</td>
                                            <td>{{ $section->key }}</td>
                                            <td>{{ substr(strip_tags($section->value), 0, 100) }}</td>
                                            <td>
                                                <form method="POST" action="{{ url('/admin/sections/'.$section->id) }}" class="form-inline">
                                                    {{ csrf_field() }}
                                                    <a href="{{ url('/admin/sections/'.$section->id.'/edit') }}" class="btn btn-sm btn-fill btn-warning"><i class="fa fa-edit"></i> Edit</a>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    @if($sections instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="col-md-12 text-center"> 
                        {{ $sections->links() }}
                    </div>
                    @endif
                </div>
@endsection