@extends('front.master')

@section('content')
			@include('front.about')

            @include('front.portfolio')

            @include('front.blogposts')

            @include('front.contact')
@endsection

@section('addon_script')
<!--  Google Map functions -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKrdkZVJbquNPCfa3MYM8LeLn18NrxSsc"></script>
<script type="text/javascript">
    $().ready(function() {
        examples.initContactUsMap();
    });
</script>
@endsection