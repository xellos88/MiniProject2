public function myGet() {
    // 1. 수정할 유저 정보를 불러옵니다.
    $userId = $_SESSION["u_id"];
    $user = $this->model->getUser(["id" => $userId], true);

    // 2. 수정폼을 작성합니다.
    $this->addDynamicProperty("user", $user);
    return "my"._EXTENSION_PHP;
}

public function myPost() {
    $arrPost = $_POST;

    // 3. 유효성을 체크합니다.
    $arrChkErr = $this->validateUser($arrPost, false);
    if (!empty($arrChkErr)) {
        // 유효성 체크 에러가 있는 경우 에러메시지 셋팅
        $this->addDynamicProperty("arrError", $arrChkErr);
        return "my"._EXTENSION_PHP;
    }

    // 4. 유저 정보를 수정합니다.
    $result = $this->model->updateUser($arrPost);
    if (!$result) {
        // 유저 정보 수정에 실패한 경우 에러메시지 셋팅
        $errMsg = "유저 정보 수정에 실패했습니다.";
        $this->addDynamicProperty("errMsg", $errMsg);
        return "my"._EXTENSION_PHP;
    }

    // 5. 마이페이지로 리다이렉트합니다.
    return _BASE_REDIRECT."/user/my";
}

private function validateUser($arrPost, $isRegister) {
    //유효성 체크 함수 (회원가입, 수정 공통)
    $arrChkErr = [];

    //ID 글자수 체크
    if (mb_strlen($arrPost["id"]) === 0 || mb_strlen($arrPost["id"]) > 12) {
        $arrChkErr["id"] = "ID는 12글자 이하로 입력해 주세요.";
    }

    //ID 영문 숫자 체크
    $pattern = "/[^a-zA-Z0-9]/";
    if (
