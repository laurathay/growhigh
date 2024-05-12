

    <?php get_header() ?>

        <?php if (have_posts()): ?>
            <ul>
                <?php while(have_posts()): the_post(); ?>
                    <li></li>
                <?php endwhile ?>
            </ul>
            
        <?php else: ?>
            <h1>Pas d'articles</h1>
        <?php endif; ?>

        <div class="ds-slider-section">
    	<div class="ds-slider">
        <div class="ds-slider-loop">
    			<img src="images/tulum.PNG" />
    			<span><a href="project/yucatan.html">Monstera Adansonii<i class="ri-external-link-line"></i></a></span>
    		</div>
        <div class="ds-slider-loop">
    			<img src="images/project.png" />
    			<span><a href="illustration-project.html">Monstera Deliciosa<i class="ri-external-link-line"></i></a></span>
    		</div>
        <div class="ds-slider-loop">
    			<img src="images/gurlz.PNG" />
    			<span><a href="#">Golden Pothos<i class="ri-external-link-line"></i></a></span>
    		</div>
    		<div class="ds-slider-loop">
    			<img src="images/girl.JPG" />
    			<span><a href="#">Neon Pothos<i class="ri-external-link-line"></i></a></span>
    		</div>
    		<div class="ds-slider-loop">
    			<img src="images/sapa.PNG" />
    			<span><a href="#">Scindapsus Epipremnum<i class="ri-external-link-line"></i></a></span>
    		</div>
    		<div class="ds-slider-loop">
    			<img src="images/hoian.PNG" />
    			<span><a href="#">Lieres <i class="ri-external-link-line"></i></a></span>
    		</div>
    		<div class="ds-slider-loop">
    			<img src="images/italu.JPG" />
    			<span><a href="#">Hydroponie <i class="ri-external-link-line"></i></a></span>
    		</div>
    		<div class="ds-slider-loop">
    			<img src="images/lonely.PNG" />
    			<span><a href="#">Palludarium <i class="ri-external-link-line"></i></a></span>
    		</div>
        <div class="ds-slider-loop">
    			<img src="images/foshobro.jpg" />
    			<span><a href="#">Nourriture <i class="ri-external-link-line"></i></a></span>
    		</div>

    </div>
    <?php get_footer() ?>