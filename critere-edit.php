<?php include 'includes/header.php'; ?>

<div id="corps_content">
						<div class="clear"></div>
			<div id="content_block_nav">
				<h1>Fiche critère</h1>
				<h2>1 - Ville</h2>
								<fieldset>
					<legend>Informations critère</legend>
					<form action="/requeteur_test/?m=admin&amp;c=critere&amp;a=edit" method="post">
						<table style="margin-left: 29px;margin-top: -5px;width:580px;">
							<tbody><tr>
								<td align="left">Code</td>
								<td><input type="text" value="insee" id="code" name="code"></td>
								<td align="left">Libellé</td>
								<td><input type="text" value="Ville" id="libelle" name="libelle"></td>
							</tr>

							<tr>
								<td align="left">Libellé court</td>
								<td><input type="text" value="Ville" id="libellecourt" name="libellecourt"></td>
							</tr>

							<tr>
								<td align="left">Type de critère</td>
								<td>
																		<select name="type" style="width: 165px;">
										<option value="">-- Sélectionnez --</option>
																			<option value="6">
											Divers</option>
																			<option selected="" value="1">
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
																			<option selected="" value="liste">
											Liste</option>
																			<option value="switch">
											Switch</option>
																		</select>
								</td>
							</tr>

							<tr>
								<td align="left">Type de cible</td>
								<td align="left" colspan="3"><input type="checkbox" checked="checked" value="Particuliers" id="cibletype_part" name="cibletype[part]"><label for="cibletype_part">Particuliers</label>&nbsp;<input type="checkbox" checked="checked" value="Professionnels" id="cibletype_pro" name="cibletype[pro]"><label for="cibletype_pro">Professionnels</label></td>
							</tr>

							<tr>
								<td align="left">Scoring</td>
								<td align="left"><input type="checkbox" value="1" id="scoring" name="scoring"></td>
								<td align="left">Location</td>
								<td align="left"><input type="checkbox" value="1" id="location" name="location"></td>
							</tr>

							<tr>
								<td align="left">Champ SQL</td>
								<td align="left"><input type="text" value="CD_INSEE" id="champsql" name="champsql"></td>
							</tr>

							<tr>
								<td align="left">Code SQL</td>
								<td align="left" colspan="3"><textarea name="codesql" id="codesql" cols="50" rows="5"></textarea></td>
							</tr>
						</tbody></table>
						<input type="hidden" value="1" name="id">
						<input type="submit" value="Valider">
					</form>
				</fieldset>

							<div id="critere-args">
								<fieldset>
										<legend class="closed">
						Bouton radio (radio)					</legend>
					<form style="display:none;" method="post" action="/requeteur_test/?m=admin&amp;c=critere&amp;a=edit">
						<table style="text-align:left;">
														<tbody><tr>
								<td>desc</td>
								<td><textarea name="args[desc][valeur]" cols="30" rows="3"></textarea></td>
								<td>
									<select name="args[desc][type]" style="width: 165px;">
										<option value="">-- Sélectionnez --</option>
																			<option value="string">
											String</option>
																			<option value="callable">
											Callable</option>
																			<option value="json">
											Json</option>
																			<option value="serialized">
											Serialized</option>
																			<option value="sql">
											Sql</option>
																		</select>
								</td>
							</tr>
														<tr>
								<td>liste</td>
								<td><textarea name="args[liste][valeur]" cols="30" rows="3"></textarea></td>
								<td>
									<select name="args[liste][type]" style="width: 165px;">
										<option value="">-- Sélectionnez --</option>
																			<option value="string">
											String</option>
																			<option value="callable">
											Callable</option>
																			<option value="json">
											Json</option>
																			<option value="serialized">
											Serialized</option>
																			<option value="sql">
											Sql</option>
																		</select>
								</td>
							</tr>
													</tbody></table>
						<input type="hidden" value="modesaisie" name="mode">
						<input type="hidden" value="1" name="id">
						<input type="hidden" value="1" name="modesaisie">
						<input type="submit" value="Enregistrer">
					</form>
				</fieldset>
								<fieldset>
										<legend class="closed">
						Cases à cocher (checkbox)					</legend>
					<form style="display:none;" method="post" action="/requeteur_test/?m=admin&amp;c=critere&amp;a=edit">
						<table style="text-align:left;">
														<tbody><tr>
								<td>desc</td>
								<td><textarea name="args[desc][valeur]" cols="30" rows="3"></textarea></td>
								<td>
									<select name="args[desc][type]" style="width: 165px;">
										<option value="">-- Sélectionnez --</option>
																			<option value="string">
											String</option>
																			<option value="callable">
											Callable</option>
																			<option value="json">
											Json</option>
																			<option value="serialized">
											Serialized</option>
																			<option value="sql">
											Sql</option>
																		</select>
								</td>
							</tr>
														<tr>
								<td>liste</td>
								<td><textarea name="args[liste][valeur]" cols="30" rows="3"></textarea></td>
								<td>
									<select name="args[liste][type]" style="width: 165px;">
										<option value="">-- Sélectionnez --</option>
																			<option value="string">
											String</option>
																			<option value="callable">
											Callable</option>
																			<option value="json">
											Json</option>
																			<option value="serialized">
											Serialized</option>
																			<option value="sql">
											Sql</option>
																		</select>
								</td>
							</tr>
													</tbody></table>
						<input type="hidden" value="modesaisie" name="mode">
						<input type="hidden" value="1" name="id">
						<input type="hidden" value="2" name="modesaisie">
						<input type="submit" value="Enregistrer">
					</form>
				</fieldset>
								<fieldset>
										<legend class="closed">
						Intervalle (intervalle)					</legend>
					<form style="display:none;" method="post" action="/requeteur_test/?m=admin&amp;c=critere&amp;a=edit">
						<table style="text-align:left;">
														<tbody><tr>
								<td>desc</td>
								<td><textarea name="args[desc][valeur]" cols="30" rows="3"></textarea></td>
								<td>
									<select name="args[desc][type]" style="width: 165px;">
										<option value="">-- Sélectionnez --</option>
																			<option value="string">
											String</option>
																			<option value="callable">
											Callable</option>
																			<option value="json">
											Json</option>
																			<option value="serialized">
											Serialized</option>
																			<option value="sql">
											Sql</option>
																		</select>
								</td>
							</tr>
														<tr>
								<td>liste</td>
								<td><textarea name="args[liste][valeur]" cols="30" rows="3"></textarea></td>
								<td>
									<select name="args[liste][type]" style="width: 165px;">
										<option value="">-- Sélectionnez --</option>
																			<option value="string">
											String</option>
																			<option value="callable">
											Callable</option>
																			<option value="json">
											Json</option>
																			<option value="serialized">
											Serialized</option>
																			<option value="sql">
											Sql</option>
																		</select>
								</td>
							</tr>
													</tbody></table>
						<input type="hidden" value="modesaisie" name="mode">
						<input type="hidden" value="1" name="id">
						<input type="hidden" value="3" name="modesaisie">
						<input type="submit" value="Enregistrer">
					</form>
				</fieldset>
								<fieldset>
										<legend class="closed">
						Arborescence (tree)					</legend>
					<form style="display:none;" method="post" action="/requeteur_test/?m=admin&amp;c=critere&amp;a=edit">
						<table style="text-align:left;">
														<tbody><tr>
								<td>desc</td>
								<td><textarea name="args[desc][valeur]" cols="30" rows="3"></textarea></td>
								<td>
									<select name="args[desc][type]" style="width: 165px;">
										<option value="">-- Sélectionnez --</option>
																			<option value="string">
											String</option>
																			<option value="callable">
											Callable</option>
																			<option value="json">
											Json</option>
																			<option value="serialized">
											Serialized</option>
																			<option value="sql">
											Sql</option>
																		</select>
								</td>
							</tr>
														<tr>
								<td>liste</td>
								<td><textarea name="args[liste][valeur]" cols="30" rows="3"></textarea></td>
								<td>
									<select name="args[liste][type]" style="width: 165px;">
										<option value="">-- Sélectionnez --</option>
																			<option value="string">
											String</option>
																			<option value="callable">
											Callable</option>
																			<option value="json">
											Json</option>
																			<option value="serialized">
											Serialized</option>
																			<option value="sql">
											Sql</option>
																		</select>
								</td>
							</tr>
													</tbody></table>
						<input type="hidden" value="modesaisie" name="mode">
						<input type="hidden" value="1" name="id">
						<input type="hidden" value="4" name="modesaisie">
						<input type="submit" value="Enregistrer">
					</form>
				</fieldset>
								<fieldset>
										<legend class="open">
						Rechercher (autocomplete) *					</legend>
					<form method="post" action="/requeteur_test/?m=admin&amp;c=critere&amp;a=edit">
						<table style="text-align:left;">
														<tbody><tr>
								<td>desc</td>
								<td><textarea name="args[desc][valeur]" cols="30" rows="3">Saisissez les 3 premières lettres d'une commune</textarea></td>
								<td>
									<select name="args[desc][type]" style="width: 165px;">
										<option value="">-- Sélectionnez --</option>
																			<option selected="" value="string">
											String</option>
																			<option value="callable">
											Callable</option>
																			<option value="json">
											Json</option>
																			<option value="serialized">
											Serialized</option>
																			<option value="sql">
											Sql</option>
																		</select>
								</td>
							</tr>
														<tr>
								<td>search</td>
								<td><textarea name="args[search][valeur]" cols="30" rows="3">Comptage_Model_Common::lookup</textarea></td>
								<td>
									<select name="args[search][type]" style="width: 165px;">
										<option value="">-- Sélectionnez --</option>
																			<option selected="" value="string">
											String</option>
																			<option value="callable">
											Callable</option>
																			<option value="json">
											Json</option>
																			<option value="serialized">
											Serialized</option>
																			<option value="sql">
											Sql</option>
																		</select>
								</td>
							</tr>
													</tbody></table>
						<input type="hidden" value="modesaisie" name="mode">
						<input type="hidden" value="1" name="id">
						<input type="hidden" value="5" name="modesaisie">
						<input type="submit" value="Enregistrer">
					</form>
				</fieldset>
								<fieldset>
										<legend class="open">
						Importer (import) *					</legend>
					<form method="post" action="/requeteur_test/?m=admin&amp;c=critere&amp;a=edit">
						<table style="text-align:left;">
														<tbody><tr>
								<td>desc</td>
								<td><textarea name="args[desc][valeur]" cols="30" rows="3">Coller les codes à importer</textarea></td>
								<td>
									<select name="args[desc][type]" style="width: 165px;">
										<option value="">-- Sélectionnez --</option>
																			<option selected="" value="string">
											String</option>
																			<option value="callable">
											Callable</option>
																			<option value="json">
											Json</option>
																			<option value="serialized">
											Serialized</option>
																			<option value="sql">
											Sql</option>
																		</select>
								</td>
							</tr>
														<tr>
								<td>filter</td>
								<td><textarea name="args[filter][valeur]" cols="30" rows="3">Comptage_Model_Common::filter</textarea></td>
								<td>
									<select name="args[filter][type]" style="width: 165px;">
										<option value="">-- Sélectionnez --</option>
																			<option value="string">
											String</option>
																			<option selected="" value="callable">
											Callable</option>
																			<option value="json">
											Json</option>
																			<option value="serialized">
											Serialized</option>
																			<option value="sql">
											Sql</option>
																		</select>
								</td>
							</tr>
														<tr>
								<td>titre</td>
								<td><textarea name="args[titre][valeur]" cols="30" rows="3"></textarea></td>
								<td>
									<select name="args[titre][type]" style="width: 165px;">
										<option value="">-- Sélectionnez --</option>
																			<option value="string">
											String</option>
																			<option value="callable">
											Callable</option>
																			<option value="json">
											Json</option>
																			<option value="serialized">
											Serialized</option>
																			<option value="sql">
											Sql</option>
																		</select>
								</td>
							</tr>
													</tbody></table>
						<input type="hidden" value="modesaisie" name="mode">
						<input type="hidden" value="1" name="id">
						<input type="hidden" value="6" name="modesaisie">
						<input type="submit" value="Enregistrer">
					</form>
				</fieldset>
							</div>
				<div id="etape_valide">
					<span class="retour"><a href="/requeteur_test/?m=admin&amp;c=critere"> &lt; retour</a></span>
				</div>
			</div>
			<div class="clear"></div>

		</div>

<?php include 'includes/footer.php'; ?>