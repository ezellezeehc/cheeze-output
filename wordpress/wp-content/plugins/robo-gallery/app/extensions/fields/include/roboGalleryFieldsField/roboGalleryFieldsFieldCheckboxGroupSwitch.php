<?php
/* 
*      Robo Gallery     
*      Version: 3.1.9 - 23494
*      By Robosoft
*
*      Contact: https://robogallery.co/ 
*      Created: 2021
*      Licensed under the GPLv2 license - http://opensource.org/licenses/gpl-2.0.php

 */

class roboGalleryFieldsFieldCheckboxGroupSwitch extends roboGalleryFieldsFieldCheckboxGroup{
	
	protected function getDefaultOptions(){
		return array(
			'size' 		=> 'large',
			'onLabel' 	=> __('On', 'robo-gallery'),
			'offLabel' 	=> __('Off', 'robo-gallery'),
		);
	}

}
