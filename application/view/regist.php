<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/application/view/css/regist.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>regist</title>
</head>
<body>
<!-- 네비게이션바 -->
<?php include_once( URL_NAV ) ?>
<div class="container">
    <h3>회원가입</H3>
    <!-- if작성 -->
    <?php if(isset($this->errMsg)) { ?>
        <div>
            <span> <?php echo $this->errMsg ?> </span>
        </div>
    <?php } ?>
    <!-- 삼항연산자
    <div>
        <span><?php echo(isset($this->errMsg) ? $this->errMsg :"")?> </span>
    </div> -->
<div class="container">
    <form action="/user/regist" method="POST">
        <label for="id"></label>
        <input type="text" name="id" id="id" placeholder="ID" value="<?php echo isset($_POST['id']) ? $_POST['id'] : '' ?>">
        <!-- <input type="text" name="id" id="id" placeholder="ID"> -->
        <button type="button" class="btn btn-light" id="btn1" onclick="chkDuplicationId()">중복체크</button>
        <span id="errMsgId">
            <?php if(isset($this->arrError["id"])) {
                echo $this->arrError["id"];
            } ?>
        </span>
        <br>
        <label for="pw"></label>
        <input type="text" name="pw" id="pw" placeholder="Password">
        <span>
            <?php if(isset($this->arrError["pw"])) {
                echo $this->arrError["pw"];
            } ?>
        </span>
        <br>
        <label for="pwChk"></label>
        <input type="text" name="pwChk" id="pwChk" placeholder="Password check">
        <span>
            <?php if(isset($this->arrError["pwChk"])) {
                echo $this->arrError["pwChk"];
            } ?>
        </span>
        <br>
        <label for="name"></label>
        <input type="text" name="name" id="name" placeholder="Name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
        <span>
            <?php if(isset($this->arrError["name"])) {
                echo $this->arrError["name"];
            } ?>
        </span>
        <br>
        <button type="submit" class="btn btn-light" id="btn2">JOIN</button>
    </form>
        </div>    
    <script src="/application/view/js/common.js"></script>
</body>
</html>