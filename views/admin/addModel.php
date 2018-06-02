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
<?php if(isset($errors)):?>
    <div class="errors">
        <?foreach ($errors as $error):?>
            <p><?echo $error?></p>
            <script> $('.errors').css('display', 'block');let example = true; $('.errors').fadeTo(600,1).css({'display':'flex'}); </script>
        <?php endforeach;?>
    </div>
    <script>setTimeout(function() { if (example) $('.errors').fadeTo(600, 0); }, 2000); </script>
<?endif;?>


<?if(empty($result)):?>
<form action="/admin/add/<?echo $id_category;?>" method="post" enctype="multipart/form-data">
   <p>Зображення<input type="file"  name="image"></p>
    <p>Назва<input type="text" name="title"></p>
    <p>Опис<input type="text" name="desc"></p>
    <button type="submit" name="submit">Додати</button>
    <?else: ?>
    <p>Товар додано!</p>
    <?endif;?>
    <a href="/admin/catalog">Назад</a>
</form>
</body>
</html>