<?php

/**
 * No Posts Template
 * 
 * this will a message no posts found
 *
 * @package standard
 */

?>

<section class="no-content-template not-found">

    <header class="page-title">
        <h1 class="page-heading"> <?php esc_html_e( 'No Posts Found', 'text-domain' ); ?> </h1>
    </header>

    <div class="page-content">
        <?php
            if( is_home() && current_user_can( 'publish_posts' ) ){
                ?>
                    <p>
                        <?php 
                            printf(
                                wp_kses(
                                    __('No Posts found. Are you sure you want to publish post? <a href="%s">Get Started</a>', 'text-domain'),
                                    [
                                        'a' => [
                                            'href' => []
                                        ]
                                    ]
                                ),
                                esc_html( admin_url( 'post-new.php' ) )
                            )
                        ?>
                    </p>
                <?php
            } elseif( is_search() ){
                ?>
                    <p><?php esc_html_e( 'Sorry nothing found not not match. tray again another keyword', 'text-domain' ); ?></p>
                <?php

                get_search_form();

            } else{
                ?>
                    <p><?php esc_html_e( 'Sorry we cannot understand your search query. please try another way or keyword', 'text-domain' ); ?></p>
                <?php
                ?>
                    <p><?php get_search_form(); ?></p>
                <?php
            }
        ?>
    </div>

</section>