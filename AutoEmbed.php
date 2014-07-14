<?php

namespace cics\widgets;

class AutoEmbed extends \yii\base\Widget
{
	public $url;
	
	public function init()
	{
		parent::init();
		
		if ($this->url === null) {
			return 'Please pass a URL parameter into the widget';
		}
	}
	
    public function run()
    {
        return "Hello!";
    }
}
