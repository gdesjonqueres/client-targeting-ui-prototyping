<?php include 'includes/header.php'; ?>

<div id="corps_content">
						<div id="content_block_nav">
				<h1>Gestion des critères</h1>

								<fieldset>
					<legend>Création d'un critère</legend>
										<form action="/requeteur_test/?m=admin&amp;c=critere" method="post">
						<table style="margin-left: 29px;margin-top: -5px;width:580px;">
							<tbody><tr>
								<td align="left">Code</td>
								<td><input type="text" maxlength="38" size="17" id="code" name="code"></td>
								<td align="left">Libellé</td>
								<td><input type="text" maxlength="38" size="17" id="libelle" name="libelle"></td>
							</tr>

							<tr>
								<td align="left">Libellé court</td>
								<td><input type="text" maxlength="38" size="17" id="libellecourt" name="libellecourt"></td>
							</tr>

							<tr>
								<td align="left">Type de critère</td>
								<td>
									<select name="type" style="width: 165px;">
										<option value="">-- Sélectionnez --</option>
																			<option value="6">
											Divers</option>
																			<option value="1">
											Géographiques</option>
																			<option value="4">
											Individu</option>
																			<option value="5">
											Media</option>
																			<option value="2">
											Particuliers</option>
																			<option value="3">
											Professionnels</option>
																		</select>
								</td>
								<td align="left">Type de valeur</td>
								<td>
									<select name="typevaleur" style="width: 165px;">
										<option value="">-- Sélectionnez --</option>
																			<option value="unitaire">
											Unitaire</option>
																			<option value="intervalle">
											Intervalle</option>
																			<option value="liste">
											Liste</option>
																			<option value="switch">
											Switch</option>
																		</select>
								</td>
							</tr>

							<tr>
								<td>Type de cible</td>
								<td align="left" colspan="3"><input type="checkbox" value="Particuliers" id="cibletype_part" name="cibletype[part]"><label for="cibletype_part">Particuliers</label>&nbsp;<input type="checkbox" value="Professionnels" id="cibletype_pro" name="cibletype[pro]"><label for="cibletype_pro">Professionnels</label></td>
							</tr>

							<tr>
								<td align="left">Scoring</td>
								<td align="left"><input type="checkbox" value="1" id="scoring" name="scoring"></td>
								<td align="left">Location</td>
								<td align="left"><input type="checkbox" value="1" id="location" name="location"></td>
							</tr>
						</tbody></table>
						<input type="submit" value="Valider">
					</form>
				</fieldset>

				<fieldset>
					<legend>Liste des critères</legend>
					<div role="grid" class="dataTables_wrapper" id="critTab_wrapper"><div id="critTab_length" class="dataTables_length"><label>Afficher <select name="critTab_length" size="1" aria-controls="critTab"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> éléments</label></div><div class="dataTables_filter" id="critTab_filter"><label>Rechercher&nbsp;: <input type="text" aria-controls="critTab"></label></div><table id="critTab" class="dataTable" aria-describedby="critTab_info">
						<thead>
							<tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="critTab" rowspan="1" colspan="1" style="width: 13px;" aria-sort="ascending" aria-label="ID: activer pour trier la colonne par ordre décroissant">ID</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="critTab" rowspan="1" colspan="1" style="width: 70px;" aria-label="Code: activer pour trier la colonne par ordre croissant">Code</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="critTab" rowspan="1" colspan="1" style="width: 162px;" aria-label="Libellé: activer pour trier la colonne par ordre croissant">Libellé</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="critTab" rowspan="1" colspan="1" style="width: 147px;" aria-label="Type de cible: activer pour trier la colonne par ordre croissant">Type de cible</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="critTab" rowspan="1" colspan="1" style="width: 88px;" aria-label="Type de critère: activer pour trier la colonne par ordre croissant">Type de critère</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="critTab" rowspan="1" colspan="1" style="width: 87px;" aria-label="Type de valeur: activer pour trier la colonne par ordre croissant">Type de valeur</th></tr>
						</thead>
						
					<tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
							<td class="  sorting_1">1</td>
							<td class=" "><a href="/requeteur_test/?m=admin&amp;c=critere&amp;a=edit&amp;id=1">
									insee</a>
							</td>
							<td class=" ">Ville</td>
							<td class=" ">Particuliers, Professionnels</td>
							<td class=" ">Géographiques</td>
							<td class=" ">liste</td>
						</tr><tr class="even">
							<td class="  sorting_1">2</td>
							<td class=" "><a href="/requeteur_test/?m=admin&amp;c=critere&amp;a=edit&amp;id=2">
									age</a>
							</td>
							<td class=" ">Age</td>
							<td class=" ">Particuliers, Professionnels</td>
							<td class=" ">Individu</td>
							<td class=" ">intervalle</td>
						</tr><tr class="odd">
							<td class="  sorting_1">3</td>
							<td class=" "><a href="/requeteur_test/?m=admin&amp;c=critere&amp;a=edit&amp;id=3">
									sexe</a>
							</td>
							<td class=" ">Sexe</td>
							<td class=" ">Particuliers, Professionnels</td>
							<td class=" ">Individu</td>
							<td class=" ">unitaire</td>
						</tr><tr class="even">
							<td class="  sorting_1">4</td>
							<td class=" "><a href="/requeteur_test/?m=admin&amp;c=critere&amp;a=edit&amp;id=4">
									habitat</a>
							</td>
							<td class=" ">Type d'habitat</td>
							<td class=" ">Particuliers</td>
							<td class=" ">Particuliers</td>
							<td class=" ">unitaire</td>
						</tr><tr class="odd">
							<td class="  sorting_1">5</td>
							<td class=" "><a href="/requeteur_test/?m=admin&amp;c=critere&amp;a=edit&amp;id=5">
									revenu</a>
							</td>
							<td class=" ">Revenu</td>
							<td class=" ">Particuliers</td>
							<td class=" ">Particuliers</td>
							<td class=" ">intervalle</td>
						</tr><tr class="even">
							<td class="  sorting_1">6</td>
							<td class=" "><a href="/requeteur_test/?m=admin&amp;c=critere&amp;a=edit&amp;id=6">
									foyer</a>
							</td>
							<td class=" ">Nombre de foyers</td>
							<td class=" ">Particuliers</td>
							<td class=" ">Particuliers</td>
							<td class=" ">intervalle</td>
						</tr><tr class="odd">
							<td class="  sorting_1">7</td>
							<td class=" "><a href="/requeteur_test/?m=admin&amp;c=critere&amp;a=edit&amp;id=7">
									rubrique</a>
							</td>
							<td class=" ">Code rubrique</td>
							<td class=" ">Professionnels</td>
							<td class=" ">Professionnels</td>
							<td class=" ">liste</td>
						</tr><tr class="even">
							<td class="  sorting_1">8</td>
							<td class=" "><a href="/requeteur_test/?m=admin&amp;c=critere&amp;a=edit&amp;id=8">
									anciennete</a>
							</td>
							<td class=" ">Ancienneté à l'adresse</td>
							<td class=" ">Particuliers</td>
							<td class=" ">Particuliers</td>
							<td class=" ">intervalle</td>
						</tr><tr class="odd">
							<td class="  sorting_1">11</td>
							<td class=" "><a href="/requeteur_test/?m=admin&amp;c=critere&amp;a=edit&amp;id=11">
									naf</a>
							</td>
							<td class=" ">Code NAF</td>
							<td class=" ">Professionnels</td>
							<td class=" ">Professionnels</td>
							<td class=" ">liste</td>
						</tr><tr class="even">
							<td class="  sorting_1">12</td>
							<td class=" "><a href="/requeteur_test/?m=admin&amp;c=critere&amp;a=edit&amp;id=12">
									teloblig</a>
							</td>
							<td class=" ">Téléphone renseigné à 100%</td>
							<td class=" ">Particuliers, Professionnels</td>
							<td class=" ">Media</td>
							<td class=" ">switch</td>
						</tr></tbody></table><div class="dataTables_info" id="critTab_info">Affichage de l'élement 1 à 10 sur 27 éléments</div><div class="dataTables_paginate paging_full_numbers" id="critTab_paginate"><a class="first paginate_button paginate_button_disabled" tabindex="0" id="critTab_first">Premier</a><a class="previous paginate_button paginate_button_disabled" tabindex="0" id="critTab_previous">Précédent</a><span><a class="paginate_active" tabindex="0">1</a><a class="paginate_button" tabindex="0">2</a><a class="paginate_button" tabindex="0">3</a></span><a class="next paginate_button" tabindex="0" id="critTab_next">Suivant</a><a class="last paginate_button" tabindex="0" id="critTab_last">Dernier</a></div></div>
				</fieldset>

				<div id="etape_valide">
					<span class="retour"><a href="/requeteur_test/?m=admin"> &lt; retour menu</a></span>
				</div>
			</div>
			<div class="clear"></div>

		</div>
<?php include 'includes/footer.php'; ?>