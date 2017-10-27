<!-- pagination -->
<div class="pagination">
    <?php 
        $args = array(
            'screen_reader_text'    =>  ' ',
            'mid_size'              =>  2,
            'prev_text'             =>  __( 'Prev',''),
            'next_text'             =>  __( 'Next','')
        );
        the_posts_pagination($args);
    ?>
</div>
<!-- /pagination -->
