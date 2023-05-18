public function myGet()
{
    $id = $_SESSION[_STR_LOGIN_ID];
    $userInfo = $this->model->getUser($id, false);

    if ($userInfo) {
        // 여기에서 원하는 작업을 수행하고 필요에 따라 반환값을 변경할 수 있습니다.
        return "my" . _EXTENSION_PHP;
    }

    return null; // 사용자 정보를 찾을 수 없는 경우 null 반환 또는 다른 값을 반환할 수 있습니다.
}

if (count($result) !== 0) {
    $errMsg = "입력하신 ID가 사용중입니다.";
    $this->addDynamicProperty("errMsg", $errMsg);
    // 회원가입 페이지 리턴
    return "my" . _EXTENSION_PHP;
}

// Transaction 시작
$this->model->beginTransaction();
// user insert
if (!$this->model->getUser($arrPost)) {
    // 예외처리 롤백
    $this->model->rollback();
    echo "User my ERROR";
    exit();
}
$this->model->commit(); // 정상처리 커밋

// Transaction 종료

// 로그인 페이지로 이동
return _BASE_REDIRECT . "/user/login";
