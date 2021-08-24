</main>
<footer id="main-footer"  class="segment">
    <nav class="footer-nav">

    <?php wp_nav_menu( 
        array(
            'theme_location' => 'footer', 
            'container' => 'ul', 
            'menu_class' => 'nav-footer-wrapper',
            )
    ); ?>

    </nav>
</footer>
<?php wp_footer();?>
</body>
</html>
