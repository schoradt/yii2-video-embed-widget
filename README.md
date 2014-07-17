Yii2 Video Embed Widget
=====================
Yii2 Extension for Generating Video Embed Codes from Video URLs.

This widget will return the video embed code when passed a valid url containing a video on the page.

> NOTE: This extension depends on the [embed/embed] (https://github.com/oscarotero/Embed) package, created by Oscar Otero (https://github.com/oscarotero). Oscar's Embed class does all the heavy lifting in generating the video embed code based on the supplied video URL.  I've simply created a Yii2 wrapper widget with some additional settings.  

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
<?= \cics\widgets\AutoEmbed::widget(['url' => 'http://www.youtube.com/watch?v=NMjA5N7kbEQ', 'show_errors' => true]); ?>
```

or add the namespace first and only reference the class name when echoing the returned embed code.

```php
use cics\widgets\AutoEmbed;

<?= AutoEmbed::widget(['url' => 'http://www.youtube.com/watch?v=NMjA5N7kbEQ', 'show_errors' => true]); ?>
```
