<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<table class="table-condensed">
    <tr>
        <th>ID</th>
        <th>Ім'я</th>
        <th>Прізвище</th>
        <th>Номер телефону</th>
        <th>Дата</th>
        <th>Послуга</th>
        <th>Статус</th>
    </tr>
    <?foreach ($orders as $order):?>
    <tr>
        <td><?echo $order->id;?> </td>
        <td><?echo $order->name;?> </td>
        <td><?echo $order->surname;?> </td>
        <td><?echo $order->phone;?> </td>
        <td><?echo $order->date;?> </td>
        <td><?echo $order->title;?> </td>
        <td><?if($order->status == 0):echo 'Не підтверджений'; else: echo 'Підтвержений' ; endif;?> </td>

            <td onclick="location.href='/admin/order/<?echo $order->id;?>';">Проглянути</td>

    </tr>
    <?endforeach;?>
</table>
</body>
</html>