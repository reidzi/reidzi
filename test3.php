<!-- <?php 
			$dir = 'webm'; 
			$files = scandir($dir); 
			$skip = array('.', '..', 'index.php','style.css'); 
			foreach($files as $file) { 
			    if(!in_array($file, $skip)) 
			    	// $fileshort = preg_replace("/^(.*)\.[\w]{1,3}$/", "$1", $file);
			        echo "$file<br>"; 
			        // echo "$fileshort<br>";
			} 
			?> 

 -->

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
############### Выводинформации в браузер ############### 
$count = $i; 
print "Список файлов без расширений:<br>"; 
for($i = 0; $i < $count; $i++) 
{ 

	 echo('
			        	 <div class="col-md-2">
							<div class="row">
			        			<a href="#get_'.$nameslong[$i].'"><button id="cam3">'.$names[$i].'</button></a>
			       			 </div>
			        	</div>
			        	'); 

   // print $names[$i]."<br>"; 
   //  print $nameslong[$i]."<br>"; 
} 
########################################################## 
?> 