<?php get_header(); ?>

<header style="background-color: <?php the_field('front_page__header_couleur') ?>">
<div id="texte_header">
    <h1>
        <?php the_field('front_page__header_title') ?>
    </h1>
    <p><?php the_field('front_page__header_description') ?></p>
    <input placeholder="<?php the_field('front_page__header_hover') ?>" />
</div>
</header>

<h2> <?php the_field('front-page__header_best') ?></h2>


<section>
    <?php
    $args = array(
        'post_type' => 'produits',
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'DESC',
    );
    ?>

    <?php $the_query = new WP_Query($args); ?>

    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <div class="<?php the_field('produit_couleur'); ?>">
                <h3> <?php the_title(); ?></h3>

                <?php the_field('produit_couleur'); ?>
                <?php the_field('produit_image'); ?>
                <?php the_field('produit_sous-titre'); ?>
                <?php the_field('produit_decription'); ?>
                <?php the_field('produit_age'); ?>
                <?php the_field('produit_personnalité'); ?>
                <?php the_field('produit_difficulté'); ?>
                <?php the_field('produit_prix'); ?>
                <?php the_field('produit_stock'); ?>
                <?php the_field('jvhj'); ?>

            </div>

        <?php endwhile; ?>
    <?php endif; ?>

</section>

<section>

    <h2><?php the_field('titre_section'); ?></h2>

   
    <?php if (have_rows('pasteque')) : ?>
        <?php while (the_repeater_field('pasteque')) : ?>


            <?php the_sub_field('titre'); ?>


        <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>

</section>







<?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>