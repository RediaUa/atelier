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
        .errors{
            display: none;
        }
        .link-service, .link-service:link, .link-service:visited, .link-service:active, .link-service:hover { 
            text-decoration: none;
            cursor: pointer;
            font-size: 17pt; 
            transition: 0.3s;
        }
        .button-order {
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
            margin: 10px;
        }
        .button-order:hover {
            background-color: #392742;
            color: white;
        }
        .link-back {
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
        .link-back:hover {
            background-color: #392742;
            color: white;
        }
    </style>
    <title>Document</title>
</head>
<body>



<?if(empty($result)):?>
<form action="/admin/add/<?echo $id_category;?>" method="post" enctype="multipart/form-data">
    <div class="main-flex-field">
        <div class="item-order">Зображення <input type="file"  name="image" class="file-order"></div>
        <div class="item-order">Назва <input type="text" name="title" class="input-order"></div>
        <div class="item-order">Опис замовлення: <textarea class="textarea-order" name="desc"></textarea></div>
    </div>
    <div class="main-flex-field-inverted-color">
        <button type="submit" name="submit" class="button-order">Додати</button>
        <?else: ?>
        <div class="main-flex-field"><div class="result-access">Товар додано!</div></div> 
        <?endif;?>
        <div class="main-flex-field-inverted-color"><a class="link-service link-back" href="/admin/catalog">Назад</a></div> 
    </div>
</form>

<!-- view errors -->
<?php if(isset($errors)):?>
    <div class="errors">
        <?foreach ($errors as $error):?>
            <p><?echo $error?></p>
            <script> $('.errors').css('display', 'block');let example = true; $('.errors').fadeTo(600,1).css({'display':'flex'}); </script>
        <?php endforeach;?>
    </div>
    <script>setTimeout(function() { if (example) $('.errors').fadeTo(600, 0, function () {$('.errors').css({'display':'none'}); }); }, 2000); </script>
<?endif;?>
</body>
</html>