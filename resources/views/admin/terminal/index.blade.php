@extends('admin.master')

@section('title') Terminal @stop

@section('content')
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header ">
                                <h4 class="card-title">Commands</h4>
                                <p class="card-category">Please select appropriate command</p>
                            </div>
                            <div class="card-body">
                                <a href="{{ url('/admin/terminal/deploy') }}"><button class="btn btn-info btn-fill"><i class="nc-icon nc-spaceship"></i> deploy</button></a>
                                <a href="{{ url('/admin/terminal/save') }}"><button class="btn btn-info btn-fill"><i class="nc-icon nc-book-bookmark"></i> save</button></a>
                                <a href="{{ url('/admin/terminal/update') }}"><button class="btn btn-info btn-fill"><i class="nc-icon nc-refresh-69"></i> update</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                @if(isset($output))
                <div class="row">
                    <div class="col-md-12">
                        <div class="card text-white bg-dark">
                            <div class="card-header" style="background: #343a40">
                                <h4 class="card-title" style="color: #ffffff">Output</h4>
                            </div>
                            <div class="card-body ">
                                {!! $output !!}
                            </div>
                        </div>
                    </div>
                </div>
                @endif
@endsection