<HTML>
<head>

<script language="javascript" type="text/javascript">
function playSound(soundfile) {
  document.getElementById("dummy").innerHTML=
    "<embed src=\""+soundfile+"\" hidden=\"true\" autostart=\"true\" loop=\"false\" />";
}
</script>



</HEAD>


<body>



<span id="dummy"></span>
<p><a href="#" onclick="playSound('c.mp3');">Click here to hear a bird sing</a></p>

<p onmouseover="playSound('c.mp3');">Or you can put your mouse over this paragraph to hear the same bird sound.</p>

<p>Return to <a href="">How to Play a Sound on Click or on MouseOver</a> article.</p>


</body></html>