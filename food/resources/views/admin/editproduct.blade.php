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
					<div class="panel-heading">Sửa sản phẩm</div>
					<div class="panel-body">
						@include('admin.error')
						<form method="post" enctype="multipart/form-data" novalidate>
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Danh mục</label>
										<select required name="cate" class="form-control">
											@foreach($loaimonan as $loai )
											<option value="{{$loai->id}}" @if($loai->id == $sanpham->id_loai) selected @endif>{{$loai->tenloai}}</option>
											@endforeach
					                    </select>
									</div>
									<div class="form-group" >
										<label>Tên sản phẩm</label>
										<input required type="text" name="name" class="form-control" value="{{$sanpham->tensp}}">
									</div>
									<div class="form-group" >
										<label>Giá sản phẩm</label>
										<input required type="number" name="price" class="form-control" value="{{$sanpham->gia}}">
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="../assets/images/food/{{$sanpham->hinhanh}}">
									</div>
									<div class="form-group" >
										<label>Khuyến mãi</label>
										<input required type="text" name="promotion" class="form-control" value="{{$sanpham->sale}}">
									</div>
									<div class="form-group" >
										<label>Miêu tả</label>
										<textarea class="ckeditor" required name="description" >{{$sanpham->mota}}</textarea>
										<script type="text/javascript">
											var editor = CKEDITOR.replace('description',{
												language:'vi',
												filebrowserImageBrowseUrl: '../../public/cssadmin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl: '../../public/cssadmin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl: '../../public/cssadmin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl: '../../public/cssadmin/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
									</div>
									<div class="form-group" >
										<label>Miêu tả chi tiết</label>
										<textarea class="ckeditor" required name="description1">{{$sanpham->motachitiet}}</textarea>
										<script type="text/javascript">
											var editor = CKEDITOR.replace('description1',{
												language:'vi',
												filebrowserImageBrowseUrl: '../../public/cssadmin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl: '../../public/cssadmin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl: '../../public/cssadmin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl: '../../public/cssadmin/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
									</div>		
									<input type="submit" name="submit" value="Sửa" class="btn btn-primary">
									<a href="{{asset('admin/monan')}}" class="btn btn-danger">Hủy bỏ</a>
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