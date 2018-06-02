<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
        body {
            background-color: #392742;
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
        table {
            overflow: hidden;
            border: 1px solid #d3d3d3;
            background: #fefefe;
            width: 70%;
            margin: 1% auto ;
            border-radius: 5px;
        }
        th, td {
            padding: 13px 20px 13px; 
            text-align: center; 
        }
        th {
            padding-top: 15px; 
            text-shadow: 1px 1px 1px #fff;
            background: #e8eaeb;
        }
        td {
            border-top: 1px solid #e0e0e0; 
            border-right: 1px solid #e0e0e0;
        }
        tr.odd-row td { background: #f6f6f6; }
        td.first, th.first { text-align: left }
        td.last { border-right: none; }
        .link-service, .link-service:link, .link-service:visited, .link-service:active, .link-service:hover { 
            text-decoration: none;
            color: black;
            cursor: pointer;
            font-size: 17pt; 
            width: 240px;
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
            border-color: white;
        }
        .td-view-click {
            cursor: pointer;
            background-color: #564160;
            color: #f3f0f4;
            transition: 0.3s;
        }
        .td-view-click:hover {
            background-color: #f3f0f4;
            color: #392742;
            border: 1px solid #392742;
        }

        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 46px;
            height: 18px;
            margin-bottom: 0;
        }

        /* Hide default HTML checkbox */
        .switch input {display:none;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {

            position: absolute;
            content: "";
            height: 13px;
            width: 13px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #392742;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
        p{
            margin-bottom: 0;
        }

    </style>
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
<table class="table-condensed main-table">
    <tr class>
        <th>ID</th>
        <th>Ім'я</th>
        <th>Прізвище</th>
        <th>Номер телефону</th>
        <th>Дата</th>
        <th>Послуга</th>
        <th>
            <p>
                <label class="switch">
                    <input type="checkbox"  id="status" name="status" value="1" <?if($status == true):?> checked <?endif;?>>
                    <span class="slider round"></span>
                </label>
            </p>Статус</p>
        </th>

        <th>Дія</th>
    </tr>
    <?if(!empty($orders)):
    foreach ($orders as $order):?>
    <tr>
        <td><?echo $order->id;?> </td>
        <td><?echo $order->name;?> </td>
        <td><?echo $order->surname;?> </td>
        <td><?echo $order->phone;?> </td>
        <td><?echo $order->date;?> </td>
        <td><?echo $order->title;?> </td>
        <td><?if($order->status == 0):echo 'Не підтверджений'; else: echo 'Підтвержений' ; endif;?> </td>
        <td class="td-view-click" onclick="location.href='/admin/order/<?echo $order->id;?>';">Проглянути</td>
    </tr>
    <?endforeach;
    endif;?>
</table>
<div class="main-flex-field">
    <a class="link-service" href="admin">До головного меню</a>
</div>
</body>

<script>
    $("#status").click(function () {
        var status = $('#status').prop('checked');
        console.log(status);
        $.post('/admin/services', {status}, function (data) {
            $('body').empty();
            $('body').append(data);
        });
    });
</script>
</html>