<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>МАРПИ</title>

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

 <?php 
                $test_dir = "webm"; // Каталог с файлами 
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


                <?php 
                $count = $i; 
                for($i = 0; $i < $count; $i++) 
                { 

                   echo('

     <div id="movieClick" class="text-center winner"> 
<a href="#" data-toggle="modal" data-keyboard="true" data-target="#'.$names[$i].'">'.$names[$i].'</a>
    </div>
                           '); 
                } 
                ?> 

                <?php 
                $count = $i; 
                for($i = 0; $i < $count; $i++) 
                { 

                   echo('

<div id="'.$names[$i].'" class="modal fade" role="dialog" tabindex=\'-1\'>
    <div class="modal-dialog">

<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">They Live (1988)</h4>
    </div>
     <div class="modal-body">
        <iframe id="onscreen" width="100%" height="460px" src="" frameborder="0" allowfullscreen></iframe>

      </div>
</div>

</div>
</div>

                           '); 
                } 
                ?> 
         
    <script type="text/javascript">
$("#movieClick").click(function(){
var theLink  = "webm/14797669720703.webm";
document.getElementById("onscreen").src = theLink;
});


// really annoying to play in the Background...this disables the link
$("#movie").on('hidden.bs.modal', function (e) {
    $("#movie iframe").attr("src", '');
});
    </script>




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