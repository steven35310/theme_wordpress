<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title><?php the_title(); ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

<nav>
    <div id="gauche">
    <p>P</p>
    <ul>
        <a href="#"><li>Accueil</li></a>
        <a href="#"><li>Catalogue</li></a>
        <a href="#"><li>A propos</li></a>
    </ul>
    </div>
    <div id="droite">
    <i class="fa-solid fa-cart-arrow-down"></i>
    <i class="fa-solid fa-user"></i>
    </div>
</nav>