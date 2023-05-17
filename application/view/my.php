<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/application/view/css/my.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PrOjEcT my</title>
</head>
<body>
<!-- 네비게이션바 -->
<?php include_once( URL_NAV ) ?>
<div class="container">
    <h3>정보수정</h3>
    <form action="/user/my" method="POST">
        <label for="id"></label>
        <input type="text" name="id" id="id" value="<?php echo $_SESSION['u_id']; ?>" readonly>          
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
        <button type="submit" class="btn2 btn-light">수정</button>
        <button type="submit" class="btn2 btn-light" formaction="/user/delete">탈퇴</button> 
    </form>
</div>    
    <script src="/application/view/js/common.js"></script>
</body>
</html>
