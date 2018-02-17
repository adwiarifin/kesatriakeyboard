					@if(count($errors) > 0)
	                    <div class="alert alert-danger">
	                    	<span><b> Errors have occured: </b></span>
	                        <ul>
								@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
	                    </div>
	                @endif