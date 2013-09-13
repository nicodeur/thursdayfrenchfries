<article>
	<h1>Gerer les pages textes</h1>
	
	<?php
		//print_r($lesPages);
		
		foreach($lesPages as $page) {
			echo "<a href=\"javascript:chargerEditor('#editor1','".$page['nom']."')\">".$page['nom']."</a>";
		}
	?>
	
	
	 <form method="post">
        <p>
            Editer les pages:<br> <input type="button" value="Sauvegarder" onclick="sauvegarderEditor()">
            <textarea name="editor1" id="editor1"></textarea>
            <script>
                CKEDITOR.replace( 'editor1' );
            </script>
        </p>
        <p>
            
        </p>
    </form>
	
</article>