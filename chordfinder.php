<html>

<head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="chordfinder.css">


<script language="javascript" type="text/javascript">
 function playSound(soundfile) {
 document.getElementById("dummy").innerHTML=
 "<embed src=\""+soundfile+"\" hidden=\"true\" autostart=\"true\" loop=\"false\" />";
 }
</script>



</head>

<body>


<?php

//including main input form
  include 'chordfinderform.php';
    
 
//if form has been submitted:
if (isset($_GET['submit'])) {

  //must include in this order
    include 'chordfinderfunctions.php';
    include 'chordfinderprocess.php';
    include 'chordfinderdisplay.php';
    include 'chordfinderkey.php';

//end of if (isset($_GET['submit']))  
}


?>


</body>

</html>
