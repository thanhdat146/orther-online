@extends('admin.masterAdmin')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Món Ăn</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/monan/add')}}" class="btn btn-primary">Thêm sản phẩm</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Thông Tin Sản Phẩm</th>
											<th>Giá sản phẩm</th>
											<th width="20%">Ảnh sản phẩm</th>
											<th>Danh mục</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach($sanpham as $sp)
										
											<tr>
											<td>{{$sp->id}}</td>
											<td>
												<p>{{$sp->tensp}}</p>
												<div>
													{{$sp->mota}}
												</div>
												
												<p></p>
												{{$sp->motachitiet}}
												<p>Khuyến Mãi:{{$sp->sale}}%</p>

											</td>
											<td>
												<center>
													{{number_format($sp->gia)}} VNĐ
												</center>	
											</td>
											<td>
												<center>
													<img width="200px" src="../assets/images/food/{{$sp->hinhanh}}" class="thumbnail">
												</center>	
											</td>
											<td>
												<center>
													@foreach($loaisanpham as $lsp)
															@if($lsp->id == $sp->id_loai)
																{{$lsp->tenloai}}
															@endif
												@endforeach
												</center>
											</td>
											<td>
												<a href="{{asset('admin/monan/edit/'.$sp->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a onclick="return confirm('Bạn có chắc muốn xóa!');" href="{{asset('admin/monan/delete/'.$sp->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
											</tr>

										@endforeach
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

@stop