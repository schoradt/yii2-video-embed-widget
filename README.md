Yii2 Video Embed Widget
=====================
Yii2 Extension for Generating Video Embed Codes from Video URLs

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require cics/yii2-video-embed-widget "dev-master"
```

or add

```
"cics/yii2-video-embed-widget": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by:

```php
<?= \cics\widgets\AutoEmbed::widget(['url' => 'http://www.youtube.com/watch?v=NMjA5N7kbEQ']); ?>
```