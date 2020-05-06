@if (count($errors) > 0)
    <div class="alert alert-danger message" style="width:50%;margin:auto;padding=0;border-radius:15px">
        <ul style="padding:0;margin:0" >
            @foreach ($errors->all() as $error)
                <li style="text-align: center;list-style: none;width:auto;margin-bottom:5px " >{{ $error }}</li>
            @endforeach
        </ul>
       
    </div>
@endif


@if (Session::has('error'))


        <li class="alert alert-danger message" role="alert" style="text-align: center;list-style: none;width:auto;margin-bottom:5px" >{{Session::get('error')}}</li>


@endif
@if (Session::has('info'))


        <li class="alert alert-info message" role="alert" style="text-align: center;list-style: none;width:auto;margin-bottom:5px" >{{Session::get('info')}}</li>


@endif




@if (Session::has('message'))
        <li class="alert alert-success message " role="alert" id="message" style="text-align: center;list-style: none;width:auto;margin-bottom:5px" >{{Session::get('message')}}</li>
@endif

<script type="text/javascript">
	setTimeout(function() {
  $('.message').hide()
}, 4000);

</script>
