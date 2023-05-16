<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/application/view/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PrOjEcT Login</title>
</head>
<body>
<!-- 네비게이션바 -->
<?php include_once( URL_NAV ) ?>

<div class="container">
    <h3>LOGIN</h3>
    <form action="/user/login" method = "post">
        <label for="id"></label>
        <input type="text" name="id" id="id" placeholder="ID">
        <br>
        <label for="pw"></label>
        <input type="password" name="pw" id="pw" placeholder="Password">
        <br><br>
        <button typle="submit" class="btn btn-dark" id="btn">LOGIN</button>
        <button type="button" class="btn btn-light" id="btn1" onclick="location.href='/user/regist'">JOIN</button>
    </form>
    <h3 style = "color: red;"><?php echo isset($this->errMsg) ? $this->errMsg:""; ?></h3>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
