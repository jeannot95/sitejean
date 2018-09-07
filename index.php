<?php
	include('site/inc/header.php');
?>	
		<section>
			<div class="conteneur2 flex">
				<div class="sidebar"> 
					<h2>Présentation</h2><br>
					<p>Ce site a pour but de présenter mes différents travaux réalisés(liens ci-dessous).</p><br>
					<h2>Sites internets développés : </h2>
					<br>
					
					<h3><a href="http://jeux.audoinjean95300.com" target="blank">JeuxdeSociété</a></h3><p><em>Site web Dynamique sous Symfony(Août 2018).</em>En cours de développement.</p><br>	
					<h3><a href="http://platform.audoinjean95300.com/oc/platform" target="blank">Annoncéo</a></h3><p><em>Site web Dynamique sous Symfony(Août 2018).</em>En cours de développement.</p><br>	
					<h3><a href="/sallea" target="blank">Sallea</a></h3><p><em>Site web Dynamique back-end PHP, front-end Bootstrap(Avril 2018)</em></p><br>
					<h3><a href="/parimis" target="blank">Parimis</a></h3><p><em>Site web Statique front-end HTML5/CSS3/JavaScript(Mars 2018)</em></p><br>	
					
					<br>
				</div>	
				<div class="wid">
					<div class="slider" id="slider">
						<div class="slider__content" id="slider-content">
							<div class="slider__images">
								<div class="slider__images-item slider__images-item--active" data-id="1"><img src="site/image/jeux.PNG" /></div>
								<div class="slider__images-item" data-id="2"><img src="site/image/annonce.PNG" /></div>
								<div class="slider__images-item" data-id="3"><img src="site/image/sallea.PNG" /></div>
								<div class="slider__images-item" data-id="4"><img src="site/image/Parimis.PNG" /></div>
							</div>
							<div class="slider__text">
								<div class="slider__text-item slider__text-item--active" data-id="1">
									<div class="slider__text-item-head">
										<h3>JeuxDeSociété</h3>
									</div>
									<div class="slider__text-item-info">
										<p><em>“Site web Dynamique sous Symfony(Août 2018)</em>.En cours de développement.”</p>
									</div>
								</div>
								<div class="slider__text-item" data-id="2">
									<div class="slider__text-item-head">
										<h3>Annoncéo</h3>
									</div>
									<div class="slider__text-item-info">
										<p><em>“Site web Dynamique sous Symfony(Août 2018)</em>.En cours de développement.”</p>
									</div>
								</div>
								<div class="slider__text-item" data-id="3">
									<div class="slider__text-item-head">
										<h3>SalleA</h3>
									</div>
									<div class="slider__text-item-info">
										<p><em>“Site web Dynamique back-end PHP, front-end Bootstrap(Avril 2018)”</em></p>
									</div>
								</div>
								<div class="slider__text-item" data-id="4">
									<div class="slider__text-item-head">
										<h3>Parimis</h3>
									</div>
									<div class="slider__text-item-info">
										<p><em>“Site web Statique front-end HTML5/CSS3/JavaScript(Mars 2018)”</em></p>
									</div>
								</div>
							</div>
						</div>
						<div class="slider__nav">
							<div class="slider__nav-arrows">
								<div class="slider__nav-arrow slider__nav-arrow--left" id="left">to left</div>
								<!-- <a href="http://jeux.audoinjean95300.com" target="blank" data-id="1"><div class="slider__nav-arrow"></div></a>	 -->
								<div class="slider__nav-arrow slider__nav-arrow--right" id="right">to right</div>
							</div>
							<div class="slider__nav-dots" id="slider-dots">
								<div class="slider__nav-dot slider__nav-dot--active" data-id="1"></div>
								<div class="slider__nav-dot" data-id="2"></div>
								<div class="slider__nav-dot" data-id="3"></div>
								<div class="slider__nav-dot" data-id="4"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="sidebar">
					<h2>Informations</h2><br>				
					<p>
						Vous êtes à la recherche d'une personne compétente et efficace pour<br>
						gérer vos projets web?<br><br>
						Actuellement en formation, je serai disponible à partir du mois d'octobre 2018<br><br>
						<ul><strong>Liste de mes compétences : </strong><br><br>
							<li>Front : HTML5/CSS3/Javascript/jQuery/Bootstrap</li>
							<li>Back : SQL/PHP procédural/PHP Orienté Objet</li>
							<li>Framework : Symfony3</li>
						</ul>	
					</p>
					<br>
				<hr>
				<br>
				<h2>Actualités</h2><br>
				<p class="italic">
					Depuis le 31/01/2018:Formation IFOCOP Eragny.<br>
					Depuis le 04/06/2018:Stage en entreprise Agence51.<br>
				</p>
				</div>
			</div>
	</section>
	<div class="clear"></div>
<?php
	include('site/inc/footer.php');
?>	
 