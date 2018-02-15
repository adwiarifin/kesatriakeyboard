@extends('admin.master')

@section('title') Sections &raquo; Edit @stop

@section('content')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Section</h4>
                            </div>
                            <div class="card-body">
                                <form lpformnum="1" method="POST" action="{{url('/admin/sections/'.$section->id)}}">
                                    {{ csrf_field() }}
                                    {{ method_field('patch') }}

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Key</label>
                                                <input type="text" name="key" class="form-control" value="{{ $section->key }}" disabled />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Value</label>
                                                <textarea name="value" id="editor" rows="10" cols="80">{{ old('value', $section->value) }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Save Section</button>
                                    <a class="btn btn-secondary btn-fill" href="{{ url()->previous() }}">Back</a>
                                    
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

@section('addon_script')
    <script src="{{ url('ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            CKEDITOR.replace( 'editor' );
        });
    </script>
@endsection