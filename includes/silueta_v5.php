<?php echo "PRUEBA" ?>
    <!-- INICIO SLIDER SUPERIOR SILUETAS --> 
    <div id="slider"> 
      <div class="slidesContainer">
      	<?php query_posts('category_name=SILUETA&posts_per_page=4' ); 
			while ( have_posts() ) : the_post(); 			
			?>
          <div class="slide">
				  <div class="clear"></div> <!--AGREGADO ESPACIO-->
            <div class="image_slide"><a href="<?php  the_permalink(); ?>"><?php the_post_thumbnail('slider_sup') ?></a></div>
				  <div class="text_slide">
					  <div class="clear"></div> <!--AGREGADO ESPACIO-->
                <h1 class="titulo_slide"><a href="<?php  the_permalink(); ?>"><?php the_title();?></a></h1>
                <p><?php remove_filter('the_excerpt', 'wpautop'); the_excerpt_max_charlength(75);?></P><!-- REEMPLAZO DE LA FUNCION PARA LIMITAR CARACTERES--> <!-- the_excerpt(); ?></p> -->
              </div>     
            </div>
           <?php endwhile; ?>
           <?php wp_reset_query(); ?>
			  </div> 
      </div>            
    </div>
    <!-- FIN SLIDER SUPERIOR SILUETAS -->
