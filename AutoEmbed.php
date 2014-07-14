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
	public $return_type;

    public function run()
    {
    	// make sure a source url was provided
		if ($this->url === null)
			return $return_type == 'boolean' ? false : 'Please pass a URL parameter to scan for a video.';

	    // include embed class
		include_once(__DIR__ . '/../../../vendor/embed/embed/Embed/autoloader.php');

	    // look up data on url
	    $data = \Embed\Embed::create($this->url);
		
		// make sure we received a video embed code
	    if (!is_object($data) || is_null($data->code))
			return $return_type == 'boolean' ? false : "Embed code could not be generated for this URL ({$this->url})";
		
		// return the video embed code
        return $data->code;
    }
}
