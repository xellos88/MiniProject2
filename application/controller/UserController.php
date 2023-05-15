<?php

namespace application\controller;

class UserController extends Controller {//UserController 클래스가 Controller 클래스를 상속
    public function loginGet() {// 로그인 페이지를 반환
        return "login"._EXTENSION_PHP;
    }

    public function loginPost() {//로그인을 시도
        $result = $this->model->getUser($_POST);
        if(count($result) === 0){
            $errMsg = "입력하신 회원 정보가 없습니다.";
            $this-> addDynamicProperty("errMsg", $errMsg);
            //로그인 페이지 리턴
            return "login"._EXTENSION_PHP;
        }
        //session에 User ID 저장
        $_SESSION[_STR_LOGIN_ID] = $_POST["id"]; 

        //리스트 페이지 리턴
        return _BASE_REDIRECT."/shop/main";
    }

    // 로그아웃 메소드
    public function logoutGet() {
        session_unset();
        session_destroy();
        //로그인 페이지 리턴
        return "login"._EXTENSION_PHP;
    }
    public function signupGet() {// 로그인 페이지를 반환
        return "signup"._EXTENSION_PHP;
    }
}
