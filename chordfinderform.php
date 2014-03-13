<!--Input form for chord finder-->

<div id="fretboard">   
</div>

<form action="chordfinder.php" method="GET">

<p id="root">Root:
<select name="root">
<option value="0">C</option> 
<option value="1">C#/Db</option>
<option value="2">D</option>
<option value="3">D#/Eb</option>
<option value="4">E</option>
<option value="5">F</option>
<option value="6">F#/Gb</option>
<option value="7">G</option>
<option value="8">G#/Ab</option>
<option value="9">A</option>
<option value="10">A#/Bb</option>
<option value="11">B</option>
</select>
</p>


<p id="quality">Quality:
<select name="quality">
<option value="maj">Major</option> 
<option value="min">Minor</option>
<option value="dim">Diminished</option>
<option value="aug">Augmented</option>
<option value="maj7">Major 7</option>
<option value="dom7">Dominant 7</option>
<option value="dom7b9">Dominant 7b9</option>
<option value="dom9">Dominant 9</option>
<option value="min7">Minor 7</option>
<option value="minmaj7">Minor/Major 7</option>
<option value="halfdim7">Half Diminished 7 (minor 7b5)</option>
<option value="dim7">Diminished 7</option>
</select>
</p>



<select name="string6" id="string6">
<option value="0">C</option> 
<option value="1">C#/Db</option>
<option value="2">D</option> 
<option value="3">D#/Eb</option>
<option value="4" selected="selected">E</option> 
<option value="5">F</option>
<option value="6">F#/Gb</option> 
<option value="7">G</option>
<option value="8">G#/Ab</option> 
<option value="9">A</option>
<option value="10">A#/Bb</option> 
<option value="11">B</option>
</select>

<select name="string5" id="string5">
<option value="0">C</option> 
<option value="1">C#/Db</option>
<option value="2">D</option> 
<option value="3">D#/Eb</option>
<option value="4">E</option> 
<option value="5">F</option>
<option value="6">F#/Gb</option> 
<option value="7">G</option>
<option value="8">G#/Ab</option> 
<option value="9" selected="selected">A</option>
<option value="10">A#/Bb</option> 
<option value="11">B</option>
</select>

<select name="string4" id="string4">
<option value="0">C</option> 
<option value="1">C#/Db</option>
<option value="2" selected="selected">D</option> 
<option value="3">D#/Eb</option>
<option value="4">E</option> 
<option value="5">F</option>
<option value="6">F#/Gb</option> 
<option value="7">G</option>
<option value="8">G#/Ab</option> 
<option value="9">A</option>
<option value="10">A#/Bb</option> 
<option value="11">B</option>
</select>

<select name="string3" id="string3">
<option value="0">C</option> 
<option value="1">C#/Db</option>
<option value="2">D</option> 
<option value="3">D#/Eb</option>
<option value="4">E</option> 
<option value="5">F</option>
<option value="6">F#/Gb</option> 
<option value="7" selected="selected">G</option>
<option value="8">G#/Ab</option> 
<option value="9">A</option>
<option value="10">A#/Bb</option> 
<option value="11">B</option>
</select>

<select name="string2" id="string2">
<option value="0">C</option> 
<option value="1">C#/Db</option>
<option value="2">D</option> 
<option value="3">D#/Eb</option>
<option value="4">E</option> 
<option value="5">F</option>
<option value="6">F#/Gb</option> 
<option value="7">G</option>
<option value="8">G#/Ab</option> 
<option value="9">A</option>
<option value="10">A#/Bb</option> 
<option value="11" selected="selected">B</option>
</select>

<select name="string1" id="string1">
<option value="0">C</option> 
<option value="1">C#/Db</option>
<option value="2">D</option> 
<option value="3">D#/Eb</option>
<option value="4" selected="selected">E</option> 
<option value="5">F</option>
<option value="6">F#/Gb</option> 
<option value="7">G</option>
<option value="8">G#/Ab</option> 
<option value="9">A</option>
<option value="10">A#/Bb</option> 
<option value="11">B</option>
</select>

<input type="submit" value="submit" name="submit" id="submit">
</form>


