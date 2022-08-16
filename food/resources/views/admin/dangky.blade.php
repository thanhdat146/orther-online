<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<base href="{{asset('cssadmin')}}/">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Đăng Ký</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Đăng Ký</div>
				<div class="panel-body">
					<form role="form" method="POST">
						{{csrf_field()}}

						<fieldset>
							@include('admin.error')
							<div class="form-group">
							Tên:	<input  required class="form-control" placeholder="Name" name="name" type="text" autofocus="">
							</div>
							<div class="form-group">
							Email: 	<input required class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" >
							</div>
							<div class="form-group">
							Mật Khẩu	<input required class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<!--  -->
							
								<input type="submit" name="register" value="Đăng Ký" class="btn btn-primary">
								<a href="{{route('login')}}" class="btn btn-danger">Hủy</a>
							

						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
	<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>	
</body>

</html>
