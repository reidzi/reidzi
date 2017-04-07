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
  <script type="text/javascript">
$(function(){
    $('#myModal').modal({
        show: false
    });

    $('#myModal').on('hidden', function () {
        window.alert('hidden event fired!');
    });
});
    </script>
<script type="text/javascript">

$('#myModal').on('hidden.bs.modal', function () {
   var video = document.getElementById("Video1");  
    video.pause();
})
</script>



<div class="col-md-2">

                                     <div class="row">
            <button id="cam3" data-toggle="modal" href="#myModal">14640035438100.webm</button>
          </div>

                                     
                                    </div>

      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body text-center">
               <div class="row">



        <video id="Video1" class="video" width="400px" height="200" controls value="webm/14640035438100.webm">
            <source src="webm/14640035438100.webm" type="video/webm">
          </video>
          
               </div>
  
              </div>
            </div>
          </div>
        </div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>

  </body>
</html>

<!-- src="webm/14640035438100.webm" -->