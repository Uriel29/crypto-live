<?php
/**
* @version 			SEBLOD 3.x More
* @package			SEBLOD (App Builder & CCK) // SEBLOD nano (Form Builder)
* @url				https://www.seblod.com
* @editor			Octopoos - www.octopoos.com
* @copyright		Copyright (C) 2009 - 2018 SEBLOD. All Rights Reserved.
* @license 			GNU General Public License version 2 or later; see _LICENSE.php
**/

defined( '_JEXEC' ) or die;

// Plugin
class plgCCK_Field_LiveCrypto_Live extends JCckPluginLive
{
	protected static $type	=	'crypto_live';
	
	// -------- -------- -------- -------- -------- -------- -------- -------- // Prepare
		
	// onCCK_Field_LivePrepareForm
	public function onCCK_Field_LivePrepareForm( &$field, &$value = '', &$config = array(), $inherit = array() )
	{
		if ( self::$type != $field->live ) {
			return;
		}
		
		// Init
		$live		=	'#';
		$options	=	parent::g_getLive( $field->live_options );
		//print_r($options);

				   

	
	
		 $max =	(int)$options->get( 'max');
		
		$cry  =  $options->get('crypt2');

		
		if($cry == 'sha1'){
			
			if($max){
				$value =  substr(sha1(time()), 0, $max);}
			else{
				$value =  substr(sha1(time()), 0);

			}
			

		}else {
			if($max){
			
			$value = substr(md5(time()), 0, $max );
			}
		    else{
				$value = substr(md5(time()), 0,);

			}
		}

	} 
}
?>