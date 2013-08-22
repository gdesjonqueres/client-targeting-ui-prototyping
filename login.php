<?php include 'includes/header.php'; ?>

		<div id="corps_content">
						<div class="clear"></div>
			<div id="content_block_nav">
				<h1>Connexion au requeteur</h1>
								<fieldset>
					<legend>Veuillez renseigner vos identifiants de connexion</legend>
					<form action="/requeteur_test/?a=login" method="post">

						<table cellspacing="20px" align="center">
							<tbody><tr>
								<td><label>Adresse email</label></td>
              					<td><input type="text" tabindex="1" name="login"></td>
              					<td align="center" rowspan="2"><input type="submit" tabindex="3" value="Connexion"></td>
							</tr>
							<tr>
								<td><label>Mot de passe</label></td>
              					<td><input type="password" tabindex="2" name="mdp"></td>
							</tr>
						</tbody></table>
					</form>
				</fieldset>
				<div class="connexion_footer">
					<p>
						La connexion à votre espace personnel est entièrement sécurisée. <br>
						Vos données sont protégées par nos logiciels. <br>
						Pour toutes demandes d'infomations: <br>
						<a href="mailto:contact@dataneo.fr" style="text-decoration:underline;">contact@dataneo.fr</a>
					</p>
				</div>
			</div>
			<div class="clear"></div>

		</div>

<?php include 'includes/footer.php'; ?>