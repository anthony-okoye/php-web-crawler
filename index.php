<?php
include_once('simple_html_dom.php');
@$name = $_POST['search'];
?>
<html>
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<!-- INLINE CSS STYLE FOR THE APP -->
<style>
  html, body {
    background-color: #6610f2;
  }
  .sub-form{
    margin:50px auto;
    text-align:center;
    padding: 50px 130px;
  }
  .btn-sty{
    margin-top:20px;
  }
  a{
    color:#fff;
  }
  .color-white{
    color:#fff;
    font-size:2em;
  }
  input{
    text-align:center;
  }
  ::-webkit-input-placeholder {
  text-align: center;
}

:-moz-placeholder {
  text-align: center;
}
</style>
<body>
 <!-- FORM FOR SEARCH PARAMETER --> 
<form method="post" class="sub-form">
  <div class="form-group">
    <label for="exampleInputEmail1" class="color-white">Search Movie</label>
    <input type="text" name="search" class="form-control" id="exampleInputEmail1" placeholder="Movie Name">
  </div>
  
  <button type="submit" class="btn btn-primary btn-sty">Submit</button>
</form>
<a href="https://google.com"></a>
<?php

// Create DOM from URL or file
$html = file_get_html('https://yts.mx/browse-movies/"'.$name.'"');

// Find all links
foreach($html->find('a[class=browse-movie-title]') as $anchor)
       echo '<a href="'.$anchor->href .'" style="display:block;text-align:center;">'.$anchor->href.'</a>' .'<br>';

?>

</body>
</html>
