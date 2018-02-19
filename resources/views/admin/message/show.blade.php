@extends('admin.master')

@section('title') Messages &raquo; Reply @stop

@section('content')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Reply Message</h4>
                            </div>
                            <div class="card-body">
                                <form lpformnum="1" method="POST" action="{{url('/admin/messages/'.$message->id)}}">
                                    {{ csrf_field() }}

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" value="{{ $message->name }}" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" value="{{ $message->email }}" disabled />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea class="form-control" rows="7" disabled>{{ $message->content }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Reply Message</label>
                                                <textarea id="editor" name="reply"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Send Message</button>
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