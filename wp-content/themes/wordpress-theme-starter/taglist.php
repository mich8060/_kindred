<div>
    <?php if(function_exists('wp_tag_cloud')) : ?>
        <h4>Tag Archive</h4>
        <?php wp_tag_cloud(array(
        	'smallest'                  => 14, 
        	'largest'                   => 16,
        	'unit'                      => 'px', 
        	'number'                    => 45,  
        	'separator'                 => "\n",
        	'orderby'                   => 'name', 
        	'order'                     => 'ASC', 
        	'echo'                      => true
        )); ?>
    <?php endif; ?>
</div>