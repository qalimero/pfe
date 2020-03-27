<?php get_header();
?>

<section class="main__content">

    <div class="blocStudentIntro">

        <div class="blocStudentIntro__pic">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/portrait.png">
        </div>

        <div class="blocStudentIntro__text">
            <span class="name">Jane Doe</span>
            <span class="location">Bordeaux, FR</span>
        </div>

        <div class="blocStudentIntro__btn">
            <button class="cv">CV</button>
        </div>

    </div>

    <div class="blocStudentManage">

        <div class="blocStudentManage__postul">
            <button class="btn-offrePostule"  onclick="window.location.href = 'http://localhost/wordpress-projet-studio/wordpress/2020/02/07/offres-demplois/'">
                <span>140</span>offres postulées
            </button>
        </div>

        <div class="blocStudentManage__like">
            <button class="btn_offreLike">
                <span>120</span>offres aimées
            </button>
        </div>

        <div class="blocStudentManage__calendar">
            <button class="btn_calendar">
                <span><img src="<?php echo get_stylesheet_directory_uri();?>/assets/iconSVG/messages.svg"></span>
            </button>
        </div>
    </div>

    <div class="blocStudentSkill">
        <h2>skills</h2>
        <div class="blocStudentSkill__item">
            <ul>
                <li>web</li>
                <li>illustration</li>
                <li>graphics</li>
                <li>ui</li>
                <li>interface</li>
                <li>adobe</li>
            </ul>
        </div>
    </div>

    <div class="blocStudentProjects">
        <h2>Projets <span>+25</span></h2>
        <div class="blocStudentProjects__picture">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/paysage.jpg">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/paysage2.jpg">
        </div>
    </div>

</section>

<?php get_footer(); ?>
