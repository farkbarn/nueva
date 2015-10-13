				<div id="silueta">
						<?php query_posts('cat=504&posts_per_page=5'); 
						$max_sil=5; $h=1;
						$titulos=array();
						$enlaces=array();
						$imagenes=array();
						$resumenes=array();
						while (have_posts() ) : the_post();
						$titulos[]=get_the_title();
						$enlaces[]=get_permalink();

							if(has_post_thumbnail()): // si tiene imagen 
								$imagenes[]=wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', false );
							endif
						$resumenes[]=substr(get_the_excerpt(),0,45);
						$h++;endwhile;
						wp_reset_query();?>
					<div id="sil_izq">
						<div id="img_sil">
								<?php
								for ($j=1; $j < $max_sil; $j++;){?>
									<a href="<?php echo $enlaces[$j];?>"><img class="img_sil_2" align="center" src="<?php echo $imagenes[$j];?>" alt="<?php echo $titulos[$j];?>" width="100%" height="100%" /></a>
								<?php }?>
						</div>
					</div>
					<div id="sil_der">
						<div id="txt_sil">
							<div id="tit_sil_cod">
								<?php
								for ($j=1; $j < $max_sil; $j++;){?>
									<div class="tit_sil"><a href="<?php echo $enlaces[$j];?>"><?php echo $titulos[$j];?></a></div>									
								<?php }?>
							</div>
							<div id="ext_sil_cod">
								<?php
								for ($j=1; $j < $max_sil; $j++;){?>
								<div class="ext_sil"><?php echo $resumenes[$j]; ?> [...]</div>									
								<?php }?>
							</div>
						</div>
						<div id="bot_sil">
								<div class="nav">
									<a id="prev2" href="#"><<<</a>&nbsp;&nbsp;&nbsp;&nbsp;
									<a id="next2" href="#">>>></a>
								</div>
						</div>
					</div>
						<?php/* $i++; endwhile;
						wp_reset_query();*/?>
				</div>
