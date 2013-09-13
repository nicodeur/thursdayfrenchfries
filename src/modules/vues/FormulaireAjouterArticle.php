<article>
	<h1>Ajouter un article</h1>

	<form target="cible" action="afficherModule.php?module=ajouterArticle" method="POST" enctype="multipart/form-data" id="formAjouterArticle">
		<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
		img 1 : <input name="img1" type="file" /> <br />
		img 2 : <input name="img2" type="file" /> <br /><!-- ne sont pas passé dans le post :s -->
		img 3 : <input name="img3" type="file" /> <br />
		texte : 
				<textarea name="texte"></textarea>
				<br />
		<input type="submit" value="Ajouter" />
	</form>
	
	<iframe name='cible'></iframe>
</article>