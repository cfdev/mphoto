/**
	Mise en forme du plugin contact
*/
$(document).ready(function(){

	// Recherche le lien du contact
	$( '.nav a[title=Contact]' ).addClass( 'text-uppercase' );	
	$( '.nav a[title=Contact]' ).prepend( "<i class=\"fa fa-envelope-o\"></i> " );
	
	// Page contact	
	$( '#static-page-contact h1' ).prepend( "<i class=\"fa fa-envelope-o\"></i> " );
	
	$( '#form_contact input[name=name]' ).wrap( '<div id="mname" class="input-group"></div>' );
	$( '#form_contact #mname.input-group' ).prepend( '<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span> ' );

	$( '#form_contact input[name=mail]' ).wrap( '<div  id="mmail" class="input-group"></div>' );
	$( '#form_contact #mmail.input-group' ).prepend( '<span class="input-group-addon" id="basic-addon1">@</span> ' );	
	
	$( '#form_contact input[name=rep]' ).wrap( '<div  id="mrep" class="input-group"></div>' );
	$( '#form_contact #mrep.input-group' ).prepend( '<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></span> ' );	
		
});