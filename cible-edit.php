<?php include 'includes/header.php'; ?>

					<div id="corps_content">

						<div class="block_left">	
							<?php include 'includes/menu/criteres.php'; ?>
							<?php include 'includes/menu/site.php'; ?>
						</div>

						<div class="content_bg">

							<div id="timeline">
								<ul>
									<li><a href="#">Comptage</a> &gt;</li>
									<li><a href="#">Cible</a> &gt;</li>
									<li class="selected"><a href="#">Edition</a></li>
								</ul>
							</div>

							<div id="destinataire" style="background: #e8e8e8;">
								<div class="header">
									<a href="/requeteur_test/?m=comptage&amp;c=operation&amp;a=listcontacts" class="iframe edit" style="color: #05C70A;">Compte associé</a></div>
								<div style="padding: 15px;">
									<div class="societe">Les jouets Jean-michel</div>
									<div class="nom">Michel Jean</div>
								</div>
							</div>

							<section id="ma-campagne">
								<header>
									<h1 id="ma-campagne-libelle" title="Cliquez ici pour changer le nom de la campagne...">Que la campagne est belle !</h1>
								</header>
								
								<div class="content">
									<div id="ma-campagne-caracteristiques">
										<div style="border-right: 1px dotted #545454; padding-right: 10px;" title="cible" class="type-cible">Particuliers</div>
										<div title="opération" class="type-op">Achat de fichier</div>
										<div title="données" class="type-donnees">Adresses postales</div>
									</div>
									
									<div id="ma-campagne-resultats-comptage" class="right">
										<span class="badge">798</span> <br />
										adresses sélectionnées
									</div>

									<p class="infos">
										Créée le: <em>19/02/2013 14:59</em>, statut: <em>En cours</em>
										<a title="enregistrer la campagne" onclick="myCpg.doSave()" href="#" class="save"></a>
									</p>
								</div>
							</section>

							

							<section id="ma-cible">
								<header>
									<h1 style="position: relative;">Ma cible</h1>
									<span class="myBouton"><a href="/requeteur_test/?m=comptage&amp;c=cible&amp;a=add" class="myAdd" title="ajouter une nouvelle cible">Ajouter</a></span>
								</header>

								<div>

									<article>
										<div class="rank"><h2><a class="edit" href="#" title="editer la cible">1<span class="editBtnSmall"></span></a></h2></div>
										<a class="delete" title="supprimer cette cible" href="#"><span class="deleteBtn"></span></a>

										<div>

											<div class="critere">
												<div class="title">Sexe</div>
												<div class="value">Homme</div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

											<div class="critere">
												<div class="title">Age</div>
												<div class="value"> &gt; 40</div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

											<div class="critere">
												<div class="title">Activité</div>
												<div class="value"><a title="voir le détail" class="iframeReload cboxElement" href="/requeteur_test/?m=comptage&amp;c=critere&amp;a=editvaleurs&amp;critere=7">
													<span class="count">59 valeurs</span></a></div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

											<div class="critere">
												<div class="title">Age</div>
												<div class="value"> &gt; 40</div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

											<div class="critere">
												<div class="title">Effectif</div>
												<div class="value">De <em>20</em> à <em>200</em></div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

										</div>
									</article>

									<article class="selected">
										<div class="rank"><h2>2</h2></div>
										<a class="delete" title="supprimer" href="#"><span class="deleteBtn"></span></a>

										<div>

											<div class="critere">
												<div class="title">Sexe</div>
												<div class="value">Homme</div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

											<div class="critere">
												<div class="title">Activité</div>
												<div class="value"><a title="voir le détail" class="iframeReload cboxElement" href="/requeteur_test/?m=comptage&amp;c=critere&amp;a=editvaleurs&amp;critere=7">
													<span class="count">59 valeurs</span></a></div>
												<a class="delete" title="supprimer" href="#"><span class="btndelete"></span></a>
											</div>

											<div class="critere">
												<div class="title">Ville</div>
												<div class="value"><a title="voir le détail" class="iframeReload cboxElement" href="/requeteur_test/?m=comptage&amp;c=critere&amp;a=editvaleurs&amp;critere=7">
													<span class="count">10 valeurs</span></a></div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

											<div class="critere">
												<div class="title">Sexe</div>
												<div class="value">Homme</div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

											<div class="critere">
												<div class="title">Age</div>
												<div class="value"> &gt; 40</div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

											<div class="critere">
												<div class="title">Age</div>
												<div class="value"> &gt; 40</div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

											<div class="critere">
												<div class="title">Age</div>
												<div class="value"> &gt; 40</div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

											<div class="critere">
												<div class="title">Age</div>
												<div class="value"> &gt; 40</div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

										</div>
									</article>

									<article>
										<div class="rank"><h2><a href="#">3</a></h2></div>
										<a class="delete" title="supprimer" href="#"><span class="deleteBtn"></span></a>

										<div>

											<div class="critere">
												<div class="title">Effectif</div>
												<div class="value">De <em>20</em> à <em>200</em></div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

											<div class="critere">
												<div class="title">Age</div>
												<div class="value"> &gt; 40</div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

											<div class="critere">
												<div class="title">Sexe </div>
												<div class="value">Homme</div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

											<div class="critere">
												<div class="title">Age</div>
												<div class="value"> &gt; 40</div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

										</div>
									</article>


									<article>
										<div class="rank"><h2>4</h2></div>
										<a class="delete" title="supprimer" href="#"><span class="deleteBtn"></span></a>

										<div>

											<div class="critere">
												<div class="title">Sexe</div>
												<div class="value">Homme</div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

											<div class="critere">
												<div class="title">Age</div>
												<div class="value"> &gt; 40</div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

											<div class="critere">
												<div class="title">Activité</div>
												<div class="value"><a title="voir le détail" class="iframeReload cboxElement" href="/requeteur_test/?m=comptage&amp;c=critere&amp;a=editvaleurs&amp;critere=7">
													<span class="count">59 valeurs</span></a></div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

											<div class="critere">
												<div class="title">Age</div>
												<div class="value"> &gt; 40</div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

											<div class="critere">
												<div class="title">Effectif</div>
												<div class="value">De <em>20</em> à <em>200</em></div>
												<a class="delete" title="supprimer" href="#"><span class="deleteBtnSmall"></span></a>
											</div>

										</div>
									</article>

								</div>

								<div id="toto" style="display:none;">
									<textarea cols="85" rows="12" id="valeurs" name="valeurs"></textarea>
								</div>

							</section>

							<div id="etape_valide">
								<span class="retour"><span class="myBouton"><a href="/requeteur_test/?m=comptage&c=cible" class="myBack">Retour</a></span></span>
								<span class="suivant"><span class="myBouton"><a href="/requeteur_test/?m=comptage&c=cible">Comptage</a></span></span>
							</div>

						</div>
						<div class="clear"></div>

					</div>

<?php include 'includes/footer.php'; ?>