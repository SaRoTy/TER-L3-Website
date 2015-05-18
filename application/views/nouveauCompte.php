<h1>Création d'un nouveau Compte</h1>
<form action = 'nouveauCompte' method='POST'>
	<label for="pseudo">Pseudo : </label>
	<input type="text" name="pseudo" value="<?php echo set_value('pseudo'); ?>" /></br></br>
	<label for="mdp">Mot de passe :</label>
	<input type="password" name="mdp" value="" />
	<?php echo form_error('mdp'); ?></br></br>
	<label for="email">Adresse mail : </label>
	<input type="text" name="email" value="<?php echo set_value('email'); ?>" /></br></br>
	<input type="submit" value="Envoyer" />
</form>