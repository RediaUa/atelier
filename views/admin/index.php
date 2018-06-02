<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
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
            padding: 1%;
            background-color: #392742;
            color: #f3f0f4;
        }
        .link-service, .link-service:link, .link-service:visited, .link-service:active, .link-service:hover { 
            text-decoration: none;
            color: black;
            cursor: pointer;
            font-size: 19pt; 
            width: 300px;
            height: 60px;
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
    </style>
    <title>Document</title>
</head>
<body>
<div class="main-flex-field">
	<a class="link-service" href="/admin/catalog">Управління товарами</a>
	<a class="link-service" href="/admin/services">Замовлення</a>
	<a class="link-service" href="/">На головну</a>
</div>
</body>
</html>