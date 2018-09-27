<?php
session_start();
error_reporting(0);
        $user = array(
                        "user" => "Rizal",
                        "pass"=>"rizal"            
                );
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $user['user'] && $_POST['password'] == $user['pass']){
        //Membuat Session
        $_SESSION["username"] = $_POST['username']; 
        echo "Anda Berhasil Login $_POST[username] , Silahkan Logout disini <a href='proses.php'>";

        
    } else {
        // Tampilan Pesan Error
        display_login_form();
        echo '<p>Username Atau Password Tidak Benar</p>';
    }
}    
else { 
    display_login_form();
}
function display_login_form(){ ?>
    <form action="proses.php" method='post'>
    <center><label for="username">username</label></center>
    <center><input type="text" name="username" id="username"></center>
    <br><br>
    <center><label for="password">password</label></center>
    <center><input type="password" name="password" id="password"></center>
    <br><br>
    <center><input type="submit" name="submit" value="submit">
    </form> </center>   
<?php } ?>
