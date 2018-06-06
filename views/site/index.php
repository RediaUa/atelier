<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="/template/css/main.css">
    <link rel="stylesheet" href="/template/css/header_auth.css">

    <title>Hello, guest!</title>

</head>
<body>
<?require_once ROOT.'/views/common/header.php';?>

<div class="wrapper">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../../template/img/slider/forSlider3.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../../template/img/slider/forSlider2.jpg" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
            <div class="div-description">
                <div class="text-description-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui facere architecto omnis soluta eos fugiat cupiditate incidunt. Doloribus tempore commodi reiciendis et architecto dolore dignissimos excepturi ullam esse iure, officiis.</div>
                <div><img src="template/img/description-index/slider-image-3.jpg" class="img-description"></div>
                <div class="text-description-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, expedita. Labore ad, officiis non! Earum molestiae cum, nam amet a. Eaque consectetur, possimus nisi commodi assumenda placeat sed nostrum iure!</div>
            </div>

        </div>
    </div>
<script>
let index = 0;
function slider(){
    if(index >= 4) index = 1;
    let indexPlus = index + 1;
    index = indexPlus;
    $('.img-description').attr('src', 'template/img/description-index/slider-image-'+index+'.jpg');
};
slider();
setInterval(slider, 2000);
</script>

</div>
<footer>
<li class="marker-none">@company</li>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>