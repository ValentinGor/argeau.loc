<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Argeau
 */

get_header();
?>

    <script>
        window.location.href = '<?php echo get_home_url();?>';
    </script>

<?php
get_footer();
