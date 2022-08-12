<form class="log-in" action="" method="post">
        <div>
            <h1>Enter your email and password to log in</h1>
        </div>
        <input type="email" name="email" placeholder="Enter Email"><br>
        <input type="password" name="password" placeholder="Enter Password"><br>
        <input type="submit" name="login" value="login"></input>
        <span>Not yet signed up? <a href="index.php">Singup now</a></span>
    </form>
            <?php
            $server="localhost";
            $username="root";
            $password="";
            $dbname="mobile";
            $db= mysqli_connect($server,$username,$password,$dbname);
                if (isset($_POST['login'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $query = $db->query("SELECT * FROM phone where email = '$email'");
                    if ($query->num_rows == 0) {
                        echo "Account does not exist";
                    } else {
                        $hashed = password_hash($password,PASSWORD_DEFAULT);
                        $result = $query->fetch_assoc();
                        echo var_dump(password_verify($password, $result['password']));
                        if (password_verify($password, $result['password'])){
                            echo "Success";
                            session_start();
                            $_SESSION['mobile'] = $result;
                                echo $_SESSION;
                                header('Location: phone_page.php');
                           
            ?>
            <?php
                        } else {
                            echo "Wrong password";
                        }
                    }
                }
            ?>
</div>
<style>
    <?php
        require ("./css/login.css");
    ?>
</style>