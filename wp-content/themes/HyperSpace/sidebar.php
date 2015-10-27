<section id="sidebar">
    <div id="sidebar-top">
    </div> <!--  end #sidebar-top  -->
	<!--    Start Dynamic Sidebar    -->
    <div class="col-lg-12">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>

	<?php endif; ?>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('fluxrss') ) : ?>

    <?php endif; ?>

    <div class="clear"></div>
    <div id="sidebar-bottom">
    </div>
    </div> <!--  end #sidebar-bottom  -->  
</section> <!--  end #sidebar  --> 
