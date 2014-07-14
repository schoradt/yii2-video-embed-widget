<?php

namespace cics\widgets;
use Yii;

class AutoEmbed extends \yii\base\Widget
{
	public $url;
	public $embed_code;
	
    public function run()
    {

		if ($this->url === null)
			return 'Please pass a URL parameter into the widget';
			    	
	    // include the autoembed class
/* 		include(__DIR__ . '/lib/AutoEmbed-1.8/AutoEmbed.class.php'); */
	    Yii::$classMap['AutoEmbedGen'] = (__DIR__ . '/lib/AutoEmbed-1.8/AutoEmbed.class.php');
	    $ae = new AutoEmbedGen();
	    
	    // try to generate embed code from passed url
/*
		Yii::$classMap['myclassname'] = __DIR__ . '/lib/AutoEmbed-1.8/AutoEmbed.class.php';
		$ae = new myclassname();
*/
		
		// load the embed source from a remote url
/* 		if (!$ae->parseUrl($this->url)) */
			return "Embed code could not be generated for this URL ({$this->url})";

        return $this->embed_code;
    }
}
