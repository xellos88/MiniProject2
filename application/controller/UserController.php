<?php

namespace application\controller;

class UserController extends Controller {//UserController 클래스가 Controller 클래스를 상속
    public function loginGet() {// 로그인 페이지를 반환
        return "login"._EXTENSION_PHP;
    }

    public function loginPost() {//로그인을 시도
        $result = $this->model->getUser($_POST);//DB에서 유저정보 습득
        $this-> model-> close(); //DB파기

        //유저 유무 체크
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
        return _BASE_REDIRECT."/shop/main";
    }

    //////////회원가입//////////
    public function registGet() {
        return "regist"._EXTENSION_PHP;
    }
    public function registPost() {
        $arrPost = $_POST;
        $arrChkerr = [];
        //유효성체크
        //ID글자수 체크
        if(mb_strlen($arrPost["id"]) === 0 || mb_strlen($arrPost["id"]) > 12){
            $arrChkErr["id"] = "ID는 12글자 이하로 입력해 주세요.";
        }
        //ID영문 숫자 체크(추가)
        // if (!ctype_alnum($arrPost["id"])) {
        //     $arrChkErr["id"] = "ID는 영문, 숫자만 입력 가능합니다.";
        // }
        $pattern = "/[^a-zA-Z0-9]/";
        if(preg_match($pattern, $arrPost["id"]) !==0){
            $arrChkErr["id"]= "ID는 영어 대소문자, 숫자만 입력 가능합니다.";
            $arrPost["id"]="";
        }        

        //PW 글자수 체크
        if(mb_strlen($arrPost["pw"]) < 8 || mb_strlen($arrPost["pw"]) > 20 ){
            $arrChkErr["pw"] = "pw는 8~12글자 이하로 입력해 주세요.";
        }

        //pw 영문 숫자 특수 문자 체크(추가)
        if (!preg_match('/^(?=.*[a-z])(?=.*\d)[a-z\d!@#$%^&*(),.?":{}|<>]{8,}$/', $arrPost["pw"])) {
            $arrChkErr["pw"] = "PW는 영문와 숫자, 특수문자를 최소 1개 이상 포함하여 8자리 이상 입력해야 합니다.";
        }

        //비밀번호와 비밀번호체크확인
        if ($arrPost["pw"] !== $arrPost["pwChk"]) {
            $arrChkErr["pwChk"] = "비밀번호와 비밀번호 확인이 일치하지 않습니다.";
        }        

        //NAME 글자수 체크
        if(mb_strlen($arrPost["name"]) === 0 || mb_strlen($arrPost["name"]) > 30){
            $arrChkErr["name"] = "이름은 30글자 이하로 입력해 주세요.";
        }

        //유효성 체크 에러일 경우
        if(!empty($arrChkErr)){
            //에러메세지 셋팅
            $this -> addDynamicProperty('arrError', $arrChkErr);
            return "regist"._EXTENSION_PHP;
        }

        $result = $this->model->getUser($arrPost,false);
        //유저 유무 체크
        if(count($result) !== 0){
            $errMsg = "입력하신 ID가 사용중입니다.";
            $this-> addDynamicProperty("errMsg", $errMsg);
            //회원가입 페이지 리턴
            return "regist"._EXTENSION_PHP;
        }
        
        //Transcation 시작
        $this->model->beginTransaction();
        //user insert
        if(!$this->model->insertUser($arrPost)) {
            //예외처리 롤랩
            $this->model->rollback();
            echo"User Regist ERROR";
            exit();
        }
        $this->model->commit();//정상처리 커밋
        
        //Transcation 종료

        //로그인페이지로 이동
        return _BASE_REDIRECT."/user/login"; 
    }

    //////////수정페이지//////////
    public function myGet() {
        return "my"._EXTENSION_PHP;
    }
    public function myPost() {
        $arrPost = $_POST;
        $arrChkerr = [];
        $arrPost["id"]=$_SESSION[_STR_LOGIN_ID];

        //PW 글자수 체크
        if(mb_strlen($arrPost["pw"]) < 8 || mb_strlen($arrPost["pw"]) > 20 ){
            $arrChkErr["pw"] = "pw는 8~12글자 이하로 입력해 주세요.";
        }

        //pw 영문 숫자 특수 문자 체크(추가)
        if (!preg_match('/^(?=.*[a-z])(?=.*\d)[a-z\d!@#$%^&*(),.?":{}|<>]{8,}$/', $arrPost["pw"])) {
            $arrChkErr["pw"] = "PW는 영문와 숫자, 특수문자를 최소 1개 이상 포함하여 8자리 이상 입력해야 합니다.";
        }
        
        //비밀번호와 비밀번호체크확인
        if ($arrPost["pw"] !== $arrPost["pwChk"]) {
            $arrChkErr["pwChk"] = "비밀번호와 비밀번호 확인이 일치하지 않습니다.";
        }        

        //NAME 글자수 체크
        if(mb_strlen($arrPost["name"]) === 0 || mb_strlen($arrPost["name"]) > 30){
            $arrChkErr["name"] = "이름은 30글자 이하로 입력해 주세요.";
        }

        //유효성 체크 에러일 경우
        if(!empty($arrChkErr)){
            //에러메세지 셋팅
            $this -> addDynamicProperty('arrError', $arrChkErr);
            return "my"._EXTENSION_PHP;
        }

        // 유저 정보를 수정합니다.
        $result = $this->model->updateUser($arrPost);
        if (!$result) {
            // 유저 정보 수정에 실패한 경우 에러메시지 셋팅
            $errMsg = "유저 정보 수정에 실패했습니다.";
            $this->addDynamicProperty("errMsg", $errMsg);
            return "my"._EXTENSION_PHP;
        }
    
        // 마이페이지로 리다이렉트합니다.
        return _BASE_REDIRECT."/user/my";
    }

/////유저삭제////
    public function deletePost() {
        $userId = $_SESSION[_STR_LOGIN_ID];
        
        // 유저 정보를 삭제합니다.
        $result = $this->model->deleteUser($userId);
        
        if ($result) {
            // 성공적으로 삭제된 경우, 로그아웃 처리하고 메인 페이지로 이동합니다.
            session_destroy();
            header(_BASE_REDIRECT."/user/login");
            exit;
        } else {
            // 삭제에 실패한 경우, 에러 메시지를 출력하고 마이 페이지로 이동합니다.
            $errMsg = "회원 탈퇴에 실패했습니다. 다시 시도해 주세요.";
            $this->addDynamicProperty("errMsg", $errMsg);
            return "my"._EXTENSION_PHP;
        }
    }
    
}

?>
