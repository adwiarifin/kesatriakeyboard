@extends('admin.master')

@section('title') Works &raquo; Edit @stop

@section('content')
                @include('admin.errors')

                <form lpformnum="1" method="POST" action="{{ url('/admin/works/'.$work->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }} {{ method_field('patch') }}
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Work</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name', $work->name) }}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Platform</label>
                                                <input type="text" name="platform" class="form-control" placeholder="Platform" value="{{ old('platform', $work->platform) }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Framework</label>
                                                <input type="text" name="framework" class="form-control" placeholder="Framework" value="{{ old('framework', $work->framework) }}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="description" id="editor" rows="10" cols="80">{{ old('description', $work->description) }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!--div class="clearfix"></div-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Image</h4>
                                </div>
                                <div class="card-body">
                                    <img src="{{ Storage::url($work->image) }}" style="width: 100%;" />
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Option</h4>
                                </div>
                                <div class="card-body">
                                    <!--button type="submit" class="btn btn-default btn-fill btn-block">Back</button-->
                                    <button type="submit" class="btn btn-info btn-fill btn-block">Save Work</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
@endsection

@section('addon_script')
    <script src="{{ url('ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            CKEDITOR.replace( 'editor' );
        });
    </script>
@endsection