<?php include 'includes/header.php'; ?>

					<div id="corps_content">

						<div class="block_left">	
							<?php include 'includes/menu/site.php'; ?>
						</div>
				
						<div class="content_bg">
							<h1>Choisissez votre cible</h1>

							<form action="/requeteur_test/?m=comptage&amp;c=cible&amp;a=type" method="post">
								<div style="width: 500px; min-height: 150px; margin: auto;">
									<div style="float:left;" class="bigCheckbox">
										<input type="radio" id="cible-part" value="part" name="cibletype" class="hiddenCheckbox">
										<label for="cible-part" class="prettyCheckbox radio list"><span class="holderWrap" style="width: 17px; height: 17px;"><span class="holder" style="width: 17px;"></span></span>Particuliers</label>
									</div>
									<div style="float:right;" class="bigCheckbox">
										<input type="radio" id="cible-pro" value="pro" name="cibletype" class="hiddenCheckbox">
										<label for="cible-pro" class="prettyCheckbox radio list"><span class="holderWrap" style="width: 17px; height: 17px;"><span class="holder" style="width: 17px;"></span></span>Professionnels</label>
									</div>
								</div>

								<div class="clear"></div>
								<div class="separation"></div>

								<div id="etape_valide">
									<!-- <span class="retour"><a href="/requeteur_test/?m=comptage"> &lt; retour</a></span> -->
									<span class="suivant"><input type="submit" value="suivant"></span>
								</div>
							</form>
						</div>
						
						<div class="clear"></div>
					</div>

<?php include 'includes/footer.php'; ?>