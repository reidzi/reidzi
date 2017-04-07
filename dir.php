<!DOCTYPE html>
<html lang="ru">
<head>
  <title>WebM-ки</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
<?php 
$test_dir = "webm";
$dir = dir($test_dir); 
$i = 0; 
$names = ""; 
while ($entry = $dir->read()) 
{ 
  if(($entry != "..") && ($entry != ".")) 
  { 
      $p = strcspn($entry,"."); 
      $nameslong[$i] = $entry;
      $names[$i] = substr($entry,0,"$p"); 
      $i++; 
  } 
} 
$dir->close(); 
?> 
<section id="main">
  <div class="container">
    <div class="row main_buttons">
      <?php 
      $count = $i; 
      for($i = 0; $i < $count; $i++) 
      { 
      echo('
<script type="text/javascript">

  });
  $(\'body\').on(\'hidden.bs.modal\', \'#'.$names[$i].'\', function (e) {
    var video = document.getElementById("id'.$names[$i].'");  
    video.pause();
  });
</script>
  <div class="col-lg-2 col-sm-4 col-xs-6">
    <div class="row">
      <button id="cam3" data-toggle="modal" href="#'.$names[$i].'">'.$nameslong[$i].'</button>
    </div>
  </div>

<div class="modal fade text-center" id="'.$names[$i].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" id="webm">
    <div class="modal-content">
      <div class="modal-body text-center">
        <div class="row">
          <video id="id'.$names[$i].'" class="video" width="95%" height="95%" controls src="webm/'.$nameslong[$i].'" type="video/webm">
          </video>     
        </div>
      </div>
    </div>
  </div>
</div>
      '); 
    } 
  ?> 

    </div>
  </div>
</section>
</body>
</html>
