function ouvrir(module) {
	ouvrir(module,'');
}

function ouvrir(module, parametre) {	
	$.ajax({
		url :'afficherModule.php',
		data : {module : module},
		method : 'GET'
	}).done(function(html) {	
		//$("#container").html(html);
		
		$("#container").fadeOut(300,function() {
			$("#container").html(html);
			$("#container").fadeIn(300);
			transformerLiensJavascript();
		});
	});
	
	
	
	//'afficherModule.php?module='+module+ ((parametre!='')?'&'+parametre:'') );
	
}




function validerFormulaire(idForm) {	
	$('#'+idForm).submit(function() {
		s = $('#'+idForm).serialize();
		$.ajax({
			type: "POST",
			data: s,
			url: $('#'+idForm).attr("action"),
			success: function(retour){
				$("#container").empty().append(retour);
			}
		});
		return false;
	});
}

function transformerLiensJavascript() {
	$('a').each(function(i) {
		lien = $(this).attr('href');
		if(lien.contains('index.php?module=')) {
			$(this).attr('href','javascript:');
			
			lien = lien.substring(17);			
			
			$(this).attr('onclick',"ouvrir('"+lien+"')");
			
		}
	});
}

// quand la page est charge, on modifie tous les liens sur des liens javascript
$(document).ready(function(){
	transformerLiensJavascript();
});





var pageEnCours='accueil'
// le module de gestion des pages
function chargerEditor(contenaire, module) {	
	$.ajax({
		url :'afficherModule.php',
		data : {module : module},
		method : 'GET'
	}).done(function(html) {	
		CKEDITOR.instances.editor1.setData(html);
		pageEnCours=module;
	});
}

function sauvegarderEditor() {
	 var editor_data = CKEDITOR.instances.editor1.getData();
	 alert(editor_data);
	 $.ajax({
		url :'afficherModule.php',
		data : {module:'sauvegarderPageTexte',page:pageEnCours,data:editor_data},
		method : 'GET'
	 }).done(function(html) {
		CKEDITOR.instances.editor1.setData('savé!'+html);
		//alert('Sauvegardé!"' + html+'"');
	 });
}