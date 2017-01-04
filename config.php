<?php 
/**
	Author: cfdev
	website: http://cfdev.fr/
	Bootstrap: http://http://getbootstrap.com
	Shortcodes plugin: http://secretsitebox.fr/site/index.php?categorie2/pluxml-plugins#post-10/
	
*/     
   
  
/**
	GALLERY photo
*/  
function gallery_shortcode( $atts, $content = null ) {

	// extract attibuts of shortcodes
	extract( shortcode_atts( array(
      'src' => 'src',
      ), $atts ) );

	$_get=plxUtils::getGets(); 
	$id=explode('/',$_get); 
	$directory = 'data/medias/'.$src;	//where the gallery images are located
	$allowed_types=array('jpg','jpeg','gif','png');	//allowed image types

	$file_parts=array();
	$ext='';
	$title='';
	$i=0;

	//try to open the directory
	$dir_handle = @opendir($directory) or die("There is an error with your image directory!".$directory);

	$val = '<ul class="row gal">';
	while ($file = readdir($dir_handle))
	{
		//skip links to the current and parent directories
		if($file=='.' || $file == '..') continue;	

		$file_parts = explode('.',$file);			//split the file name and put each part in an array
		$ext = strtolower(array_pop($file_parts));	//the last element is the extension
		$title_origin = implode('.',$file_parts);	//once the extension has been popped out, all that is left is the file name
		$title = htmlspecialchars($title_origin);	//make the filename html-safe to prevent potential security issues

		if(in_array($ext,$allowed_types) and !in_array('tb',$file_parts))	//if the extension is an allowable type
		{
			$val .= '
			<li class="pic col-xs-6 col-sm-4 col-md-3 col-lg-3" style="background:url('.$directory.'/'.$title_origin.'.tb.'.$ext.') no-repeat 50% 50%;">
			<a href="'.$directory.'/'.$file.'" title="'.$title.'" class="zoombox zgallery1">'.$title.'</a>
			</li>';
			$i++;	//increment the image counter
		} 
	}
	$val .= '</ul>';
			
 	return $val;
}
add_shortcode('gallery', 'gallery_shortcode'); 

?>