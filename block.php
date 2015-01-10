<?php

/* This class must be included in another file and included later so we don't get an error about HeadwayBlockAPI class not existing. */



class HeadwayArctextBlock extends HeadwayBlockAPI {

    

    
    public $id = 'arctext-block';
    public $name = 'Arctext';
    public $options_class = 'HeadwayArctextBlockOptions';

            
public static function enqueue_action($block_id, $block, $original_block = null) {
	$arc = parent::get_setting($block, 'arc-input', null);	
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-arctext', plugins_url('/js/jquery.arctext.js' , __FILE__),'','',false);
    wp_enqueue_script('jquery-throttle', plugins_url('/js/jquery.throttle.js' , __FILE__),'','',false);
    wp_enqueue_script('jquery-typorise', plugins_url('/js/jquery.typorize.js' , __FILE__),'','',false);
	wp_enqueue_script('jquery-curvedtext', plugins_url('/js/jquery.curvedtext.js' , __FILE__),'','',false);
	
}


			

		function content($block) {
		$arc = parent::get_setting($block, 'arc-input', null);	
		$content = parent::get_setting($block, 'content', null);
        $url = parent::get_setting($block, 'hyperlink', null);
						
			
		
						
	
						echo '<a href="' . $url . '">'; 

if (!empty($content)) {
echo '<div class="' . $arc . '">' . $content . '</div>';
} else {
echo '<div class="' . $arc . '">';
wp_title();
echo '</div>';
}
echo '</a>';
		
	}
	  			
			
}
		