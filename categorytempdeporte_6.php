<?php get_header(); ?>
<?php $nom_wid='Sidebar Deportes';?>
<?php $max=5;?>
<!-->
<!-- <<<<>>>> -->

<div class="deportes">
	<div class="noticia_principal">
		<div class="limpiar"></div>
		<?php 
			query_posts('cat=25&posts_per_page=1' ); 
			while ( have_posts() ) : the_post(); 			
			$nom_cat=exclude_categoria();// obtengo nombre de cat
			$cat_id = get_cat_ID($nom_cat);// obtengo id con el nombre de cat
			$cat_link = get_category_link( $cat_id );//obtengo url por id de cat
			$link=get_permalink(); $tit=get_the_title(); // obtengo link y titulo
		?>
		<div class="img_large">
			<?php if(has_post_thumbnail()): // si tiene imagen 
				$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium', false );
			?>
				<a href="<?php echo $link;?>"> <img align="center" src="<?php echo $pimagen[0];?>" alt="<?php echo $tit;?>" width="100%" height="100%" /></a>
			<?php endif ?>
			<div class="caption">
				<h1><a href="<?php  the_permalink(); ?>" ><?php the_title();?></a></h1>
			</div>
	</div>
	<div class="resumen_large">
		<p class="txt_not"> <span><?php the_time('h:i A');?> | <a href="<?php echo $cat_link;?>"><? echo $nom_cat;?> </a> | </span><?php the_excerpt();?></p>
	</div>
	<?php  endwhile; ?>
	<?php wp_reset_query(); ?>
</div>
<div class="clear"></div> <!-- clear -->
<!-->
<?php $nom_wid='Sidebar Deportes';?>
<?php $max=5;?>
<!-- <<<<>>>> -->
<!-- NOTICIAS PRIMERA MITAD -->
				<div class="espacio05"></div>
				<div class="sep"></div>
				<div class="espacio03"></div>
					<div class="zon_pub">
						<div id="zon_pub_A">
							<?php include("zon_pub/zon_dep_A.html");?>
						</div>
					</div>
				<div class="espacio03"></div>
					<div class="noticias_dep">
						<div class="not_col_1"><!--abre columna 1 -->
						<?php query_posts('cat=6&posts_per_page=3'); 
						$i=1;
						while ($i <= 3):the_post();
						$nom_cat = exclude_categoria();// obtengo nombre de cat
						$cat_id = get_cat_ID($nom_cat);// obtengo id con el nombre de cat
						$cat_link = get_category_link( $cat_id );//obtengo url por id de cat
						$link=get_permalink(); $tit=get_the_title(); // obtengo link y titulo
						?>
						<div class="nota_col1">
							<!--<div class="lin_nar"></div>-->
							<h2 class="tit_not"><a href="<?php echo $link;?>"> <?php echo $tit;?> </a></h2>
							<div class="con_fot_not_col1" >
							<?php if(has_post_thumbnail()): // si tiene imagen 
								$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium', false );
							?>
								<a href="<?php echo $link;?>"> <img align="center" src="<?php echo $pimagen[0];?>" alt="<?php echo $tit;?>" width="100%" height="100%" /></a>
							<?php endif ?>
							</div>
								<p class="txt_not"> <span><?php the_time('h:i A');?> | <a href="<?php echo $cat_link;?>"><? echo $nom_cat;?> </a> | </span><?php the_excerpt_max_charlength(180);?></p>
								<div class="redes">
									<div class="puntuar"><a href="<?php echo $link;?>"><?php ?>COMENTAR + PUNTUAR + VOTAR</a></div>
									<div class="compartir"><a href="<?php echo $link; ?>">FACEBOOK + TWITTER</a></div>
								</div>
						</div>
						<div class="espacio05"></div>
						<div class="sep"></div>
						<div class="espacio05"></div>
						<?php $i++; endwhile; ?>
						<?php wp_reset_query(); ?>
						</div> <!--cierra columna 1 -->
					</div><!-- FIN NOTICIA -->
