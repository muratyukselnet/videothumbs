<?php

class videoThumbLink {


    // findout which video service is the link
    protected static function getVideoSite($link)
    {
        if(strpos($link,'youtube.com') !== false) return 'youtube';
        if(strpos($link,'dailymotion.com') !== false) return 'dailymotion';
        if(strpos($link,'vimeo.com') !== false) return 'vimeo';

        return false;
    }

    // find the video id of the video based on the service
    protected static function getVideoid($link, $site)
    {
        switch($site) {
            case 'youtube':
                $arr = explode('v=',$link);
                if(count($arr) <= 1) return false;
                $arr2 = explode('&',$arr[1]);
                return $arr2[0];
                break;
            case 'dailymotion':
                $arr = explode('/video/',$link);
                if(count($arr) <= 1) return false;
                $arr2 = explode('&',$arr[1]);
                return $arr2[0];
                break;
            case 'vimeo':
                $arr = explode('/',$link);
                if(count($arr) <= 1) return false;
                $id = end($arr);
                $id = explode('?',$id);
                return $id[0];
                break;
            default: return false;
        }
    }

    // main function that returns thumbnail url based on the service and link
    // if it fails it returns a placeholder image 300x200 (you can edit it as you wish)
    public static function getThumbLink($link)
    {
        $site = self::getVideoSite($link);
        switch($site) {
            case 'youtube':
                return 'http://img.youtube.com/vi/'.self::getVideoid($link, self::getVideoSite($link)).'/1.jpg';
                break;
            case 'dailymotion':
                return 'http://www.dailymotion.com/thumbnail/video/'.self::getVideoid($link, $site);
                break;
            case 'vimeo':
                $t = unserialize(file_get_contents('http://vimeo.com/api/v2/video/'.self::getVideoid($link, $site).'.php'));
                return $t[0]['thumbnail_medium'];
            default:
                return 'http://placehold.it/300x200';
        }

    }
} 