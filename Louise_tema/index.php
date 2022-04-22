<?php get_header() ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
        <div class="box1">
            <!-- <img class="navn" src="<?php the_field("navn") ?>"> -->
            <img class="img1" src="<?php the_field("img1") ?>">
            <!-- <div class="boxblaa"></div> -->
            <div class="somebox">
            <p><b><a class="some" href="<?php the_field("face") ?>" target="_blank">Facebook</a></b></p>
            <p><b><a class="some" href="<?php the_field("insta") ?>" target="_blank">Instagram</a></b></p>
            <p><b><a class="some" href="<?php the_field("Linkedin") ?>" target="_blank">Linkedin</a></b></p>
             </div>
        
        </div>
        
    <?php endwhile ?>
<?php else : ?>
    sorry we couldn't find anything
<?php endif; ?>

<?php get_footer() ?>