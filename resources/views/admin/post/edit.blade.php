@extends('admin.master')

@section('title') Posts &raquo; Edit @stop

@section('content')
                <form lpformnum="1" method="POST" action="{{ url('/admin/posts/'.$post->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }} {{ method_field('patch') }}
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Post</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title', $post->title) }}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Body</label>
                                                <textarea name="body" id="editor" rows="10" cols="80">{{ old('title', $post->body) }}</textarea>
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
                                    <h4 class="card-title">Category</h4>
                                </div>
                                <div class="card-body">
                                    <select name="category" class="form-control">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Featured Image</h4>
                                </div>
                                <div class="card-body">
                                    <img src="{{ $post->getImageUrl() }}" style="width: 100%;" />
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Option</h4>
                                </div>
                                <div class="card-body">
                                    <!--button type="submit" class="btn btn-default btn-fill btn-block">Back</button-->
                                    <button type="submit" class="btn btn-info btn-fill btn-block">Update</button>
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