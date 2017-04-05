<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

        <div class="<?php echo esc_html( $container ); ?>">

                <div class="row">

                        <div class="col-md-12">

                                <footer class="site-footer">

                                        <div class="site-info">

                                              <h6 >James Washington 2017.  Property is theft.</h6>

                                        </div><!-- .site-info -->

                                </footer><!-- #colophon -->

                        </div><!--col end -->

                </div><!-- row end -->

                <div class="row">

                        <div class="col-md-12">

                                <footer class="site-footer">

                                        <div class="site-info social-icons">

                                              <div class="d-inline-block">
                                                <div class="bg-circle-outline d-inline-block">
                                                  <a href="https://www.facebook.com/"><i class="fa fa-2x fa-fw fa-facebook"></i></a>
                                                </div>
                                                <div class="bg-circle-outline d-inline-block">
                                                  <a href="https://twitter.com/">
                                                    <i class="fa fa-2x fa-fw fa-twitter"></i></a>
                                                </div>
                                                <div class="bg-circle-outline d-inline-block">
                                                  <a href="https://www.linkedin.com/company/">
                                                    <i class="fa fa-2x fa-fw fa-linkedin"></i></a>
                                                </div>
                                              </div>

                                        </div><!-- .site-info -->

                                </footer><!-- #colophon -->

                        </div><!--col end -->

                </div><!-- row end -->

        </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
