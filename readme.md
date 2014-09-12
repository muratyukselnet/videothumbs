# Video Services Thumbnail Images #

If you need thumbnail images of some known video services. You can simply use this class
to get the image link with passing video url to a single method.

## Covered Services ##

<ul>
<li>Youtube</li>
<li>Dailymotion</li>
<li>Vimeo</li>
</ul>

(you can extend it to any service you want and send a pull request)

## Usage ##

```
<img src="<?php echo videoThumbLink::getThumbLink($videoUrl); ?>" />
```
