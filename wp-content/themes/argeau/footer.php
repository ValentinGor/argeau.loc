<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Argeau
 */

?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__info">
                    <div class="footer__info_text">
                        <div class="footer__info_text-mail">
                            <a href="mailto:<?php the_field( 'footer_email', 'option' ); ?>">
								<?php the_field( 'footer_email', 'option' ); ?>
                            </a>
                        </div>
                        <div class="footer__info_text-addr">
	                        <?php the_field( 'footer_address', 'option' ); ?>
                        </div>
                        <div class="footer__info_text-post">
                            <p><?php the_field( 'footer_text', 'option' ); ?></p>
                        </div>
                    </div>
                    <div class="footer__info_link">
                        <div class="footer__info_link-logo">
                            <a href="<?php echo get_home_url();?>">
                                <img src="<?php the_field( 'footer_logo', 'option' ); ?>" alt="img">
                            </a>
                        </div>
                        <div class="footer__info_link-link">
                            <a href="<?php the_field( 'linkedin_link', 'option' ); ?>" target="_blank">
                                <img src="<?php the_field( 'linkedin_icon', 'option' ); ?>" alt="img">
                            </a>
                            <a href="mailto:<?php the_field( 'mail_link', 'option' ); ?>">
                                <img src="<?php the_field( 'mail_icon', 'option' ); ?>" alt="img">
                            </a>
                            <a href="tel:<?php the_field( 'phone_text', 'option' ); ?>">
                                <img src="<?php the_field( 'phone_icon', 'option' ); ?>" alt="img">
                            </a>
                        </div>
                        <div class="footer__info_link-copy">
	                        <?php the_field( 'copyright_text', 'option' ); ?> <?php echo date('Y');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<script><?php the_field( 'footer_script', 'option' ); ?></script>
</body>
</html>
