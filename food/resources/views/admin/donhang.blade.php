@extends('admin.masterAdmin')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách Đơn Đặt Hàng</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Thông Tin Khách Hàng</th>
											<th>Tiền Thanh Toán</th>
											<th width="20%">Chi Tiết Đơn Đặt</th>
											<th>Thời Gian</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach($donhang as $dh)
										
											<tr>
											<td>{{$dh->id}}</td>
											<td>
												<p>Tên: {{$dh->khachhang}}</p>
												<p>Địa Chỉ: {{$dh->diachi}}</p>
												<p>SĐT: {{$dh->phone}}</p>
												<p>Email: {{$dh->email}}</p>
												<p>Ghi Chú : {{$dh->note}}</p>

											</td>
											<td>
													{{$dh->tongtien}} VNĐ	
											</td>
											<td>
													<p>{{$dh->thongtinhang}}</p>
											</td>
											<td>
												<p>{{$dh->created_at}}</p>
											</td>
											<td>
												<a onclick="return confirm('Bạn có chắc muốn xóa!');" href="{{asset('admin/donhang/delete/'.$dh->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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