<?php
session_start();
$imageOne = $rwsi['imageOne'];
$imageTwo = $rwsi['imageTwo'];
$imageThree = $rwsi['imageThree'];
$imageFour = $rwsi['imageFour'];
$imageFive = $rwsi['imageFive'];
$imageSix = $rwsi['imageSix'];
$imageSeven = $rwsi['imageSeven'];
$imageEight = $rwsi['imageEight'];
$imageNine = $rwsi['imageNine'];
$imageTen = $rwsi['imageTen'];

$imageMain = $rws['image'];

if(empty($imageOne)) {
    $imageOne = 'default.jpg';
}

if(empty($imageTwo)) {
    $imageTwo = 'default.jpg';
}

if(empty($imageThree)) {
    $imageThree = 'default.jpg';
}

if(empty($imageFour)) {
    $imageFour = 'default.jpg';
}

if(empty($imageFive)) {
    $imageFive = 'default.jpg';
}

if(empty($imageSix)) {
    $imageSix = 'default.jpg';
}

if(empty($imageSeven)) {
    $imageSeven = 'default.jpg';
}

if(empty($imageEight)) {
    $imageEight = 'default.jpg';
}

if(empty($imageNine)) {
    $imageNine = 'default.jpg';
}

if(empty($imageTen)) {
    $imageTen = 'default.jpg';
}

if(empty($imageMain)) {
    $imageMain = 'default.jpg';
}


?>