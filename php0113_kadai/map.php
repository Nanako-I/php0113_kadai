<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>学校を選択</title>
<h1>学校を選択</h1>
<button type="button">選択</button>

<!-- <script>    </script> -->
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- <style>div{padding: 10px;font-size:16px;}</style> -->
<style>
        html{
  height: 100%;
}
body {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
}

.map_app{
  /* display: flex; */
  height: 100%;
}

#myMap{
  /* display: inline-block; */
  /* text-align: left; */
  width: 80%;
  height: 100%;
}
        div {
            padding: 10px;
            font-size: 16px;
        }

        .navbar-default{
  background-color: #008080;

}

       .jumbotron{
        display: none;
       }
    </style>

</head>
<body id="main">
<!-- Head[Start] -->
<!-- <header>
  <nav class="navbar navbar-default">
    <div class="container-fluid"> -->
      <!-- <div class="navbar-header"> -->
      <!-- <a class="navbar-brand" href="index.php">データ登録</a> -->
      <!-- </div>
    </div>
  </nav>
</header> -->
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- <div> -->
  <!-- $view←ここに取得したnameが全部入ってくる -->
  
<!-- </div> --> -->
<!-- Main[End] -->
    <!-- Main[End] -->
    <div class="map_app">

  
    <div id="myMap"></div>
    
      <!-- jQuery&GoogleMapsAPI -->
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src='https://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=' async
    defer></script>
  <!-- <script src="BmapQuery.php"></script>
  <script src="map.php"></script> -->
  <script src="js/BmapQuery.js"></script>
  <script src="js/map.js"></script>
  <script>
  $("button").on("click", function() {
    location.href= "login.php";
  });
  </script>
</body>
</html>
