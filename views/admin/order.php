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
        .main-flex-field-inverted-color {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            padding: 1%;
            background-color: #f3f0f4;
            color: #392742;
        }
        .item-order {
            width: 400px;
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
        .checkbox-order {
            width: 30px;
            height: 30px;
            outline:none;
        }
        .button-accept-order {
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
        .button-accept-order:hover {
            background-color: #392742;
            color: white;
            border-color: white;
        }


        .link-service, .link-service:link, .link-service:visited, .link-service:active, .link-service:hover { 
            text-decoration: none;
            color: black;
            cursor: pointer;
            font-size: 15pt; 
            width: 300px;
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
        .img-data {
            height: 300px;
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
            padding: 10px;
            width: 100%;
        }
        </style>
    <title>Document</title>
</head>
<body>
<?if($order):?>
<form action="/admin/order/<?echo $order->id?>" method="post">
<div class="main-flex-field">
    <div class="item-order">Ім'я: <div><?echo $order->name?></div></div>
    <div class="item-order">Прізвище: <div><?echo $order->surname?></div></div>
    <div class="item-order">Номер телефону: <div><?echo $order->phone?></div></div>
    <div class="item-order">Дата: <div><?echo $order->date?></div></div>
    <div class="item-order">Опис замовлення: <div><?echo $order->description?></div></div>
</div>
<div class="main-flex-field-inverted-color">
    <img class="img-data" src="<?echo '/'.$order->img?>" alt="#">
</div>

    
<div class="main-flex-field">
    <div class="item-order">Ціна: <div><input class="input-order" type="text" name="price" value="<?echo $order->price?>"></div></div>

    <?if($order->status == 0):?>
    <div class="item-order">Підтвердити замовлення<div><input class="checkbox-order" type="checkbox" name="status" value="1"></div></div>
    <?endif;?>
    <?if($order->status == 1):?>
        <div class="item-order">Замовлення підтверджено<div><input class="checkbox-order" type="checkbox" name="status" value="1" checked></div></div>
    <?endif;?>
</div>

<div class="main-flex-field-inverted-color">
    <?if(isset($result) && empty($errors)):?>
    <p>Збережено!</p>
    <a class="link-service" href="/admin/services">Повернутися до замовлень</a>
    <? else: ?>    
    <button class="button-accept-order" type="submit" name="submit">Зберегти</button>
        <a class="link-service" href="/admin/services">Повернутися до замовлень</a>

    <? endif;?>
</div>
</form>
<?else:?>
<p>Замовлення не знайдено!</p>
<?endif;?>
<div class="errors">
    <?foreach ($errors as $error):?>
    <?echo $error;?></div>
    <script> let example = true; $('.errors').fadeTo(600,1).css({'display':'flex'});</script>
    <? endforeach;?>
</div>
<script>setTimeout(function() { if (example) $('.errors').fadeTo(600, 0); }, 2000); </script>
</body>
</html>