
	<?php include 'db.connect'; ?>


<!DOCTYPE html>
<html lang="he">
<head>

 <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css.css"/>
  <link rel="stylesheet" type="text/css" href="other.css"/>
 
	<meta charset="UTF-8">

<meta http-equiv="content-type" content="text/html; charset=windows-1255">  
	<title>Music</title>
</head>
<body>




<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">

    <ul class="nav navbar-nav">
   
      <li class="active"><a href="#">Add Album +</a></li>
       <li >
     <form action="">
        <input type="text" class="form-control" placeholder="Search Album">
        <input type="submit" hidden>
      </form>
      </li>

      
    </ul>
      </div>


 
    
  
</nav>









<div class="container">
 

<BR><BR><BR> <BR><BR><BR> <BR><BR><BR> 
<!-- <BR><BR><BR>  -->









<!-- <nav class="navbar navbar-fixed-top"> -->
  <!-- <div class="container-fluid"> -->

    <ul class="nav navbar-nav">
   
    
    </ul>
<BR><BR><BR>  
   



<button id="popupBtn1">Add Play List 1</button>
<button id="popupBtn2">Add Play Listn2</button>





<div id="playContainer" class="container ">
<div class="row centered" id="player_row" >


  <div class="col-xs-6   col-md-4   " >
    
    <img src="img/disk.png" alt="" id="diskSpin"  >
    <!-- <img src="img/disk.png" alt="" id="diskSpin" class="diskSpin"> -->
  </div>


  <div class="col-xs-4 col-md-4  " id="audioContainer">
    <audio controls ></audio>

 
  <!-- <audio controls autoplay src="http://open-all.co/songsforprj/ElectroFingers.wav"></audio> -->

<div id="songslist">

    <?php 

// $_GET['album']= '';
$get_albume = $_GET['album'];


// $get_song_url = $row['song_url'];

$resultb = DB::getconnection()->query("SELECT 
   name_song, song_url, album_name
  FROM songs 
  WHERE album_name = '$get_albume'
  ");

  while ($row = $resultb->fetch_assoc()) {

echo "<button class='songNameBtn css_btn_class' data-src='"
. $row['song_url'] .
"'> " . $row['name_song']  ;
echo "</button>";


        }

 ?>

</div>
<?php echo  "<p>"  . $get_albume . " - Is Playing Now </p>"; ?>
 </div>




</div>

    <div class="btnDelete   " >
    
    <img src="img/btn.png" alt="" >
    <img src="img/btn.png" alt="" >
  </div>
 
</div>

  
    
  <!-- </div> -->
<!-- </nav> -->








<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>


<main>

<div class="row" id="row"  >
  <div class="col-xs-12   col-md-12" >



<?php 

 
        // $result = DB::getconnection()->query("SELECT  id,name,image, songs FROM playlists ");
          $result = DB::getconnection()->query("SELECT  name FROM albums ");
      

        while ($row = $result->fetch_assoc()) {
      // echo $row['name'];
 
      echo "<div class='albumShow'> <a href='?album="    . $row['name']  . "'>    " ; 
echo "<h3 class='roundtxt'>" . $row['name'] . "</h3>";
  
echo "<img src='img/disk.png' alt='' >";
        // foreach ($row as $key => $value) {

       // echo " $key: $value  ";

        // }

        echo " </a> </div>";
        // echo "<br>";
        }
         ?>


 

  </div>
</div>



 

<!-- <BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR> -->



		<div class="row" id="main_row"></div>

	</main>


	</div>

	<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="plugins.js"></script>		
	<script type="text/javascript" src="circletype.js"></script>	
  <script type="text/javascript" src="Popup.js"></script>
    <script type="text/javascript" src="ColoredPopup.js"></script>
	<script type="text/javascript" src="main.js"></script>

</body>
</html>



<!--
<div class="row" id="row"  >
  <div class="col-xs-4 col-md-4" >
  </div>
  <div class="col-xs-6 col-md-6">
  </div>
  <div class="col-xs-2 col-md-2" >
  </div>
</div>
-->