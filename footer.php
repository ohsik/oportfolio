    <!-- Footer
    -------------------------------------------------------->
    <footer class="f-div bg-grey">
        <div class="bodywrap">

            <!--Footer Widget-->
            <div class="row group"> 
                <div class="grid12">
                    <!--If Footer widget area has widget show Footer Widget-->
                    <?php if ( is_active_sidebar('sidebar-2') ) : ?>
                    <?php get_sidebar('footer'); ?>
                    <?php endif; ?>
                    <p>© 2015 / <a href="mailto:o@ohsikpark.com">o@ohsikpark.com</a></p>
                </div>
            </div>

        </div>
    </footer>
    
<p class="back-to-top">Back to Top</p>

<?php wp_footer(); ?>

</body>
</html>