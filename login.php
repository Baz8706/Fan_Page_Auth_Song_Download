<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<link rel='stylesheet' type='text/css' href='MD.css'>
<title>Ed Sheeran</title>
</head>
<body>
<header>
<img src="ID.png" alt="ID"></br>
</header>
<br />
<div>
<p>Edward Christopher "Ed" Sheeran (born 17 February 1991) is an English singer-songwriter, musician, and occasional actor.</p>
<p> He was born in Hebden Bridge in Yorkshire and raised in Framlingham, Suffolk.</p> 
<p>He dropped out of school at 16, and moved to London the following year, in 2008, to pursue a career in music.</p>
<p>In early 2011, Sheeran independently released the extended play, No. 5 Collaborations Project, which caught the attention of Elton John and Jamie Foxx. After signing with Asylum Records, his debut album, + (read as "plus"), was released on 9 September 2011 and has since been certified six-times platinum in the UK.</p>
<p>The album contains the single "The A Team", which earned him the Ivor Novello Award for Best Song Musically and Lyrically.</p>
<p>Sheeran won the Brit Awards for Best British Male Solo Artist and British Breakthrough Act.</p> 

<p><a href="https://en.wikipedia.org/wiki/Ed_Sheeran">Wiki</a></p>
<br />
<br />
<br />
</div>
<?php
$id = $_GET[id];
echo "<fieldset>";
echo "<legend>Login to authorise your purchase</legend>";
echo"<form  method='post' action='dpage.php' >";
echo"<input type='text' name='user' value='user' required/>";
echo"<input type='password' name='pass' value='pass' required/>";
echo"<input type='submit' name='submit' value='Go!'/>";
echo "<input type='hidden' name='id' value='$id'/>";
echo"</form>";
echo "</fieldset>";
?>
<div class="NV">
<p>X</p>
<a href="http://store.hmv.com/music/cd/x-(3)"><img src="NV.jpeg" alt="X"></a>
</div>

<div class="SM">
<p>+</p>
<a href="http://store.hmv.com/music/cd/-"><img src="SM.jpg" alt="+"></a>

<footer>

</footer>
</body>
</html>