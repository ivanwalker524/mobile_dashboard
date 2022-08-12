<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Dashboard</title>
    <!-- <link rel="stylesheet" href="index.css"> -->
    <script src="https://kit.fontawesome.com/c98faec581.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="logo">
            <div>MOBILE PHONES</div>
        </div>
        <div>
            <ul>
                <li><a href="">HOME</a></li>
                <li><a href="">FAVORITE PHONES(0)</a></li>
                <li><a href="">SMART PHONES(0)</a><span class="fa solid fa-shopping"></span></li>
                <li><a href="">AMOUNT</a></li>
                <input type="submit" value="Sign-In">
            </ul>
        </div>
    </header>
    <div class="border"></div>
    <div class="main-article">
        
        <div class="welcome">
            <div>
                <h1>Welcome to <span>MOBILE PHONE</span></h1>
                <P>Already have an acccount ?</P>
                <a href="./login.php">
                    <input type="submit" value="Sign-In">
                </a>
            </div>
        </div>
        <div class="create">
            <div>
                <h1>Create your Account</h1>
                <form action="insert.php" method="post">
                    <input type="text" name="usersname" placeholder="User Name"><br><br>
                    <input type="email" name="email" placeholder="Email"><br><br>
                    <input type="password" name="password" placeholder="Password"><br><br>
                    <input type="password" name="confirmpas" placeholder="Confirm Password"><br><br>
                    <label for="confirm" class="check_confirm">
                        <input type="checkbox" id="confirm">
                        <span>Click to confirm</span>
                    </label>
                    <input type="submit" name="login" value="Sing Up">
                </form>
            </div>
        </div>
    </div>
    <style>
        <?php
            include ("./css/index.css");
        ?>
    </style>
</body>
</html>