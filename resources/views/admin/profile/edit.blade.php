@extends('admin.master')

@section('title') Profile &raquo; Edit @stop

@section('content')
                <form lpformnum="1" method="POST" action="{{ url('/admin/profile') }}" enctype="multipart/form-data">
                    {{ csrf_field() }} {{ method_field('patch') }}
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" value="{{ $user->email }}" disabled />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name', $user->name) }}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="text" name="site" class="form-control" placeholder="Website" value="{{ old('site', !is_null($user->profile) ? $user->profile->site : '') }}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                @if(!is_null($user->profile) && !is_null($user->profile->image))
                                                    <img src="{{ Storage::url($user->profile->image) }}" style="width: 100%;" />
                                                @else
                                                    <img src="{{ url('/img/placeholder.jpg') }}" style="width: 100%;" />
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Bio</label>
                                                <textarea name="bio" id="editor" rows="10" cols="80">{{ old('bio', !is_null($user->profile) ? $user->profile->bio : '') }}</textarea>
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
                                    <h4 class="card-title">Socials</h4>
                                </div>
                                <div class="card-body">
                                    @foreach($socials as $social)
                                    <label>{{ $social->provider }}</label>
                                    <input type="text" name="socials[{{ $social->id }}]" class="form-control" placeholder="{{ $social->provider }}" value="{{ old('socials['.$social->id.']', $user->socials->contains($social) ? $user->socials->find($social->id)->pivot->link : '') }}" />
                                    @endforeach
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
