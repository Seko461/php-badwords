<?php

//var_dump(empty($_GET['word']));

$word = $_GET['word'];

//var_dump(empty($_GET['sentence']));

$sentence = $_GET['sentence'];


// echo $word;
// echo '<br>';
// echo '<hr>';
// echo $sentence;
// echo '<br>';
// echo strlen($sentence);
// echo '<br>';
// echo '<hr>';


$newSentence = str_replace($word, '***', $sentence);

// echo $newSentence;
// echo '<br>';
// echo strlen($newSentence);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badword moderated</title>
</head>
<body>
    <h1>Word </h1>
    <h3><?= $word?></h3>
    <h1>Sentence</h1>
    <h3><?= $sentence?></h3>
<p>length: <?= strlen($sentence)?></p>
 <h1>Moderated Sentence</h1>
    <h3><?= $newSentence?></h3>
<p>length: <?= strlen($newSentence)?></p>

</body>
</html>