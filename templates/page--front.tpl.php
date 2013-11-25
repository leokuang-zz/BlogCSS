<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<header class="header" id="header" role="banner">    
    <?php print render($page['header']); ?>
</header>

<div id="frontpage" class="part">
  <div id="main">
	<div id="content" class="column intro" role="main">
		<p>Passion for beautiful code and creating amazing software/applications. <br> 
		   Want to use new technologies to change this world <br>
		   <span class= "strong">My Name is Leo KUANG</span>
		</p>
	</div>
	<section class="socialIcons">
		<ul>
			<li><a href="http://www.linkedin.com/in/leokuang" target="_blank">
				<img src="/sites/all/themes/leokuang/images/linkedin.png" alt="LinkedIn" /></a>
			</li>
			<li><a href="https://plus.google.com/u/0/106634238546619770315/posts/p/pub" target="_blank">
				<img src="/sites/all/themes/leokuang/images/googlePlus.png" alt="GooglePlus" /></a>
			</li>
			<li><a href="https://github.com/leokuang" target="_blank">
				<img src="/sites/all/themes/leokuang/images/github.png" alt="GitHub" /></a>
			</li>
		</ul>
	</section>   
    <div id="navigation">
    </div>
  </div>
</div>

<div class="platforms part">
	<section class="technology">
		<p>Some of what I love ...</p>
	</section>
	<section class="colorbox">
		<ul>
			<li class="purple transparent">
				<p>.NET</p>
			</li>
			<li class="brown transparent">
				<p>Java</p>
			</li>
			<li class="green transparent">
				<p>PHP</p>
			</li>				
			<li class="yellow transparent">
				<p>JS</p>
			</li>				
			<li class="oringe transparent">
				<p>HTML5</p>
			</li>
			<li class="blue transparent">
				<p>CSS3</p>
			</li>
			<li class="red transparent">
				<p>Ruby</p>
			</li>
			<li class="black transparent">
				<p>jQuery</p>
			</li>
			<li class="grey transparent">
				<p>SQL</p>
			</li>
		</ul>					
	</section>
	<br class="clear">
</div>
	
<footer>
  <div class="footer-width">
  	<ul class="footer-info">
  		<li class="copyright">© Leo KUANG 2013</li>
  	</ul>
  </div>
</footer>
	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="/sites/all/themes/leokuang/js/homepage.js"></script>


<!--<?php print render($page['bottom']); ?> -->
