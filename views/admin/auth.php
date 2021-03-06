<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auth</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        -------------------------------------------------- */
        #login {
            padding-top: 50px
        }
        #login .form-wrap {
            width: 30%;
            margin: 0 auto;
        }
        #login h1 {
            color: #392742;
            font-size: 18px;
            text-align: center;
            font-weight: bold;
            padding-bottom: 20px;
        }
        #login .form-group {
            margin-bottom: 25px;
        }
        #login .checkbox {
            margin-bottom: 20px;
            position: relative;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
        #login .checkbox.show:before {
            content: '\e013';
            color: #1fa67b;
            font-size: 17px;
            margin: 1px 0 0 3px;
            position: absolute;
            pointer-events: none;
            font-family: 'Glyphicons Halflings';
        }
        #login .checkbox .character-checkbox {
            width: 25px;
            height: 25px;
            cursor: pointer;
            border-radius: 3px;
            border: 1px solid #ccc;
            vertical-align: middle;
            display: inline-block;
        }
        #login .checkbox .label {
            color: #6d6d6d;
            font-size: 13px;
            font-weight: normal;
        }
        #login .btn.btn-custom {
            font-size: 14px;
            margin-bottom: 20px;
        }
        #login .forget {
            font-size: 13px;
            text-align: center;
            display: block;
        }

        /*    --------------------------------------------------
            :: Inputs & Buttons
            -------------------------------------------------- */
        .form-control {
            color:  #392742 !important;
        }
        .btn-custom {
            color: #fff;
            background-color: #392742 !important;
        }
        .btn-custom:hover,
        .btn-custom:focus {
            color: #fff;
        }

        /*    --------------------------------------------------
            :: Footer
            -------------------------------------------------- */
        #footer {
            color: #6d6d6d;
            font-size: 12px;
            text-align: center;
        }
        #footer p {
            margin-bottom: 0;
        }
        #footer a {
            color: inherit;
        }
    </style>
</head>
<body>
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-wrap">
                    <h1>Вхід до адмін панелі</h1>
                    <form  action="" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="login" class="sr-only">Логін</label>
                            <input type="text" name="login" id="email" class="form-control" placeholder="Введіть логін">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Пароль</label>
                            <input type="password" name="key" id="key" class="form-control" placeholder="Введіть пароль">
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Показати пароль</span>
                        </div>
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Увійти">
                    </form>
                    <hr>
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<script>
    function showPassword() {

        var key_attr = $('#key').attr('type');

        if(key_attr != 'text') {

            $('.checkbox').addClass('show');
            $('#key').attr('type', 'text');

        } else {

            $('.checkbox').removeClass('show');
            $('#key').attr('type', 'password');

        }

    }
</script>
</body>
</html>
