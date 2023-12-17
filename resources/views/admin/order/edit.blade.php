@extends('admin.layout.index')

@section('content')
<div class="page-header">
	<h1>
		Thông tin đơn hàng
	</h1>
	
	<div class="">
		<a class="white" href="danhsach">
			<i class="ace-icon fa fa-undo bigger-110">  &nbsp;Trở về danh sách &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</i>
		</a>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<form class="form-horizontal" status="form" method="post" enctype="multipart/form-data" action="">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			{{ csrf_field() }}
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right"  for="form-field-1"> Tên Khách Hàng	 </label>

				<div class="col-sm-9">
					<input type="text" id="name" name="name" value="{{$or->name}}" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right"  for="form-field-1"> Thông tin sản phẩm	 </label>
				</br>
				</br> 
				<table class="col-sm-6" style="margin-left: 150px" border="1">
					<thead>
						<tr>
							<th width="200px">Tên Sản Phẩm</th>
							<th width="100px">Giá</th>
							<th width="100px">Số Lượng</th>
						</tr>
					</thead>

					<tbody>
						@php
							$sum=0;
						@endphp
						@foreach($od as $od)
					<tr>
						<td> {{ $od->product->name }} </td>
						<td> {{ $od->price }} VND </td>
						<td> {{ $od->quantity }} </td>
						@php
							$price=$od->price*$od->quantity;
							$sum=$sum+$price;
						@endphp
					</tr>
					@endforeach
					<tr>
						<td colspan="3">Tổng tiền: {{number_format($sum,0)}} VND</td>
					</tr>
					</tbody>
				</table>				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right"  for="form-field-1"> Email </label>

				<div class="col-sm-9">
					<input type="text" id="email" name="email" value="{{$or->email}}" class="col-xs-10 col-sm-5" />
				</div>
			</div>		
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right"  for="form-field-1"> Địa Chỉ </label>

				<div class="col-sm-9">
					<input type="text" id="address" name="address" value="{{$or->address}}" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right"  for="form-field-1"> Số Điện Thoại </label>

				<div class="col-sm-9">
					<input type="text" id="phone" name="phone" value="{{$or->phone}}" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right"  for="form-field-1"> Ghi chú </label>

				<div class="col-sm-9">
					<input type="text" id="note" name="note" value="{{$or->note}}" class="col-xs-10 col-sm-5" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="status" > Tình tràn đơn hàng </label>

				<div class="col-sm-9">
					
					@if($or->status==2)
					<label>
						<input name="status" id="status" class="ace ace-switch ace-switch-6" type="radio" value="2" checked="true"  />
						<span class="lbl" for="status">Đã Hủy</span>
					</label>
					<label>
						<input name="status" id="status" class="ace ace-switch ace-switch-6" type="radio" value="1" />
						<span class="lbl" for="status">Đã Đặt</span>
					</label>
					<label>
						<input name="status" id="status" class="ace ace-switch ace-switch-6" type="radio" value="0" />
						<span class="lbl" for="status">Đang Xử Lý</span>
					</label>
					@elseif($or->status==1)
					<label>
						<input name="status" id="status" class="ace ace-switch ace-switch-6" type="radio" value="2"   />
						<span class="lbl" for="status">Đã Hủy</span>
					</label>
					<label>
						<input name="status" id="status" class="ace ace-switch ace-switch-6" type="radio" value="1" checked="true" />
						<span class="lbl" for="status">Đã Đặt</span>
					</label>
					<label>
						<input name="status" id="status" class="ace ace-switch ace-switch-6" type="radio" value="0" />
						<span class="lbl" for="status">Đang Xử Lý</span>
					</label>
					@else
					<label>
						<input name="status" id="status" class="ace ace-switch ace-switch-6" type="radio" value="2"   />
						<span class="lbl" for="status">Đã Hủy</span>
					</label>
					<label>
						<input name="status" id="status" class="ace ace-switch ace-switch-6" type="radio" value="1" />
						<span class="lbl" for="status">Đã Đặt</span>
					</label>
					<label>
						<input name="status" id="status" class="ace ace-switch ace-switch-6" type="radio" value="0"  checked="true"/>
						<span class="lbl" for="status">Đang Xử Lý</span>
					</label>
					@endif
				</div>
			</div>

			<div class="space-4"></div>

			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info" type="submit" name="addNew">
						<i class="ace-icon fa fa-check bigger-110"></i>
						Submit
					</button>

					&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="ace-icon fa fa-undo bigger-110"></i>
						Reset
					</button>

					&nbsp; &nbsp; &nbsp;
					<button class="btn" type="button">
						<i class="ace-icon fa fa-undo bigger-110"></i>

						<a href="list">Trở về danh sách</a>
					</button>
				</div>
			</div>


		</form>
	</div><!-- /.col -->
</div>
@endsection