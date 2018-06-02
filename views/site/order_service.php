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
    <link rel="stylesheet" href="template/css/order_service.css">
    <title>OrderService</title>
</head>
<body>
<?require_once ROOT.'/views/common/header.php';?>
<?php if(isset($errors)):?>
    <div class="errors">
        <?foreach ($errors as $error):?>
            <p><?echo $error?></p>
            <script> $('.errors').css('display', 'block');let example = true; $('.errors').fadeTo(600,1).css({'display':'flex'}); </script>
        <?php endforeach;?>
    </div>
    <script>setTimeout(function() { if (example) $('.errors').fadeTo(600, 0);  }, 2000); </script>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</html>