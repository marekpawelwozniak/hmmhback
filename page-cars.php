<?php

/**
 * Template Name: Cars
 */

//die("carrr");

$query = new WP_Query([
    'post_type'      => 'car',
    'posts_per_page' => -1,
]);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();


        while( have_rows('mech') ) : the_row();
            $sub_value = get_sub_field('single_mech');
            echo "<br>";
            echo $sub_value['user_nicename'];
        endwhile;

        echo "<br>";
        echo the_title();

        echo "<br>";
        the_field('year');

        echo "<br>";
        the_field('brand');

        echo "<br>";
        the_field('model');
        echo "<br>";

        echo "<br>";
        ?>

        <img src=" <?php  the_field('custom_image')  ?> "/>";
        <?php
    }
}