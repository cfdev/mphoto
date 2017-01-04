<?php

/**
 * Lib cfImgReader
 *
 * @version	0.2
 * @date	04/01/2017
 * @author	Cyril Frausti cfdev - http://cfdev.fr
 * @Licence GPL V3 
 **/

class cfImgReader{
	private $mImg;

	public function __construct($img) {
		$this->mImg = $img;
	}

	function show_exif($format){
		$data = exif_read_data($this->mImg, ANY_TAG, true);
		//plxUtils::debug($data);

		// test de l'affichage du details
		// Si pas d'info sur lappareil on n'affiche rien.
		if(empty($data['IFD0']['Make'])) {
			echo "";
		}
		else{
			#COMPUTED
			$val = str_replace('#Height', strtolower($data['COMPUTED']['Height']) ? strtolower($data['COMPUTED']['Height']): '--', $format);
			$val = str_replace('#Width', strtolower($data['COMPUTED']['Width']) ? strtolower($data['COMPUTED']['Width']): '--', $val);
			$val = str_replace('#Aperture', strtolower($data['COMPUTED']['ApertureFNumber']) ? strtolower($data['COMPUTED']['ApertureFNumber']): '--', $val);

			#IFD0
			$val = str_replace('#Make', strtolower($data['IFD0']['Make']) ? strtolower($data['IFD0']['Make']): '--', $val);
			$val = str_replace('#Model', strtolower($data['IFD0']['Model']) ? strtolower($data['IFD0']['Model']): '--', $val);
			$val = str_replace('#Copyright', strtolower($data['IFD0']['Copyright']) ? strtolower($data['IFD0']['Copyright']): '--', $val);
			$val = str_replace('#Author', strtolower($data['IFD0']['Author']) ? strtolower($data['IFD0']['Author']): '--', $val);

			#EXIF
			$val = str_replace('#ISO', strtolower($data['EXIF']['ISOSpeedRatings']) ? strtolower($data['EXIF']['ISOSpeedRatings']): '--', $val);
			$val = str_replace('#ExpoTime', strtolower($data['EXIF']['ExposureTime']), $val);
			$val = str_replace('#FLength', strtolower($data['EXIF']['FocalLength']), $val);

			echo $val;
		}
	}

	/**
		return css to correct orientation
	*/
	function fixRotate_exif(){
		$data = exif_read_data($this->mImg, ANY_TAG, true);
		//plxUtils::debug($data);

		switch($data['IFD0']['Orientation']) {
			case 2:
				return 'flip';
			case 3:
				return'rotate-180';
			case 4:
				return'flip rotate-180';
			case 5:
				return'flip rotate-270';
			case 6:
				return'rotate-90';
			case 7:
				return'flip rotate-90';
			case 8:
				return'rotate-270';
		}
	}
}

?>
