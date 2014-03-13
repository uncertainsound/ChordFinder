
<?php

//displays chord name and quality and chord notes

echo "<div id='result'>Chord Name: " . "$rootname[0]" . " " . "$quality" . "<br>";
echo "Chord Notes: ";
  for ($n = 0; $n < count ($chordnotes); $n++) {
        echo "$chordnotes[$n] ";  
    }

     echo "</div>";
   

//making a display
  //loop for 6 strings
  
  for ($n = 0; $n < 7; $n++) {
    $current_string = $n + 1;
  
   //loop for 11 frets and open
    for ($i = 0; $i < 12; $i++) {
      if (isset($array_of_arrays[$n][$i])) {
        $divid = $n . $i; 
	
	//putting the root of the chord on the fretboard
        if ($array_of_arrays[$n][$i] == $rt) {
          echo "<span id=\"dummy\"></span>";
          echo "<div style=background-color:#ff0000; id=\"d" . $divid . "\">";
          include 'sounds.php';
          echo "</div>";

	//putting the third of the chord on the fretboard
        }
        else if ($array_of_arrays[$n][$i] == $thrd) {
          echo "<span id=\"dummy\"></span>";
          echo "<div style=background-color:#679ed2; id=\"d" . $divid . "\">";
          include 'sounds.php';
          echo "</div>";

	//putting the fifth of the chord on the fretboard
        }
        else if ($array_of_arrays[$n][$i] == $fth) {
          echo "<span id=\"dummy\"></span>";
          echo "<div style=background-color:#00cc00; id=\"d" . $divid . "\">";
          include 'sounds.php';
          echo "</div>";

	//putting the seventh of the chord on the fretboard
        }
        else if ($array_of_arrays[$n][$i] == $svnth) {
          echo "<span id=\"dummy\"></span>";
          echo "<div style=background-color:#ffdf00; id=\"d" . $divid . "\">";  
          include 'sounds.php';
          echo "</div>";

	//putting the ninth of the chord on the fretboard
        }
        else if ($array_of_arrays[$n][$i] == $nnth) {
          echo "<span id=\"dummy\"></span>";
          echo "<div style=background-color:#ac3bd4; id=\"d" . $divid . "\">";
          include 'sounds.php';
          echo "</div>";

        }       
        echo "</div>\n";
      }
      else {
      }

    }

  }
 


?>