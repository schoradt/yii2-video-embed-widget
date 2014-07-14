<?php

/**
 * @copyright Copyright &copy; CICSolutions, CICSolutions.com, 2014
 * @package yii2-video-embed-widget
 * @version 1.0.0
 */

namespace cics\widgets;

use yii\helpers\Html;

class AutoEmbed extends \yii\base\Widget
{
	public $url;

    public function run()
    {
    	// make sure a source url was provided
		if ($this->url === null)
			return 'Please pass a URL parameter into the widget';

	    // include embed class
		include_once(__DIR__ . '/../../../vendor/embed/embed/Embed/autoloader.php');

	    // look up data on url
	    $data = \Embed\Embed::create($this->url);

	    if (!is_object($data) || is_null($data->code))
	    	return "Embed code could not be generated for this URL ({$this->url})";

        return $data->code;
    }
}
