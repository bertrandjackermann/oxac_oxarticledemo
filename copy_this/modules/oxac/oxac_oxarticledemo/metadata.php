<?php
$sMetadataVersion = '1.2';

/**
 * Module information
 */
$aModule = array(
		'id'			=> 'oxac_oxarticledemo',
		'title'			=> array(
				'en'		=>	'Example extension for <i>oxArticle</i>',
				'de'		=>	'Beispiel-Erweiterung für <i>oxArticle</i>',
		),
		'description'	=> array(
				'en'		=>	'Demo extension',
				'de'		=>	'Muster',
		),
		'thumbnail'		=> '',
		'version'		=> '0.1',
		'author'		=> 'Johannes Ackermann',
		'url'			=> 'http://www.oxid-esales.com',
		'email' 		=> 'johannes.ackermann@oxid-esales.com',
		'extend'		=> array(
				'oxarticle'					=>	'oxac/oxac_oxarticledemo/models/oxac_oxarticledemo',
		),
		'blocks'		=>	array(
				array(
						'template'	=> 'page/details/inc/productmain.tpl',
						'block'		=> 'details_productmain_title',
						'file'		=> 'views/blocks/productmain_title_ext.tpl'
				),
		),
);