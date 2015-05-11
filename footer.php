</div>

<div class="footer">
    <span> &copy; Kinga Mila <?php echo date("Y"); ?> </span>
</div>

<?php
if( !current_user_can('manage_options') ) { echo get_theme_mod( 'solofolio_tracking' ); }
wp_footer();
?>

</body>
</html>
