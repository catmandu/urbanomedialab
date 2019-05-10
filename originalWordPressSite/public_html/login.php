<?php 
require_once('wp-config.php');

$servername = DB_HOST;
$username = DB_USER;
$password = DB_PASSWORD;
$dbname = DB_NAME;
echo password_hash('Heart_1265', PASSWORD_DEFAULT);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['username'])){
    $sql = "select ID from wp_nxoa_users where user_login = '".$_POST['username']."' and user_pass = '".md5($_POST['password'])."'";
    echo $sql;
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        echo 'User exist';
    }
    else{
        echo 'User does not exist';
    }
}

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="post" action="login.php">
        <label>Username</label><input name="username"/><br/>
        <label>Password</label><input name="password" type="password"/><br/>
        <button>Login</button>
    </form>
</body>
<script>
    function redirect(){
        var uri = window.location.protocol + '//' +  window.location.host;
        //window.location = uri +'/urbanomedialab/originalWordpressSite/Public_html/wp-content/themes/urbanomedialab/admin.php';
    }
</script>
</html>