<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package 		PyroCMS
 * @subpackage 		Widgets
 * @author			PyroCMS Development Team
 *
 * Show RSS feeds in your site
 */

class Widget_Social_bookmark extends Widgets
{
	public $title		= array(
		'en' => 'Social Bookmark',
		'el' => 'Κοινωνική δικτύωση',
		'nl' => 'Sociale Bladwijzers',
		'fr' => 'Réseaux sociaux',
		'br' => 'Social Bookmark',
		'ru' => 'Социальные закладки',
		);
	public $description	= array(
		'en' => 'Configurable social bookmark links from AddThis',
		'el' => 'Παραμετροποιήσιμα στοιχεία κοινωνικής δικτυώσης από το AddThis',
		'nl' => 'Voeg sociale bladwijzers toe vanuit AddThis',
		'fr' => 'Liens configurables vers les réseaux sociaux via AddThis',
		'br' => 'Adiciona links de redes sociais usando o AddThis, podendo fazer algumas configurações',
		'ru' => 'Конфигурируемые социальные закладки с сайта AddThis',
	);
	public $author		= 'Phil Sturgeon';
	public $website		= 'http://philsturgeon.co.uk/';
	public $version		= '1.0';
	
	public $fields = array(
		array(
			'field' => 'mode',
			'label' => 'Mode',
			'rules' => 'required'
		)
	);

	public function run($options)
	{
		!empty($options['mode']) OR $options['mode'] = 'default';
		
		return $options;
	}
}