
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simi Đăng nhập</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/selectFX/css/cs-skin-elastic.css')}}">

    
    <link rel="stylesheet" href="{{asset('admin_assets/css/style.css')}}" />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                    <form method="POST" action="">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{ csrf_field() }}
                        <div>
                          <h4>Đăng nhập</h4>
                          <hr>
                        </div>
                        <div class="form-group">
                            <label>Tên đăng nhập</label>
                            <input type="text" name="username" class="form-control" placeholder="Tên đăng nhập">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember"> Ghi nhớ đăng nhập
                            </label>
                            <label class="pull-right">
                                <a href="#">Quên mật khẩu ?</a>
                            </label>

                        </div>
                        <button type="submit" data-url="" class="btn-submit btn btn-success btn-flat m-b-30 m-t-30">Đăng nhập</button>

                    </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $(".btn-submit").click(function(){
            // var id = $(this).attr("data-id");
            var url = $(this).attr("data-url");
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                data:
                success: function(response) {
                    console.log(response);
                    $("#hoten").text(response.fullname);
                    $("#avatar").attr("src","../../../uploads/avt/"+response.avatar);
                    $("#ngaysinh").text(response.birthday);
                    $("#gioitinh").text(response.gender);
                    $("#diachi").text(response.address);
                    $("#email").text(response.email);
                    $("#sdt").text(response.phone);
                    $("#ghichu").text(response.note);
                    $("#user").text(response.username);
                    $("#pass").text(response.password);

                },
                error: function () {
                }
            })
            
        })
    })
</script>

<script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin_assets/js/main.js')}}"></script>


</body>

</html>
