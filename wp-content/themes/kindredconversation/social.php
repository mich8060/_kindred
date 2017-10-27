<div class="social">                                          
	<div class="social--title">Share</div>
	<ul>
		<li> 
		    <div class="social--overlay">
		    	<div class="fb-share-button" data-href="<? echo get_permalink(); ?>" data-layout="button_count" data-size="large" data-mobile-iframe="true">
					<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a>
				</div>	
		    </div> 
			<a href="#" data-class="" class="fb">Fb</a>
		</li>
		<li>
			<div class="social--overlay"> 
				<?php $tweet = "Read: ".rawurlencode(get_the_title()); ?>
				<a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=<?php echo $tweet; ?>" data-size="large"> Tweet</a>
			</div>
			<a href="#" data-class="" class="tw">Tw</a>
		</li>
		<li>
			<div class="social--overlay">
				<div class="g-plus" data-action="share" data-height="24"></div>
			</div>
			<a href="#" data-class="" class="gl">G+</a>
		</li>
		<li>
			<div class="social--overlay">
				<a href="https://www.pinterest.com/pin/create/button/" style="width:100px;height:40px;"></a>
			</div>
			<a href="#" data-class="" class="pin" title="">P</a>
		</li>
	</ul>                                                                                         
</div>