<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php if (!isset($result) ):?>
<form action="order_service" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="text" name="name" value = <? echo $name;?>>
    <input type="text" name="surname" value = <? echo $surname;?>>
    <input type="text" name="phone" value = <? echo $phone;?>>
    <input type="text" name="description" value = <? echo $desc;?>>
    <select name="service" id="">
    <?php foreach ($services as $serv):?>
        <option value="<?php echo $serv->id?>"><? echo $serv->title?></option>
    <?php endforeach;?>
    </select>
    <button type="submit" name="submit">submit</button>
</form>
<?php endif; ?>

<?php if(isset($errors)):?>
<div style="background-color: yellow">
    <?foreach ($errors as $error):?>
<p><?echo $error?></p>
    <?php endforeach;?>
</div>
<?endif;?>


<?php if (isset($result)):?>
    <a href="/">На главную</a>
<div>Ваш заказ будет обработан в ближайшее время!</div>
<?php  endif;?>
</body>
</html>