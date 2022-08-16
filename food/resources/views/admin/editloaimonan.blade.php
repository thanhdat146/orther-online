@extends('admin.masterAdmin')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Sửa Loại Món Ăn</div>
					<div class="panel-body">
						@include('admin.error')
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Danh mục</label>
										<select required name="cate" class="form-control">
											@foreach($danhmuc as $dm)
												<option value="{{$dm->id}}" @if($dm->id == $loaimonan->id_danhmuc) selected @endif >{{$dm->ten}}</option>
											@endforeach
					                    </select>
									</div>
									<div class="form-group" >
										<label>Tên Loại</label>
										<input required type="text" name="name" class="form-control" value="{{$loaimonan->tenloai}}">
									</div>
									<input type="submit" name="submit" value="Sửa" class="btn btn-primary">
									<a href="{{asset('admin/loaimonan')}}" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

@stop