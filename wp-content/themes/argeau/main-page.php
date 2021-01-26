<?php
/*
Template Name: Main Page
Template Post Type: page
*/
?>
<?php get_header(); ?>

<section>
    <div class="first"
         style="background: var(--color-dark); background-image: url('<?php the_field('main_background'); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main">
                        <?php if (get_field('main_head')): ?>
                            <div class="main__head wow animate__animated  animate__fadeInUp">
                                <h1><?php the_field('main_head'); ?></h1>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('main_slag wow animate__animated  animate__fadeInUp')): ?>
                            <div class="main__slag">
                                <p><?php the_field('main_slag'); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div id="scroll__bot" class="arrow wow animate__animated  animate__fadeInUp">
                        <a href="#what_we_do">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px">
                                <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                      d="M22.702,44.754 C10.542,44.754 0.649,34.862 0.649,22.702 C0.649,10.542 10.542,0.649 22.702,0.649 C34.861,0.649 44.754,10.542 44.754,22.702 C44.754,34.862 34.861,44.754 22.702,44.754 ZM22.702,2.852 C11.756,2.852 2.852,11.757 2.852,22.702 C2.852,33.648 11.756,42.551 22.702,42.551 C33.647,42.551 42.551,33.648 42.551,22.702 C42.551,11.757 33.647,2.852 22.702,2.852 ZM23.484,33.063 C23.268,33.278 22.990,33.377 22.702,33.377 C22.414,33.377 22.135,33.269 21.919,33.054 L15.722,26.857 C15.291,26.425 15.291,25.732 15.722,25.301 C16.154,24.870 16.847,24.870 17.278,25.301 L21.596,29.618 L21.596,13.124 C21.596,12.512 22.090,12.017 22.702,12.017 C23.313,12.017 23.808,12.512 23.808,13.124 L23.808,29.628 L28.125,25.310 C28.556,24.878 29.249,24.878 29.680,25.310 C30.112,25.741 30.112,26.434 29.680,26.866 L23.484,33.063 Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="what_we_do">
    <div class="second">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php if (get_field('second_head')): ?>
                        <div class="second__head wow animate__animated  animate__fadeInUp">
                            <h2><?php the_field('second_head'); ?></h2>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-12">
                    <?php if (have_rows('make_info')): ?>
                        <?php while (have_rows('make_info')): the_row(); ?>
                            <div class="make wow animate__animated  animate__fadeInUp">
                                <div class="make__info">
                                    <div class="make__info_numb"
                                         style="color: <?php the_sub_field('make_info_numb_color'); ?>">
                                        <?php the_sub_field('make_info_numb'); ?>
                                    </div>
                                    <div class="make__info_head">
                                        <h3 style="color: <?php the_sub_field('make_info_head_color'); ?>">
                                            <?php the_sub_field('make_info_head'); ?>
                                        </h3>
                                    </div>
                                    <div class="make__info_text">
                                        <p style="color: <?php the_sub_field('make_info_text_color'); ?>">
                                            <?php the_sub_field('make_info_text'); ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="make__imag"
                                     style="background-image: url('<?php the_sub_field('make_imag'); ?>')"></div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="why_argeau">
    <div class="third"
         style="background: var(--color-dark); background-image: url('<?php the_field('third_background'); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php if (get_field('third_head')): ?>
                        <div class="third__head wow animate__animated  animate__fadeInUp">
                            <h2><?php the_field('third_head'); ?></h2>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-12">
                    <div class="wherefore">
                        <?php if (have_rows('wherefore_info')): ?>
                            <?php while (have_rows('wherefore_info')): the_row(); ?>
                                <div class="wherefore__info wow animate__animated  animate__fadeInUp">
                                    <div class="wherefore__info_icon">
                                        <img src="<?php the_sub_field('wherefore_icon'); ?>" alt="img">
                                    </div>
                                    <div class="wherefore__info_head">
                                        <h4><?php the_sub_field('wherefore_head'); ?></h4>
                                    </div>
                                    <div class="wherefore__info_text">
                                        <p><?php the_sub_field('wherefore_text'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if (get_field('link_link')): ?>
                    <div class="col-lg-12">
                        <div class="start__link wow animate__animated  animate__fadeInUp">
                            <a href="<?php the_field('link_link'); ?>">
                                <?php the_field('link_text'); ?>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
