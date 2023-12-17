@extends('admin.layout.index')

@section('content')
<div class="main-page">
    <script src="http://localhost/test/public/admin_assets/js/statistiacl.js"></script>
    <div class="col_3">
        <div class="col-md-2 widget widget1">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                <div class="stats">
                    <h5><strong>0</strong></h5>
                    <a href="admin/shop/order"><span>Số hóa đơn</span></a>
                </div>
            </div>
        </div>
        <div class="col-md-2 widget widget1">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                <div class="stats">
                    <h5><strong>2</strong></h5>
                    <a href="admin/shop/product"><span>Số sản phẩm</span></a>
                </div>
            </div>
        </div>
        <div class="col-md-2 widget widget1">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-money user2 icon-rounded"></i>
                <div class="stats">
                    <h5><strong>$1012</strong></h5>
                    <span>Nhập hàng</span>
                </div>
            </div>
        </div>
        <div class="col-md-2 widget widget1">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
                <div class="stats">
                    <h5><strong>$450</strong></h5>
                    <span>Khách qua cửa hàng
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-4 widget">
            <div class="r3_counter_box">

                <i class="pull-left fa fa-dollar icon-rounded"></i>
                <div class="stats">
                    <h6><strong>0 đ</strong></h6>
                    <span>Tổng tiền</span>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>

    <div class="row-one widgettable"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
    <div class="col-lg-3">
        <label>Năm</label>
        <select class="form-control" id="year">

        </select>
    </div>
    <canvas id="lineChart" width="1016" height="508" class="chartjs-render-monitor" style="display: block; width: 1016px; height: 508px;"></canvas>




    <div class="clearfix"> </div>
</div>

</div>
@endsection