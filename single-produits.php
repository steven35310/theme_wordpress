
<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

<?php the_field('produit_couleur'); ?>
<img src="<?php the_field('produit_image'); ?>"/>
<?php the_field('produit_sous-titre'); ?>
<?php the_field('produit_decription'); ?>
<?php the_field('produit_age'); ?>
<?php the_field('produit_personnalité'); ?>
<?php the_field('produit_difficulté'); ?>
<?php the_field('produit_prix'); ?>
<?php the_field('produit_stock'); ?>

<?php get_footer(); ?>