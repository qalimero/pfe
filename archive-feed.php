<?php
/*
Template Name: Page d'archives liste offre
*/
?>
<?php get_header(); ?>

    <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?> Liste offres</a></h2>





<?php
if ( have_posts() ) :
    ?>
    <?php
    /* Start the Loop */
    while ( have_posts() ) :
        the_post();
    ?>

        <section class="blocOfferFeed">

            <div class="blocOfferFeed__owner">

                <div class="blocOfferFeed__pic">
                    <img src="assets/portrait.scaled.jpg">
                </div>

                <div class="blocOfferFeed__text">
                    <span class="name">Jane entreprise</span>
                    <span class="location">Bordeaux, FR</span>
                </div>
            </div>

            <div class="blocOfferFeed__article">
                <h2 class="titleOffer">Intégrateur Web en alternance toto : </h2>
                <p class="blocOfferFeedContent">onepoint est un créateur de solutions de transformation                                 numérique pour les entreprises.
                    Au sein de notre pôle mobile, vous travaillerez sur des projets de                     développement d’applications mobiles au contact des clients et des équipes            agiles, coach agile, Scrum Masters, PO, UX, UI, et d’autres développeurs. Au sein de notre pôle mobile, vous travaillerez sur des projets de                     développement d’applications mobiles au contact des clients et des équipes            agiles, coach agile, Scrum Masters, PO, UX, UI, et d’autres développeurs
                </p>

                <button class="blocOfferFeedContentButton" type="button"> en savoir plus...</button>
            </div>


        </section>

    <?php

    endwhile;

    the_posts_pagination(
        array(
            'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
            'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
        )
    );

else :

    get_template_part( 'template-parts/post/content', 'none' );

endif;
?>


<?php

$cats = get_categories();
foreach ($cats as $cat) {

    query_posts('showposts=1000&cat='.$cat->cat_ID);

    ?>
    <h2><?php echo $cat->cat_name; ?></h2>

    <ul>
        <?php while (have_posts()) : the_post(); ?>
            <li style="font-weight:normal !important;"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> - Commentaires (<?php echo $post->comment_count ?>)</li>
        <?php endwhile;  ?>
    </ul>

<?php } ?>
<?php get_footer(); ?>