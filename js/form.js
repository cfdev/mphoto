/**
	Mise en forme boostrap des form
*/
$(document).ready(function(){

		// Recherche les balises inputs de type text
		$( 'input[type=text]' ).addClass( 'form-control' );
		
		// Recherche les balises textarea
		$( 'textarea' ).addClass( 'form-control' );
		
		// Recherche les balises inputs de type button
		$( 'input[type=submit]' ).addClass( 'btn btn-default' );
		
		// Suppression du bouton reset inutile
		$( 'input[type=reset]' ).remove();
		
		// Recherche des capcha-base
		$( '.capcha-letter' ).addClass( 'label label-default' );
		$( '.capcha-word' ).addClass( 'label label-primary' );
		
		// Contact messages et Commentaire
		$( '.contact_error, .com-alert' ).addClass( 'alert alert-danger' );
		$( '.contact_error' ).removeClass( 'contact_error' );
	
		$( '.contact_success' ).addClass( 'alert alert-success' );
		$( '.contact_success' ).removeClass( 'contact_success' );	
		
		
});