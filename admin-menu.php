<?php include 'includes/header.php'; ?>

		<div id="corps_content">
				<div class="clear"></div>
				<div id="content_block_nav">
					<nav class="admin">
						<h1>Administration</h1>
																		<fieldset>
							<legend>Utilisateurs</legend>
							<a href="/requeteur_test/?m=admin&amp;c=user">Gestion des utilisateurs</a><br>
							<a href="/requeteur_test/?m=admin&amp;c=user&amp;a=add">Création d'un nouvel utilisateur</a><br>
							<a href="/requeteur_test/?m=admin&amp;c=userType">Gestion des types d'utilisateurs</a><br>
						</fieldset>
																		<fieldset>
							<legend>Sociétés</legend>
							<a href="/requeteur_test/?m=admin&amp;c=societe">Gestion des sociétés</a><br>
							<a href="/requeteur_test/?m=admin&amp;c=groupe">Gestion des groupes</a><br>
						</fieldset>
																		<fieldset>
							<legend>Critères</legend>
							<a href="/requeteur_test/?m=admin&amp;c=modesaisie">Gestion des modes de saisie</a><br>
							<a href="/requeteur_test/?m=admin&amp;c=critere">Gestion des critères</a><br>
						</fieldset>
											</nav>
					<div id="etape_valide">
						<span class="retour"><a href="/requeteur_test"> &lt; retour</a></span>
					</div>
				</div>
			<div class="clear"></div>

		</div>

<?php include 'includes/footer.php'; ?>