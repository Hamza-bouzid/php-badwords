<?php
$da_censurare = $_GET['censura'];

$stringa = "Lorem ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più di cinque secoli, ma anche al passaggio alla videoimpaginazione, pervenendoci sostanzialmente inalterato. Fu reso popolare, negli anni ’60, con la diffusione dei fogli di caratteri trasferibili “Letraset”, che contenevano passaggi del Lorem ipsum, e più recentemente da software di impaginazione come Aldus PageMaker, che includeva versioni del Lorem ipsum.";


$parola = str_ireplace($da_censurare, '***', $stringa);


?>

<p style="width: 900px;"><?php echo $stringa ?></p>
<p>Lunghezza: <?php echo strlen($stringa) ?></p>
<p style="width: 900px;"><?php echo $parola ?></p>
<p>Lunghezza: <?php echo strlen($parola) ?></p>