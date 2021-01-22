<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title>Un livre d'or avec CodeIgniter</title>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->config->item('charset'); ?>" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo css_url('livreor/style'); ?>" />
	</head>
	<style>
		*
{
    margin: 0;
    padding: 0;
}

.pagination
{
    text-align: center;
}

#messages
{
    margin: auto;
    width: 80%;
}

#messages .message
{
    margin: 1% auto;
    padding: 3%;
    border: 1px outset red;
}

form
{
    margin: 2% auto;
    padding: 1.5%;
    width: 85%;
    border: 1px inset green;
    text-align: center;
}

form input
{
    margin-bottom: 1.5%;
}

form textarea
{
    margin-bottom: 1.5%;
    width: 70%;
}

#confirmation
{
    margin: 1%;
    padding: 1.5%;
    border: 1px outset blue;
    color: rgb(158, 10, 10);
}

.form_erreur
{
    color: red;
}

	</style>
	<body>
		<form method="post" action="">
			<div>
				<label>
					Pseudo :
					<input type="text" name="pseudo" value="<?php echo set_value('pseudo'); ?>" />
				</label>
				<?php echo form_error('pseudo'); ?>
			</div>
			<div>
				<label>
					Message : <br />
					<textarea name="contenu" rows="7" cols="60"><?php echo set_value('contenu'); ?></textarea>
				</label>
				<?php echo form_error('contenu'); ?>
			</div>
			<p>
				<input type="submit" value="Valider votre commentaire" />
			</p>
		</form>
	</body>
</html>