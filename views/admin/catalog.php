<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Run models</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/template/vendor/bootstrap/css/bootstrap-grid.min.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="/template/css/simple-sidebar.css" rel="stylesheet" type="text/css">
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
          cursor: pointer;
        }
        #sidebar-wrapper{
            background-color: #392742;
        }
        .main-catalog-field {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-around;
            padding: 20px;
        }
        .item-catalog {
            width: 400px;
            min-height: 400px;
            max-height: 500px;
            background-color: #392742;
            color: #f3f0f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
            padding: 10px;
            transition: 0.3s;
            cursor: pointer;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .item-title {
            text-align: center;
        }
        .item-image {
            height: 300px;  
            width: 400px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }
        .item-image img {
            position: relative;
            max-height: 100%;
            max-width: 100%;
            border-radius: 15px;
        }
        .item-description {
            text-align: center;
            margin-bottom: 10px;
        }
        .item-catalog:hover {
            background-color: #202a34;
        }
        .link-service, .link-service:link, .link-service:visited, .link-service:active, .link-service:hover { 
            text-decoration: none;
            cursor: pointer;
            font-size: 17pt; 
            transition: 0.3s;
        }
        .link-service:hover {
            color: white;
        }
        .link-menu {
            font-size: 2rem; 
        }
        .link-add-item:hover {
            color: black;
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
        .link-float {
        }
        h2 {
            margin: 10px;
        }
    </style>
</head>

<body>
<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">

                    Виберіть категорію

            </li>
            <li>
                <a href="/admin/catalog/1">
                    Вечірнє вбрання</a>
            </li>
            <li>
                <a href="/admin/catalog/2">Карнавальні костюм</a>
            </li>
            <li>
                <a href="/admin/catalog/3">Спецодяг</a>
            </li>
            <li>
                <a href="/admin/catalog/4">Індивідуальні моделі</a>
            </li>
            <li>
                <a href="/admin">До головного меню</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <a href="#menu-toggle" class="link-service link-back" id="menu-toggle">Меню</a>
            <?if($category == null): $category = 0;?>
            <h2>Повний перелік товарів</h2>
            <?else:?><br>
            <h2><a class="link-service link-add-item link-menu" href="/admin/add/<?echo $category;?>">Додати модель </a></h2>
            <?endif;?>
            <div class="main-catalog-field">
            <? foreach ($models as $model): ?>
                <div class="item-catalog">
                    <div class="item-id">ID: <?echo $model->id;?></div>
                    <div class="item-title">Назва товару: <?echo $model->title;?></div>
                    
                    <div class="item-image"><img src="/<? echo $model->img; ?>" alt=""></div>
                    <div class="item-description"><?echo $model->description;?></div>
                    <a class="link-service" onclick="return confirm('Ви впевнені?')" class= "deleteItem" href="/admin/catalog/<?echo $category . '/' . $model->id;?>">Видалити</a>
                </div>                
            <?endforeach;?>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });


</script>

</body>

</html>