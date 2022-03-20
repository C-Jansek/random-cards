<?php
$cards = [
    'Elke overtreding van de verdedigende partij is een vrije bal.',
    'Er is geen verdedigd.',
    'Schieten na snijden is toegestaan'
];

$selectedCard = $cards[array_rand($cards)];
?>

<h1><?php echo $selectedCard ?></h1>