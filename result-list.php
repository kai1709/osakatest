<html>
	<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="/login.css">
    </head>
	<body>
        <form onsubmit="return checkForm(this);" method="post" action="/result-list.php">
        <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <?php
require_once "function.php";
require_once "excel/PHPExcel.php";
require_once "excel/PHPExcel/IOFactory.php";
require_once 'cache.class.php';
require_once "vendor/autoload.php";
use \Firebase\JWT\JWT;

$key = "example_key";
// Config connect
$HOST = "localhost";
$PORT = "5432";
$DBNAME = "OsakaTest";
$USERNAME = "postgres";
$PASSWORD = "123456";
$SCHEMA = "osakatest";
$readFile = "excel/answer_data.xlsx";

//DBサーバー接続
$conn = pg_pconnect("host=" . $HOST . " port=" . $PORT . " dbname=" . $DBNAME . " user=" . $USERNAME . " password=" . $PASSWORD);

if (!$conn) {
    die('Not connected : ' . pg_last_error());
} else {
}
$cache = new Cache();
$username = $_POST["username"];
$password = $_POST["password"];

$query_login = "SELECT * FROM osakatest.teacher WHERE username='" . $username . "' AND password='" . $password . "'";
$result = pg_query($conn, $query_login);
if (!$result) {
    echo "Error login. \n";
} else {
    $count_result = pg_num_rows($result);
    if ($count_result > 0) {
        $val = pg_fetch_result($result, 0, 0);
        $val1 = pg_fetch_result($result, 0, 1);
        $val2 = pg_fetch_result($result, 0, 2);
        $string = $val1 . $val2;
        $token = array();
        $token['username'] = $val1;
        $jwt = JWT::encode($token, $key);
        $cache->store('token', $jwt);
        // $decoded = JWT::decode($jwt, $key, array('HS256'));
        // print_r($decoded);
        
        print ('<div style="text-align: center; padding: 10px"> Welcome ' . '<span style="font-weight: bold; color:#6959cd">'. $val . '!</span></div>');
        print('<a href="/download.php"><div class="btn btn-primary" style="width: 100%">Download Result</button></div>');    
    }
    else {    
        echo "Wrong username or password. \n";
    }
}
//セッション作成

exit;

?>
        </div><!-- /card-container -->
    </div><!-- /container -->
        </form>
	</body>
</html>

