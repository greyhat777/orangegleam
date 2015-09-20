<div class="header">
			<div class="logo">
				<a href="/"><img src="images/logox.png" width="221" height="94" class="img-responsive" alt="fresno website design - business optimzed websites | Orangegleam.com"></a>
			</div>
				<div class="head-nav">
					<p></p>
					<br/>
					<div style="float:right"><p><span class="glyphicon glyphicon-flag"></span><a href="/es">Espanol</a></p></div><br/><br/>
					<div style="float:right"><p><span class="glyphicon glyphicon-earphone"></span> (559)376-0051</p></div>
					<!--email_off--> 
					<div style="float:right"><p><span class="glyphicon glyphicon-envelope"></span> info@orangegleam.com</p></div><br/>
					<!--/email_off--> 
					<span class="menu"> </span>
					   <div id ="navigation">
						<ul class="cl-effect-16">
							<li<?php if ($thisPage=="about") echo " id=\"currentpage\""; ?>><a href="/about">About</a></li>
							<li<?php if ($thisPage=="portfolio") echo " id=\"currentpage1\""; ?>><a href="/portfolio">Portfolio</a></li>
							<li<?php if ($thisPage=="services") echo " id=\"currentpage2\""; ?>><a href="/services">Services</a></li>
							<li<?php if ($thisPage=="pricing") echo " id=\"currentpage3\""; ?>><a href="/pricing">Pricing</a></li>
							<li<?php if ($thisPage=="faqs") echo " id=\"currentpage4\""; ?>><a href="/faqs">FAQ's</a></li>
							<li<?php if ($thisPage=="contact") echo " id=\"currentpage5\""; ?>><a href="/contact">Contact</a></li>
							<li<?php if ($thisPage=="blog") echo " id=\"currentpage6\""; ?>><a href="/blog">Blog</a></li>	
						</ul>
					  </div>
							<!-- script-for-nav -->
						<script>
							$( "span.menu" ).click(function() {
							  $( ".head-nav ul" ).slideToggle(300, function() {
								// Animation complete.
							  });
							});
						</script>
					<!-- script-for-nav --> 
				</div>
					<div class="clearfix"> </div>
</div> 












