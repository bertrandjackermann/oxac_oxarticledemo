<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'			=>  'oxac_oxarticledemo',
    'title'			=>  [
        'en'		=>  'Example extension for <i>oxArticle</i>',
        'de'		=>  'Beispiel-Erweiterung für <i>oxArticle</i>',
    ],
    'description'	=>  [
        'en'		=>	'Demo extension',
        'de'		=>	'Muster',
    ],
    'thumbnail'		=>  '',
    'version'		=>  '1.0.0',
    'author'		=>  'Johannes Ackermann',
    'url'			=>  'http://www.oxid-esales.com',
    'email' 		=>  'johannes.ackermann@oxid-esales.com',
    'extend'		=>  [
        \OxidEsales\Eshop\Application\Model\Article::class  =>	OxidEsales\OxidAcademy\ArticleDemoModule\Model\Article::class,
    ],
    'blocks'		=>	[
        [
            'template'	=> 'page/details/inc/productmain.tpl',
            'block'		=> 'details_productmain_title',
            'file'		=> 'views/blocks/productmain_title_ext.tpl'
        ],
    ],
];