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
    <style>
        #sidebar-wrapper{
            background-color: #392742;
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
            <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Меню</a>
            <?if($category == null):?>
            <h2>Повний перелік товарів</h2>
            <?else:?>
          <div><a href="/admin/add/<?echo $category;?>">Додати модель </a></div>

            <?endif;?>
            <? foreach ($models as $model):?>
                <p><?echo $model->id;?></p>
                <p><?echo $model->title;?></p>
                <img src="<?echo '/'.$model->img;?>" alt="#">
                <a   onclick="return confirm('Are you sure?')" class= "deleteItem"
                     href="/admin/catalog/<?echo $category . '/' . $model->id;?>">Видалити</a>
            <?endforeach;?>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
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