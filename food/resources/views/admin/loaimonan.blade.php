@extends('admin.masterAdmin')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Loại Món Ăn</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/loaimonan/add')}}" class="btn btn-primary">Thêm sản phẩm</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Tên Loại Danh Mục</th>
											<th>Trạng Thái</th>
											<th>Danh mục</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
											@foreach($loaisanpham as $lsp)
												<tr>
													<td>{{$lsp->id}}</td>
													<td>{{$lsp->tenloai}}</td>
													<td>{{$lsp->status == 1 ? 'Hàng Đang Bán':'Hàng Hết Bán'}}</td>

													<td>
														@foreach($danhmuc as $dm)
															@if($dm->id == $lsp->id_danhmuc)
																{{$dm->ten}}
															@endif
														@endforeach
													</td>

													<td>
														<a href="{{asset('admin/loaimonan/edit/'.$lsp->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
														<a onclick="return confirm('Bạn có chắc muốn xóa!');" href="{{asset('admin/loaimonan/delete/'.$lsp->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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