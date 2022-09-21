<?php


$text = 'Harry Potter era un ragazzo insolito sotto molti punti di vista. Prima di
        tutto, odiava le vacanze estive più di qualunque altro periodo dell\'anno. Poi
        voleva davvero fare i compiti, ma era costretto a studiare di nascosto, nel
        cuore della notte. E per giunta era un mago. Era quasi mezzanotte, e Harry era 
        steso sul letto a pancia in giù, le coperte tirate sulla testa come una tenda, 
        una torcia in mano e un grosso libro rilegato in pelle ( Storia della magia, 
        di Adalbert Incant ) aperto e appoggiato al cuscino.';

$length = strlen($text);

$word = $_GET['word'];

$textReplace = str_replace($word, '***', $text);
$newLength = strlen($textReplace);

?>

<h1>Paragrafo non modificato</h1>
<h3><?= $text ?></h3>
<h4>Il paragrafo è lungo <?= $length ?> caratteri</h4>

<br>

<h1>Nuovo paragrafo</h1>
<h3><?= $textReplace ?></h3>
<h4>Il nuobo paragrafo è lungo <?= $newLength ?> caratteri</h4>





