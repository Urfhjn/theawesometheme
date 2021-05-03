

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col">
	            <?php if(has_nav_menu('footer-col1')) : ?>
                    <?php wp_nav_menu( array( 'theme_location'  => 'footer-col1', ) ); ?>
	            <?php endif; ?>
            </div>
            <div class="col">
                <?php if(has_nav_menu('footer-col2')) : ?>
                    <?php wp_nav_menu( array( 'theme_location'  => 'footer-col2', ) ); ?>
                <?php endif; ?>
            </div>
            <div class="col">Copyright 2021. All Rights Reserved.</div>
        </div>
        <div class="row">
            <div class="col">
                Another menu here
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>
</html>
