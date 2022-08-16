@extends('admin.masterAdmin')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục Món Ăn</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa danh mục
						</div>
						<div class="panel-body">
							@include('admin.error')
							<form method="post">
								<div class="form-group">
									<label>Tên danh mục:</label>
	    							<input type="text" name="name" class="form-control" placeholder="Tên danh mục..." value="{{$danhmuc->ten}}">
								</div>
								<div class="row">
										<div class="col-xs-12 col-md-4 col-lg-4">
											<input type="submit" name="submit" class="form-control btn btn-primary" value="Sửa" >
										</div>
		    							<div class="col-xs-12 col-md-4 col-lg-4">
		    								<a href="{{asset('admin/danhmuc')}}" name="name" class="form-control btn btn-danger">Hủy
		    								</a>
		    							</div>	
								</div>
								{{csrf_field()}}
							</form>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop