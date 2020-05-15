<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SimpleAdminLTE 2 | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('backend/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/fonts-icons/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/fonts-icons/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/square/blue.css') }}">
</head>

	@yield('content')

<script src="{{asset('backend/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>