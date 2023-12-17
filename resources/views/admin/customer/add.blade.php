@extends('admin.layout.index')

@section('content')
<div class="page-header">
	<h1>
		Thêm người dùng
	</h1>
	
	<div class="">
		<a class="white" href="list">
			<i class="ace-icon fa fa-undo bigger-110">  &nbsp;Trở về danh sách &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</i>
		</a>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			{{ csrf_field() }}
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Họ và tên </label>

				<div class="col-sm-9">
					<input type="text" id="fullname" name="fullname" placeholder="Họ tên" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Số điện thoại </label>

				<div class="col-sm-9">
					<input class=" input-mask-phone" type="text" id="phone" name="phone" placeholder="(999) 999-9999" />
				</div>
			</div>		

			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

				<div class="col-sm-9">
					<input type="text" id="email" name="email" placeholder="Email" class="col-xs-10 col-sm-5" />
				</div>
			</div>		

			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Giới tính </label>

				<div class="col-sm-9">
					<div class="radio">
						<label>
							<input name="gender" type="radio" class="ace" value="Nam" />
							<span class="lbl"> Nam</span>
						</label>
						<label>
							<input name="gender" type="radio" class="ace" value="Nữ" />
							<span class="lbl" > Nữ</span>
						</label>
					</div>
				</div>
			</div>
			
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