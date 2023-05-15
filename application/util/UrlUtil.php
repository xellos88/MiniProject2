<?php

namespace application\util;

class UrlUtil{

    //$_GET["url"]을 분석해서 리턴
    public static function getUrl(){//현재 URL을 반환
        //$_GET 배열에서 url 키가 존재하는지 확인하고, 존재하는 경우 url 키의 값을 반환하고, 존재하지 않는 경우 ""를 반환
        return $path = isset($_GET["url"]) ? $_GET["url"] :"";//
    }

    //URL을 "/"로 구분해서 배열을 만들고 리턴
    public static function getUrlArrPath(){//현재 URL의 경로를 배열로 반환
        $url = UrlUtil::getUrl();//현재 URL을 가져옴
        //현재 URL이 비어 있지 않으면 URL을 "/"로 구분하여 배열로 반환하고, 현재 URL이 비어 있으면 ""를 반환
        return $arr_path = $url !== "" ? explode("/", $url) : "";
    }

    // "/"를 "\"로 치환해주는 메소드
    public static function replaceSlashToBackslash($str){
        return str_replace("/","\\", $str);
    }
}