<!--widget-->
					<div class="lateral_dep">
						<div class="zon_pub">
							<div id="zon_pub_J">
								<?php include("zon_pub/zon_J.html");?>
							</div>
						</div>

						<div class="zon_pub">
							<div id="zon_pub_K">
								<?php include("zon_pub/zon_K.html");?>
							</div>
						</div>

						<div class="zon_pub">
							<div id="zon_pub_L">
								<?php include("zon_pub/zon_L.html");?>
							</div>
						</div>
						<div class="side">
							<?php if (!dynamic_sidebar($nom_wid));?>
						</div>
					</div>
<!-- fin widget-->
					<div class="limpiar"></div>
					<div class="espacio05"></div>
					<div class="sep"></div>
					<div class="espacio05"></div>






<script>
$(document).ready(function() {
	//paginador
	// var num_bullets = $('#slides li').length;
	//   for (var i=1;i<=num_bullets;i++)
	// 	  {
	// 	   var enlace = $("#slides li:nth-child("+i+") a").attr('href');
	// 	   $('ul#bullets').append('<li><a href="'+enlace+'" id="bullet-'+i+'"></a></li>');
	// 	  }
	//click a los bullets
 	// $('ul#bullets li a').click(function() {	
 	//   var enlace = $(this).attr('href');
	// 	$('#image').html('<img src="'+ enlace +'"/>').hide().fadeIn('slow');
	// 	return false;
	// });
	//rotation speed and timer
	var speed = 4000;
	var run = setInterval('rotate()', speed);	
	//grab the width and calculate left value
	var item_height = $('#slides li').outerHeight(); 
	var top_value = item_height * (-1); 
    //muestro la ultima imagen
	var lastimg = $('#slides li:last a').attr('href');
		$('#image').html('<img src="'+ lastimg +'"/>').hide().fadeIn('slow');
    //move the last item before first item, just in case user click prev button
	$('#slides li:first').before($('#slides li:last'));
	//set the default item to the correct position 
	$('#slides ul').css({'top' : top_value});
	//esta la hice yoo wee, al elemento que le de click obtengo el href y se lo pongo a el div de la imagen
	$('#slides li a').click(function() {
		var enlace = $(this).attr('href');
		$('#image').html('<img src="'+ enlace +'"/>').hide().fadeIn('slow');
		return false;
	});
    //if user clicked on prev button
	$('#prev').click(function() {
		//get the right position            
		var top_indent = parseInt($('#slides ul').css('top')) + item_height;
		//slide the item            
		$('#slides ul:not(:animated)').animate({'top' : top_indent}, 200,function(){    
            //move the last item and put it as first item            	
			$('#slides li:first').before($('#slides li:last'));           
			//set the default item to correct position
			$('#slides ul').css({'top' : top_value});
		});
		//cancel the link behavior            
		return false;
	});
	//current bullets
	// $('ul#bullets li a').each(function() {
	// 	var id_bullet = $(this).attr("id");
	// 	var id_image = $('#image img').attr("id");;
	// if( id_bullet == id_image)
	// 	{alert("weeee");}	
	// });
    //if user clicked on next button
	$('#next').click(function() {
		//get the right position
		var top_indent = parseInt($('#slides ul').css('top')) - item_height;
		//slide the item
		$('#slides ul:not(:animated)').animate({'top' : top_indent}, 200, function () {
            //move the first item and put it as last item
			$('#slides li:last').after($('#slides li:first'));                 	
			//set the default item to correct position
			$('#slides ul').css({'top' : top_value});
			//aqui muestro la imagen del primer enlace
			//con el html(), creo el elemento en el dom, con el hide() lo escondo y con el fadein() lo muestro
			var current_img = $('#slides li:first a').attr('href');
		  	$('#image').html('<img src="'+ current_img +'"/>').hide().fadeIn('slow');
		   	return false;
		});
		//cancel the link behavior
		return false;	
	});
	//if mouse hover, pause the auto rotation, otherwise rotate it
	$('#slides').hover(
		function() {
			clearInterval(run);
		}, 
		function() {
			run = setInterval('rotate()', speed);	
		}
	);
});
//a simple function to click next link
//a timer will call this function, and the rotation will begin :)  
function rotate() {
	$('#next').click();
}
</script>
<?php get_footer(); ?>
