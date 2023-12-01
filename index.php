<?php
	include_once 'submit.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor de texto avançado</title>
	
	<!-- LuceqDEV Text (textarea) -->
	<script src="tinymce/tinymce.min.js"></script>
	<script src="tinymce/script.js"></script>
</head>
<body>
    <?php if(!empty($statusMsg)){ ?>
		<p class="stmsg"><?php echo $statusMsg; ?></p>
	<?php } ?>
	
	<h3>Editor de texto avançado</h3>
    <form method="post" action="submit.php">
        <textarea name="editor" id="default">Bem-vindo ao TinyMCE! Por: LuceqDEV</textarea>
        <br><input type="submit" name="submit" value="Enviar"></br>
    </form>
	
	<?php if(!empty($editorContent)){ ?>
		<div class="ed-cont">
			<h4>Inserted Content</h4>
			<?php echo $editorContent; ?>
		</div>
	<?php } ?>
	
	<script>
		TINYMCE.replace('editor');
	</script>
</body>
</html>