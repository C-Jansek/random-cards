<?php

$cards = [
    'Elke overtreding van de verdedigende partij is een vrije bal.',
    'Er is geen verdedigd.',
    'Schieten na snijden is toegestaan'
];

function getRandomCard($cards)
{
    return $cards[array_rand($cards)];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random referee card</title>
</head>

<body>
    <h1><?php echo getRandomCard($cards) ?></h1>
</body>

</html>