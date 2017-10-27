<?php

    $format = get_post_format() ? : 'standard';
    get_template_part('post-formats/format', $format);

?>