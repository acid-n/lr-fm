<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Life Radio - Trance and Ambient music</title>
  <style>
   .center {
    width: 600px; /* Ширина элемента в пикселах */
    padding: 10px; /* Поля вокруг текста */
    margin: auto; /* Выравниваем по центру */
   }
   .col1 {
   width: 250px;
   }
   .col2 {
   
   }
  </style>
</head>
<body>
<div class="center">


<div style="text-align: center"><h1>Life Radio</h1></div>

<table>
<tr>
<td class="col1"><h2>Trance Life Radio</h2></td>
<td>link to player - <a href="http://lr-fm.com/trance192mp3.m3u">mp3</a> and <a href="http://lr-fm.com/trance.m3u">aac</a></td>
</tr>
</table>
<cite>Trance refers to an induced emotional feeling, high, euphoria, chills, and uplifting rush listeners experience. 
A characteristic of virtually all trance songs is the soft mid-song breakdown, beginning with and occurring after the orchestration
 is broken down and the rhythm tracks fade out rapidly, leaving the melody, atmospherics, or both to stand alone for anywhere from
  a few seconds to a few minutes. Another common characteristic would be the use of vocals often sung by a female voice ranging
   from mezzo-soprano to soprano. Less often, the female vocals may be in a grand, soaring, or operatic style, which has been described
    as "ethereal female leads floating amongst the synths"</cite> (wikipedia)

<table>
<tr>
<td class="col1"><h2>Ambient Life Radio</h2></td>
<td>link to player - <a href="http://lr-fm.com/ambient192mp3.m3u">mp3</a> and <a href="http://lr-fm.com/ambient.m3u">aac</a></td>
</tr>
</table>
<cite>Ambient music usually does not include the melodic and dynamic leaps usually found in popular music. As such, many ambient tracks
 qualify as drone music. As this in turn refers to tribal music worldwide, the ambient genre can be seen to be as a turn toward traditional
  folk music, at least in spirit.
"Ambient Music must be able to accommodate many levels of listening attention without enforcing one in particular; it must be as ignorable
 as it is interesting." As a genre it originated in the United Kingdom at a time when new sound-making devices such as the synthesizer,
  were being introduced to a wider market. Brian Eno was an early pioneer of ambient music. The Orb and Aphex Twin gained commercial success
   with ambient tracks. Ambient compositions are often quite lengthy, much longer than more popular, commercial forms of music. Some pieces can
    reach a half an hour or more in length.</cite> (wikipedia)


<br />
<br />
<br />
Download all the sets - <a href="http://trance-life.ru" target="_blank">trance-life.ru</a>


<br />
<br />
<br />
<div style="text-align: center">&copy; 2013 <a href="http://lr-fm.com">Life Radio</a></div>

<?php
$fl = file_get_contents('http://lr-fm.com:8000/trance');

if (preg_match('#<td>Current Song:</td><td class="streamdata">(.*)</td>#Ui',$fl,$m)) {
$song = $m[1];
echo "<b>Сейчас играет:</b> {$song}<br \>";
} else {
echo "<b>Сейчас играет:</b> Нет потока<br \>";
}

if (preg_match('#<td>Stream URL\:<\/td><td class=\"streamdata\">(.*)<\/td>#Ui',$fl,$m)) {
$format = $m[1];
echo "<b>Формат потока:</b> {$format}<br \>";
} else {
echo "<b>Формат потока:</b> Нет потока<br \>";
}  

if (preg_match('#<td>Content Type\:<\/td><td class=\"streamdata\">(.*)<\/td>#Ui',$fl,$m)) {
$url = $m[1];
echo "<b>Сайт радио:</b> {$url}<br \>";
} else {
echo "<b>Сайт радио:</b> Нет потока<br \>";
}

if (preg_match('#<td>Current Listeners:</td><td class=\"streamdata\">([\d]*)<\/td>#Ui',$fl,$m)) {
$listeners = $m[1];
echo "<b>Cлушателей:</b> {$listeners}<br \>";
} else {
echo "<b>Cлушателей:</b> Нет потока<br \>";
}
?>

</div>
</body>
</html>