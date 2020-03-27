<?php get_header();

?>
<body class="grey-background">

<header class="headerWrapper">
    <div class="headerWrapper__title">
        <h1 class="returnProfil"> offers feed</h1>
    </div>
</header>

<section class="blocOfferFeed">

    <div class="blocOfferFeed__owner">

        <div class="blocOfferFeed__pic">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/portrait.png">

        </div>

        <div class="blocOfferFeed__text">
            <span class="name">Jane entreprise</span>
            <span class="location">Bordeaux, FR</span>
        </div>
    </div>

    <div class="blocOfferFeed__article">
        <h2 class="titleOffer">Intégrateur Web en alternance : </h2>
        <p class="blocOfferFeedContent">onepoint est un créateur de solutions de transformation                                 numérique pour les entreprises.
            Au sein de notre pôle mobile, vous travaillerez sur des projets de                     développement d’applications mobiles au contact des clients et des équipes            agiles, coach agile, Scrum Masters, PO, UX, UI, et d’autres développeurs. Au sein de notre pôle mobile, vous travaillerez sur des projets de                     développement d’applications mobiles au contact des clients et des équipes            agiles, coach agile, Scrum Masters, PO, UX, UI, et d’autres développeurs
        </p>

        <button class="blocOfferFeedContentButton" type="button"> en savoir plus...</button>
    </div>


</section>

<?php get_footer(); ?>



