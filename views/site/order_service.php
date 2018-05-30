<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <style>
        body { 
          color: #392742; 
          font-size: 14pt;
          background-color: #f3f0f4;
        }
        .marker-none {
          list-style-type:  none;
        }
        .background-color-navbar {
            background-color: #f3f0f4 !important;
            border-bottom: 2px solid #392742;
        }
        .main-flex-field {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            padding: 1%;
            background-color: #392742;
            color: #f3f0f4;
        }
        .result-order-field {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            padding: 1%;
            background-color: #f3f0f4;
            color: #392742;
        }
        .main-flex-field-inverted-color {
            background-color: #f3f0f4;
            color:  #392742;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            padding: 1%;
        }
        .item-order {
            width: 500px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin: 10px;
        }
        .input-order {
            width: 300px;
            height: 30px;
            font-size: 13pt;
            padding-left: 10px;
            padding-right: 10px;
            border-radius: 10px;
            outline:none;
        }
        .file-order {
            border-radius: 15px;
        }
        .textarea-order {
            width: 300px;
            height: 200px;
            font-size: 13pt;
            border-radius: 10px;
            padding-left: 10px;
            padding-right: 10px;
            outline:none;
        }
        .select-order {
            width: 300px;
            height: 30px;
            font-size: 13pt;
            padding-left: 10px;
            padding-right: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            outline:none;
            border-color: #392742;

        }
        .button-order {
            margin-top: 70px;
            color: black;
            cursor: pointer;
            font-size: 17pt; 
            width: 215px;
            height: 50px;
            background-color: white;
            border: 1px solid black;
            border-radius: 5px;
            padding: 5px;
            transition: 0.3s;
        }
        .button-order:hover {
            background-color: #392742;
            color: white;
        }
        .errors {
            display: flex;
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 15pt;
            font-weight: bolder;
            background-color: #660000;
            color: white;
            padding-top: 10px;
        }
        .link-service, .link-service:link, .link-service:visited, .link-service:active, .link-service:hover { 
            text-decoration: none;
            color: black;
            cursor: pointer;
            font-size: 17pt; 
            width: 215px;
            height: 50px;
            background-color: white;
            border: 1px solid black;
            border-radius: 5px;
            padding: 5px;
            transition: 0.3s;
            text-align: center;
            margin: 10px;
        }
        .link-service:hover {
            background-color: #392742;
            color: white;
        }
        .result-title {
            margin: 10px;
        }
        .errors{
            display: none;
        }
    </style>
    <title>Document</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light background-color-navbar">
        <a class="navbar-brand" href="/">Главная</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/services">Послуги<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Каталог
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Весна</a>
                        <a class="dropdown-item" href="#">Лето</a>
                        <a class="dropdown-item" href="#">Осень</a>
                        <a class="dropdown-item" href="#">Зима</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Индивидуальный заказ</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Админка</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <li class="nav-item marker-none"><i class="fas fa-phone"></i>&nbsp;+380959999999</li>&nbsp;&nbsp;&nbsp;
                <li class="nav-item marker-none"><i class="fas fa-envelope-square"></i>&nbsp;myemail@gmail.com </li>
            </form>
        </div>
    </nav>
</header>
<?php if(isset($errors)):?>
    <div class="errors">
        <?foreach ($errors as $error):?>
            <p><?echo $error?></p>
            <script> $('.errors').css('display', 'block');let example = true; $('.errors').fadeTo(600,1).css({'display':'flex'}); </script>
        <?php endforeach;?>
    </div>
    <script>setTimeout(function() { if (example) $('.errors').fadeTo(600, 0); }, 2000); </script>
<?endif;?>
<?php if (!isset($result) ):?>
<form action="order_service" method="post" enctype="multipart/form-data">
    <div class="main-flex-field"><input class="file-order" type="file" name="image"></div>
    <div class="main-flex-field-inverted-color">
        <div class="item-order">Ім'я: <input type="text" class="input-order" name="name" value = <? echo $name;?>></div>
        <div class="item-order">Прізвище: <input type="text" class="input-order" name="surname" value = <? echo $surname;?>></div>
        <div class="item-order">Номер телефону: <input type="text" class="input-order" name="phone" value = <? echo $phone;?>></div>
    </div>
    <div class="main-flex-field">
        <div class="item-order">Опис замовлення: <textarea class="textarea-order" name="description" value = <? echo $desc;?>></textarea></div>
    </div>
    <div class="main-flex-field-inverted-color">
        <div class="item-order">
            Виберіть послугу: 
            <select name="service" id="" class="select-order">
            <?php foreach ($services as $serv):?>
                <option value="<?php echo $serv->id?>" class="option-order"><? echo $serv->title?></option>
            <?php endforeach;?>
            </select>
        </div>
    </div> 
    <div class="main-flex-field-inverted-color">
        <button type="submit" name="submit" class="button-order">Замовити</button>
    </div>
</form>
<?php endif; ?>




<?php if (isset($result)):?>
<div class="result-order-field">
    <div class="result-title">Дякуємо за замовлення! Наші оператори зателефонують вам ближайшим часом!</div>
    <a class="link-service" href="/">На головну</a>
</div>
<?php  endif;?>
</body>
</html>