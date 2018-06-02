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
        .div-description {
            height: 400px;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            flex-direction: row;
            justify-content: center;
            background-color: #392742;
            color: #f3f0f4;
        }
        .img-description {
            width: 500px;
            height: 281px;
            border-radius: 15px;
            border: 1px solid #f3f0f4;
        }
        .text-description-item {
            text-align: center;
            margin: 2%;
            font-size: 16pt;
        }
        footer {
            display: flex;
            align-items: center;
            flex-direction: row;
            justify-content: center;
            height: 50px;
        }

        .background-color-navbar {
            background-color: #f3f0f4 !important;
            border-bottom: 2px solid #392742;
        }
    </style>
    <title>Hello, world!</title>

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light background-color-navbar">
        <a class="navbar-brand" href="/">Головна</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/services">Послуги<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <span class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Каталог
                    </span>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="catalog/1">Вечірнє вбрання</a>
                        <a class="dropdown-item" href="catalog/2">Карнавальні костюми</a>
                        <a class="dropdown-item" href="catalog/3">Спецодяг</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="catalog/4">Індивідуальні моделі</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Админка</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <li class="nav-item marker-none"><i class="fas fa-phone"></i>&nbsp;+380959999999</li>&nbsp;&nbsp;&nbsp;
                <li class="nav-item marker-none"><i class="fas fa-envelope-square"></i>&nbsp;myemail@gmail.com </li>
            </form>
        </div>
    </nav>
</header>

<div class="wrapper">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../../template/img/slider/forSlider3.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../../template/img/slider/forSlider2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../../template/img/slider/forSlider3.jpg" alt="Third slide">
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

    <!--<div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        <div>-->
            <div class="div-description">
                <div class="text-description-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui facere architecto omnis soluta eos fugiat cupiditate incidunt. Doloribus tempore commodi reiciendis et architecto dolore dignissimos excepturi ullam esse iure, officiis.</div>
                <img src="template/img/description-index/slider-image-3.jpg" class="img-description">
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
    <!--
    <div class="container products">
        <div class="row">
            <div class="col-md-4 product">
                <img src="" alt="">
                <p>col-4</p>
                <button>Купить</button>
            </div>
            <div class="col-md-4 product">
                <img src="" alt="">
                <p>col-4</p>
                <button>Купить</button>
            </div>
            <div class="col-md-4 product">
                <img src="" alt="">
                <p>col-4</p>
                <button>Купить</button>
            </div>

        </div>

        <div class="row">
            <div class="col product">
                <img src="" alt="">
                <p>col-4</p>
                <button>Купить</button>
            </div>
            <div class="col product">
                <img src="" alt="">
                <p>col-4</p>
                <button>Купить</button>
            </div>
            <div class="col product">
                <img src="" alt="">
                <p>col-4</p>
                <button>Купить</button>
            </div>
        </div>

        <div class="row">
            <div class="col product">
                <img src="" alt="">
                <p>col-4</p>
                <button>Купить</button>
            </div>
            <div class="col product">
                <img src="" alt="">
                <p>col-4</p>
                <button>Купить</button>
            </div>
            <div class="col product">
                <img src="" alt="">
                <p>col-4</p>
                <button>Купить</button>
            </div>
        </div>
    </div>
    -->

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