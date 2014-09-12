<?php

include 'videoThumbLink.php';

$videoUrl1 = 'http://www.youtube.com/watch?v=g2cF4-tHvqI';
$videoUrl2 = 'http://www.dailymotion.com/video/xfbzic_richard-stallman-free-software-song_music';
$videoUrl3 = 'http://vimeo.com/3642750';
$videoUrl4 = 'http://xyz.com/124124';

?>
<style>
    img {
        width: 300px;
        height: 200px;
    }
</style>
<h3>Youtube</h3>
<img src="<?php echo videoThumbLink::getThumbLink($videoUrl1); ?>" />
<h3>Dailymotion</h3>
<img src="<?php echo videoThumbLink::getThumbLink($videoUrl2); ?>" />
<h3>Vimeo</h3>
<img src="<?php echo videoThumbLink::getThumbLink($videoUrl3); ?>" />
<h3>Not Recognized</h3>
<img src="<?php echo videoThumbLink::getThumbLink($videoUrl4); ?>" />