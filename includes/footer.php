		</div>

		<footer id="footer" >
			<div id="footer_1">
				<ul style="padding-top: 11px;">
					<li><a href="http://217.119.135.26/requeteur_test/divers/mentions-legales.php">Mentions légales</a></li>
					<li>|</li>
					<li><a href="http://217.119.135.26/requeteur_test/divers/plan-du-site.php">Plan du site</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</footer>

		<script type="text/javascript">
			$(document).ready(function() {
				myCpg = new Campagne('18', '{"urls":{"critere":{"remove":"\/requeteur_test\/?m=comptage&c=critere&a=remove"},"campagne":{"save":"\/requeteur_test\/?m=comptage&c=campagne&a=save","saveLibelle":"\/requeteur_test\/?m=comptage&c=campagne&a=saveLibelle"}}}')
				$(".hasMultipleModes").on("click", function(event) {
					var myJqObj = $(this).parents("li").children("ul");
					myJqObj.slideToggle();
					$("ul > li > ul").not(myJqObj).slideUp();
				});
				$(".delete").on("mouseover", function(event) {
					$(this).siblings("h1, h2, .title").addClass("todelete");
				});
				$(".delete").on("mouseout", function(event) {
					$(this).siblings("h1, h2, .title").removeClass("todelete");
				});
			});
		</script>
	</body>
</html>