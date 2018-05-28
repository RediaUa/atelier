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
<?if($order):?>
<form action="/admin/order/<?echo $order->id?>" method="post">
<p><?echo $order->name?></p>
<p><?echo $order->surname?></p>
<p><?echo $order->phone?></p>
<p><?echo $order->date?></p>
<div><?echo $order->description?></div>
    <img src="<?echo '/'.$order->img?>" alt="#">
    <p>Ціна:<input type="text" name="price" value="<?echo $order->price?>"></p>
    <?if($order->status == 0):?>
    <p>Подтвердить заказ<input type="checkbox" name="status" value="1"></p>
    <?endif;?>
    <?if($order->status == 1):?>
        <p>Заказ подтвержден<input type="checkbox" name="status" value="1" checked></
    <?endif;?>
    <?if (isset($result)):?>
    <p>Збережено!</p>
    <a href="/admin/services">Повернутися до замовлень</a>
    <? else: ?>

    <button type="submit" name="submit">Зберегти</button>
    <? endif;?>

</form>
<?else:?>
<p>Заказ не найден!</p>
<?endif;?>

</body>
</html>