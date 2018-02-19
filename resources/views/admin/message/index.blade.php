@extends('admin.master')

@section('title') Messages &nbsp; @stop

@section('content')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card strpied-tabled-with-hover">
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Option</th>
                                    </thead>
                                    <tbody>
                                        @foreach($messages as $message)
                                        <tr>
                                            <td>{{ $message->id }} </td>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ substr($message->content, 0, 50) }}</td>
                                            <td>
                                                <form method="POST" action="{{ url('/admin/messages/'.$message->id) }}" class="form-inline">
                                                    {{ csrf_field() }} {{ method_field('delete') }}
                                                    <a href="{{ url('/admin/messages/'.$message->id) }}" class="btn btn-sm btn-fill btn-warning"><i class="fa fa-paper-plane"></i> Reply</a>&nbsp;
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

                    @if($messages instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    <div class="col-md-12 text-center"> 
                        {{ $messages->links() }}
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