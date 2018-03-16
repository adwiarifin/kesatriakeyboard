@extends('front.master')

@section('content')
      @include('front.about')

      @include('front.portfolio')

      @include('front.blogposts')

      @include('front.contact')
@endsection

@section('addon_script')
<script type="text/javascript">
  $(document).ready(function(){
    $("#contact-form").submit(function(e){
      e.preventDefault();
      $.ajax({
        type:'POST',
        url:'/message',
        data: {
          '_token': $('meta[name=csrf-token]').attr('content'),
          name: $("#name").val(), 
          email: $("#email").val(), 
          content: $("#content").val(), 
          robot: $("#robot").val(),
        }, 
        success:function(data){
          if(data.code === 1) {
            $("#response").addClass("alert alert-info");
            $("#response").html(data.message);
          } else {
            $("#response").addClass("alert alert-danger");
            $("#response").html(data.message);
          }

          setTimeout(function(){
          	$("#name").val('');
          	$("#email").val('');
          	$("#content").val('');
          	$("#robot").prop('checked', false);
          	$("#response").html('');
          	$("#response").removeClass("alert alert-info alert-danger");
          }, 5000);
        },
        error:function(data){
          console.log(data.responseText);
        }
      });
    });
  });
</script>
@endsection