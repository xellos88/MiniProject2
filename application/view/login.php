<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/application/view/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PrOjEcT Login</title>
    <style>
    </style>
</head>
<body>
<!-- 네이게이션바 -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PrOjEcT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">NEW</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SALE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BRAND</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            FOOTWEARS 
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-start">
                            <li><a class="dropdown-item" href="#">Category</a>
                                <ul>
                                    <li><a class="dropdown-item" href="#">ALL</a></li>
                                    <li><a class="dropdown-item" href="#">SNEAKERS</a></li>
                                    <li><a class="dropdown-item" href="#">BOOTS</a></li>
                                    <li><a class="dropdown-item" href="#">SANDAL & SLIDE</a></li>
                                </ul>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">BRAND</a></li>
                            <ul>
                                <li><a class="dropdown-item" href="#">NIKE</a></li>
                                <li><a class="dropdown-item" href="#">VANS</a></li>
                                <li><a class="dropdown-item" href="#">ADIDAS</a></li>
                                <li><a class="dropdown-item" href="#">CONVERSE</a></li>
                                <li><a class="dropdown-item" href="#">JORDAN</a></li>
                            </ul>
                        </ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                CLOTHING 
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-start">
                                <li><a class="dropdown-item" href="#">Category</a>
                                    <ul>
                                        <li><a class="dropdown-item" href="#">OUTER</a></li>
                                        <li><a class="dropdown-item" href="#">TOP</a></li>
                                        <li><a class="dropdown-item" href="#">BOTTOM</a></li>
                                    </ul>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">BRAND</a></li>
                                <ul>
                                    <li><a class="dropdown-item" href="#">NIKE</a></li>
                                    <li><a class="dropdown-item" href="#">ADIDAS</a></li>
                                    <li><a class="dropdown-item" href="#">CONVERSE</a></li>
                                    <li><a class="dropdown-item" href="#">JORDAN</a></li>
                                </ul>
                            </ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ACCESSORIES 
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-start">
                            <li><a class="dropdown-item" href="#">Category</a>
                                <ul>
                                    <li><a class="dropdown-item" href="#">CAP</a></li>
                                    <li><a class="dropdown-item" href="#">BAGS</a></li>
                                    <li><a class="dropdown-item" href="#">SOCKS</a></li>
                                    <li><a class="dropdown-item" href="#">ETC</a></li>
                                </ul>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">BRAND</a></li>
                            <ul>
                                <li><a class="dropdown-item" href="#">NIKE</a></li>
                                <li><a class="dropdown-item" href="#">ADIDAS</a></li>
                                <li><a class="dropdown-item" href="#">CONVERSE</a></li>
                                <li><a class="dropdown-item" href="#">JORDAN</a></li>
                            </ul>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user/login">LOGIN</a>
                    </li>
                    <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CART</a>
                        </li>
                    </ul> -->
                    </ul>
                    <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light " type="submit">SEARCH</button>
                    </form>
                </div>
                </div>
            </nav>
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
        <button type="button" class="btn btn-light" id="btn1" onclick=location.href="/application/controller/view/signup">회원가입</button>

    </form>

    <h3 style = "color: red;"><?php echo isset($this->errMsg) ? $this->errMsg:""; ?></h3>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
