<div class="widget-area">
	<div id="right_wrapper">
         
          <div class="review">
            <div class="header"><a href="#">Server Admins</a></div>
            <ul>
              <li>
                <div class="img"><a href="./post_game.html"><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></div>
                <div class="info"> <a href="./fuzzythor">FuzzyThor</a><br/>
                  <small>03 January 2013</small><br/>
                   </div>
              </li>
              <li>
                <div class="img"><a href="./post_game.html"><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></div>
                <div class="info"> <a href="./kurada">Kurada</a><br/>
                  <small>03 January 2013</small><br/>
                  </div>
              </li>
             
            </ul>
        
	
	<?php if ( ! dynamic_sidebar( 'Sidebar Widgets' ) ) : ?>
    	<aside id="search" class="widget"
        	<?php get_search_form(); ?>
        </aside>
        <aside id="archives" class="widgeta">
        	<h3 class="widget-title">Archives</h3>
            <ul>
            	<?php wp_get_archives('type=monthly&limit=12'); ?>
            </ul>
        </aside>
    
	<?php endif; // end sidebar widget area ?>
    
</div>  </div>