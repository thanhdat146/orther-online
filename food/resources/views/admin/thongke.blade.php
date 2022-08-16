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
					<div class="panel-heading">Thống Kê trong tháng {{$thang}}</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th width="25%">Tổng Đơn Hàng Trong Tháng</th>
											<th width="15%">Tổng Doanh Thu Trong Tháng</th>
											
											<th width="30%">Chi Tiết Và Số Lượng Món Ăn Được Đặt</th>
											<th>Món Ăn Được Xem Nhiều Nhất</th>
										</tr>
									</thead>
									<tbody>
										
											<tr>
											<td> Số Đơn Hàng: {{$tongdonhang}} đơn hàng</td>
											<td>
												<p> Số Tiền: {{number_format($tongdoanhthu)}} VNĐ </p>

											</td>
											<td>
													@if(isset($tongket))

													@foreach($tongket as $tk)
														<p>Số Lượng Bán: {{$tk->tong}}</p>
														<p>Tên Món Ăn: 
															@foreach($sanpham as $sp)
																@if($sp->id == $tk->id_sp)
																	{{$sp->tensp}}
																	<p>Hình ảnh: </p>
																	<center>

																		<img width="200px" src="../assets/images/food/{{$sp->hinhanh}}" class="thumbnail">
																	</center>	
																@endif
															@endforeach
														</p>
														<br>
														@endforeach
													@else
													<p>Chưa có món ăn được bán đi</p>
													@endif
														
											</td>
											<td>
												<p>Tên Món Ăn:
													{{$spnoibat->tensp}}
												</p>
												<p>Hình ảnh: </p>
																	<center>

																		<img width="200px" src="../assets/images/food/{{$spnoibat->hinhanh}}" class="thumbnail">
																	</center>
											</td>
											</tr>

										
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading">Thống Kê Hôm Nay</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th width="25%">Tổng Đơn Hàng Trong Ngày</th>
											<th width="15%">Tổng Doanh Thu Trong Ngày</th>
											
											<th width="30%">Chi Tiết Và Số Lượng Món Ăn Được Đặt</th>
											<th>Món Ăn Được Xem Nhiều Nhất</th>
										</tr>
									</thead>
									<tbody>
										
											<tr>
											<td> Số Đơn Hàng: {{$donhangngay}} đơn hàng</td>
											<td>
												<p> Số Tiền: {{number_format($doanhthungay)}} VNĐ </p>

											</td>
											<td>

													
														@foreach($tktheongay as $tk)
														<p>Số Lượng Bán: {{$tk->tong}}</p>
														<p>Tên Món Ăn: 
															@foreach($sanpham as $sp)
																@if($sp->id == $tk->id_sp)
																	{{$sp->tensp}}
																	<p>Hình ảnh: </p>
																	<center>

																		<img width="200px" src="../assets/images/food/{{$sp->hinhanh}}" class="thumbnail">
																	</center>	
																@endif
															@endforeach
														</p>
														<br>
														@endforeach
													
											</td>
											<td>
												@if($noibattheongay == null)
												<p>Hiện tại không có khách hàng xem món</p>
												@else
												<p>Tên Món Ăn:
													{{$noibattheongay->tensp}}
												</p>
												<p>Hình ảnh: </p>
																	<center>

																		<img width="200px" src="../assets/images/food/{{$noibattheongay->hinhanh}}" class="thumbnail">
																	</center>
												@endif
											</td>
											</tr>

										
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