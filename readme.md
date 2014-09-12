# Video Services Thumbnail Images #

If you need thumbnail images of some known video services. You can simply use this class
to get the image link with passing video url to a single method.

 ## Covered Services ##
 1. Youtube
 2. Dailymotion
 3. Vimeo

 (you can extend it to any service you want and send a pull request)

 ## Usage ##

 ```
 <img src="<?php echo videoThumbLink::getThumbLink($videoUrl); ?>" />
 ```
