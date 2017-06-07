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
<table>
		<tr>
			<th>SongID</th>
			<th>Title</th>
			<th>Artist</th>
			<th>Date</th>
			<th>ChartPos</th>
			<th>Likes</th>
			<th>Downloads</th>
<?php

$connection = curl_init();
curl_setopt($connection, CURLOPT_URL, "http://edward2.solent.ac.uk/~dcooper/hittasticjson.php?artist=Ed+Sheeran");
curl_setopt($connection,CURLOPT_RETURNTRANSFER,1);
$response = curl_exec($connection);
curl_close($connection);

$data = json_decode($response, true);
for ($i=0; $i<count($data); $i++)

{
echo 
   
	
		"</tr>".
			"<td>".$data[$i]["songid"]."</td>".
			"<td>".$data[$i]["title"]."</td>".
			"<td>".$data[$i]["artist"]."</td>".
			"<td>".$data[$i]["day"]." ".$data[$i]["month"]." ".$data[$i]["year"] ."</td>".
			"<td>".$data[$i]["chart"]."</td>".
			"<td>".$data[$i]["likes"]."</td>".
			"<td>".$data[$i]["downloads"]."</td>".
			"<td><a href='login.php?id=".$data[$i]["songid"]."'>Download</a></td>".
		"</tr>";
	
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

</table>
</div>
<footer>

</footer>
</body>
</html>