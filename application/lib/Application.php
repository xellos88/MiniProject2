<?php

namespace application\lib;

use application\util\UrlUtil;

class Application {
    
    //생성자
    public function __construct(){
        $arrPath = UrlUtil::getUrlArrPath();//접속 URL을 배열로 획득 ,현재 URL을 배열로 가져옴
        //URL의 첫 번째 요소가 비어 있는 경우 "User"를, 비어 있지 않은 경우 대문자로 변환하여 반환
        $identityName = empty($arrPath[0]) ? "Shop" : ucfirst($arrPath[0]);
        //URL의 두 번째 요소가 비어 있는 경우 "login"을, 비어 있지 않은 경우 대문자로 변환하고, 
        //$_SERVER["REQUEST_METHOD"]의 소문자로 변환한 결과를 연결하여 반환
        $action = (empty($arrPath[1]) ? "main": $arrPath[1]).ucfirst(strtolower($_SERVER["REQUEST_METHOD"]));
        
        // controller명 작성
        $controllerPath = _PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER._EXTENSION_PHP; //컨트롤러의 경로를 정의

        //해당 controller 파일 존재 여부 체크
        if(!file_exists($controllerPath)){//컨트롤러 파일이 존재하는지 확인
            echo "해당 컨트롤러 파일이 없습니다. :".$controllerPath;//컨트롤러 파일이 존재하지 않는 경우 오류 메시지를 출력
            exit();//스크립트를 종료
        }

        //해당 Controller 호출
        $controllerName = UrlUtil::replaceSlashToBackslash(_PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER);//컨트롤러의 이름을 정의
        new $controllerName($identityName, $action); //컨트롤러의 인스턴스를 생성
        //new application\controller\('user','loginget');

    }
}
?>