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
    	.background-color-navbar {
            background-color: #f3f0f4 !important;
            border-bottom: 2px solid #392742;
        }
		.main-flex-field {
			display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            padding: 2%;
            background-color: #392742;
            color: #f3f0f4;
		}
		.main-flex-field-inverted-color {
            background-color: #f3f0f4;
            color:  #392742;
		}
		.services-zone {
			display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
		}
		.item-service {
			padding: 2%;
			cursor: pointer;
			position: relative;
		}
		.service-img {
			background-image: url(template/img/services-items/img-item-1.jpg);
			width: 800px;
			height: 400px;
			border-radius: 5%;
		}
		.img-1 { background-image: url(template/img/services-items/img-item-1.jpg); }
		.img-2 { background-image: url(template/img/services-items/img-item-2.jpg); }
		.img-3 { background-image: url(template/img/services-items/img-item-3.jpg); }
		.img-4 { background-image: url(template/img/services-items/img-item-4.jpg); }
		.service-title {
            margin: 10px;
            font-weight: bolder;
            font-size: 20pt;
		}
		.item-wrapper {
			display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
		}
		.service-description {
			width: 800px;
			text-align: justify;
			margin: 10px;
		}
		.link-service, .link-service:link, .link-service:visited, .link-service:active, .link-service:hover { 
			text-decoration: none;
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
		}
		.link-service:hover {
			background-color: #392742;
			color: white;
		}
		.order-service-field {
			position: fixed;
			bottom: 30px;
			right: 30px;
		}
    </style>
    <title>Services</title>
</head>
<body>
<?require_once ROOT.'/views/common/header.php';?>

<div class="main-flex-field">
	<div class="services-zone">
		<div class="item-service item-wrapper">
			<div class="item-service service-img img-1"></div>
			<div class="service-title">Пошиття одягу на замовлення</div>
			<div class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique laudantium laboriosam tempore cupiditate sit placeat molestias illo natus necessitatibus totam, tenetur, fuga ipsum sapiente quo repudiandae voluptatum cum a eligendi.</div>
		</div>
	</div>
</div>

<div class="main-flex-field-inverted-color">
	<div class="services-zone">
		<div class="item-service item-wrapper">
			<div class="item-service service-img img-2"></div>
			<div class="service-title">Замовлення спецодягу</div>
			<div class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique laudantium laboriosam tempore cupiditate sit placeat molestias illo natus necessitatibus totam, tenetur, fuga ipsum sapiente quo repudiandae voluptatum cum a eligendi.</div>
		</div>
	</div>
</div>

<div class="main-flex-field">
	<div class="services-zone">
		<div class="item-service item-wrapper">
			<div class="item-service service-img img-3"></div>
			<div class="service-title">Ремонт одягу</div>
			<div class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique laudantium laboriosam tempore cupiditate sit placeat molestias illo natus necessitatibus totam, tenetur, fuga ipsum sapiente quo repudiandae voluptatum cum a eligendi.</div>
		</div>
	</div>
</div>

<div class="main-flex-field-inverted-color">
	<div class="services-zone">
		<div class="item-service item-wrapper">
			<div class="service-title">Прейскурант</div>
			<div class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique laudantium laboriosam tempore cupiditate sit placeat molestias illo natus necessitatibus totam, tenetur, fuga ipsum sapiente quo repudiandae voluptatum cum a eligendi.</div>
			<div class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique laudantium laboriosam tempore cupiditate sit placeat molestias illo natus necessitatibus totam, tenetur, fuga ipsum sapiente quo repudiandae voluptatum cum a eligendi.</div>
			<div class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique laudantium laboriosam tempore cupiditate sit placeat molestias illo natus necessitatibus totam, tenetur, fuga ipsum sapiente quo repudiandae voluptatum cum a eligendi.</div>
		</div>
	</div>
</div>

<div class="order-service-field">
	<a class="link-service" href="/order_service">&nbsp;Замовити послугу&nbsp;</a>
</div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</html>