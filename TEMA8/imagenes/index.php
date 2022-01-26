<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="title-search-bar">
        <h1>Giphy API</h1>
        <div id="buttons"></div>
        <div class="search-bar">
            <input type="text" name="query" id="user-search" />
            <input id="submit" type="button" value="Submit" class="btn  btn-sm btn-success" />
            <input type="button" class="trending btn btn-sm btn-danger" value="See what's trending" />
        </div>
    </div>
    <hr>
    <div id="results"></div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script  src="./script.js"></script>

</body>
</html>
