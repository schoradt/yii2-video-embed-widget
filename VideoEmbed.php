<?php

/**
 * @copyright Copyright &copy; CICSolutions, CICSolutions.com, 2014
 * @package yii2-video-embed-widget
 * @version 1.0.0
 */

namespace cics\widgets;

use yii\helpers\Html;

class VideoEmbed extends \yii\base\Widget
{
	public $url				= null;
	public $show_errors 	= false;
	public $responsive 		= true;
	public $container_id	= '';
	public $container_class = '';

    public function run()
    {
    	// make sure a source url was provided
		if (is_null($this->url) || empty($this->url))
			return $this->show_errors ? 'Please pass a URL parameter to scan for a video to embed.' : false;

	    // include embed class
		include_once(__DIR__ . '/../../../vendor/embed/embed/Embed/autoloader.php');

	    // look up data for the supplied url
	    $data = \Embed\Embed::create($this->url);
		
		// make sure we received a video embed code
	    if (!is_object($data) || is_null($data->code))
			return $this->show_errors ? "Embed code could not be generated for this URL ({$this->url})" : false;
		
		// build the video container with custom id and class if desired - also set responsiveness (video-container)
		if ($this->responsive || !empty($this->container_id) || !empty($this->container_class)) {
			$responsive = $this->responsive ? 'video-container ' : '';			
			$data->code = '<div id="' . $this->container_id . '" class="' . $responsive . $this->container_class . '">' . $data->code . '</div>';
		}
		
		// return the video embed code
        return $data->code;
    }
}
