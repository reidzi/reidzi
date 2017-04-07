<body> 

<table cellspacing='0'> <!-- cellspacing='0' is important, must stay --> 


<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>WebM-ки </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <section id="main">
    <div class="container">

      <div class="row main_buttons">
      <div class="row">

<?php 
$dir = 'webm'; 
$files = scandir($dir); 
$skip = array('.', '..', 'index.php','style.css'); 
foreach($files as $file) { 
    if(!in_array($file, $skip)) 
        echo('

        	 <div class="col-md-2">


		<div class="row">
        <a href="http://reidzi.tk/webm/'.$file.'"><button id="cam3">'.$file.'</button></a>
        </div>
        </div>
        




        	'); 
} 
?> 

      </div>

    </div>
  </section>




    <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
              </div>
              <div class="modal-body">
               <div class="row">
                 
               </div>
              </div>
            </div>
          </div>
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script>
      $(document).ready(
          function() {
              $("html").niceScroll({cursorcolor:"#000"});
          }
      );
    </script>
  </body>
</html>





</body>