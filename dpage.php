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
$ID = $_POST[id];
$user = $_POST[user];
$pass = $_POST[pass];

$connection = curl_init();
curl_setopt($connection, CURLOPT_URL, "http://edward2.solent.ac.uk/~dcooper/ed/increase.php");
$dataToPost = array
("ID" => "$ID");
curl_setopt($connection,CURLOPT_USERPWD,"$user:$pass");
curl_setopt($connection,CURLOPT_RETURNTRANSFER,1);
curl_setopt($connection, CURLOPT_POSTFIELDS, $dataToPost);
$response = curl_exec($connection);


$httpCode = curl_getinfo($connection, CURLINFO_HTTP_CODE);

curl_close($connection);


// "You have successfully bought your selected song."
IF ($httpCode == 200)
{
	echo "<p>Download</p>";
	echo "<p><img src='thanks.gif' alt='Lets Dance!'></p>";
	echo "<p>Thank you for your purchase of track $ID, $user.</p>";
	echo "<p><a href='ed.php'>Go Back</a></p>";
}
ELSE IF ($httpCode == 402)
{
	echo "<p>Download</p>";
	echo "<p>You don't have enough money to buy this track.</p>";
	echo "<p><a href='ed.php'>Go Back</a></p>";
}
ELSE IF ($httpCode == 400)
{
	echo"<p>Ooops, there's no song without an ID!</p>";
	echo"<p><img src='QM.png' alt='QM'></p>";
	echo "<p><a href='ed.php'>Go Back</a></p>";
	
}
ELSE IF ($httpCode == 204)
{
	echo "<p>Erm, I don't think a song with that ID exists!</p>";
	echo "<p><img src='NR.png' alt='NR'></p>";
	echo "<p><a href='ed.php'>Go Back</a></p>";
}
ELSE IF ($httpCode = 401)
{
	echo "<p><img src='401.png' alt='401 Thou Shalt Not Pass!'></p>";
	echo "<p>If you entered the wrong details try again.</p>";
	echo "<p><a href='ed.php'>Go Back</a></p>";
}
?>
<div class="NV">
<p>X</p>
<a href="http://store.hmv.com/music/cd/x-(3)"><img src="NV.jpeg" alt="X"></a>
</div>

<div class="SM">
<p>+</p>
<a href="http://store.hmv.com/music/cd/-"><img src="SM.jpg" alt="+"></a>
</div>
<div class="tbl">

<footer>

</footer>
</body>
</html>