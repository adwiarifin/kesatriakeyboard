@extends('admin.master')

@section('title') Post &nbsp; @stop

@section('toolbar')
                        <li>
                            <a href="{{ url('/admin/posts/create') }}" class="btn btn-sm btn-default btn-fill">
                                <i class="fa fa-plus-square"></i> Create
                            </a>
                        </li>
@endsection

@section('content')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card strpied-tabled-with-hover">
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Category</th>
                                        <th>Option</th>
                                    </thead>
                                    <tbody>
                                        @foreach($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }} </td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->user->name }}</td>
                                            <td>{{ $post->category->name }}</td>
                                            <td>
                                                <form method="POST" action="{{ url('/admin/posts/'.$post->id) }}" class="form-inline">
                                                    {{ csrf_field() }} {{ method_field('delete') }}
                                                    <a href="{{ url('/blog/'.$post->slug) }}" class="btn btn-sm btn-fill btn-info"><i class="fa fa-eye"></i> View</a>&nbsp;
                                                    <a href="{{ url('/admin/posts/'.$post->id) }}" class="btn btn-sm btn-fill btn-warning"><i class="fa fa-edit"></i> Edit</a>&nbsp;
                                                    <button type="submit" name="submit" class="btn btn-sm btn-fill btn-danger" onclick="return confirmDelete()"><i class="fa fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    @if($posts instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="col-md-12 text-center"> 
                        {{ $posts->links() }}
                    </div>
                    @endif
                </div>
@endsection

@section('addon_script')
    <script type="text/javascript">
        function confirmDelete() {
            if ( confirm("Delete this item?") ) {
                return true;
            } else {
                return false;
            }
        }
    </script>
@endsection