<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Halftime, Music, Producers">
    <meta name="keywords" content="Half time, halftime, half, time, Producers, music, music kits, kits, free, pack">
    <meta name="author" content="Jonas">

    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/navigation.css">
    <title>HalfTime</title>
</head>

<body>
    <header>
    
        
        <div class="navgrid">
            <p></p>
            <div class="title">
                <a href="index.php">
                    <i>HALF | TIME</i>
                </a>
            </div>
            <div class="signup">
                <a href="../php/login.php">LogIn</a> |
                <a href="../php/signup.php">Signup</a>
            </div>
        </div>

        <script src="js/js.js"></script>
        <div class="container">
            <div id="navgrid">
                <div class="navlink">
                    <a href="index.php">Home</a>
                </div>
                <div class="navlink">
                    <a href="php/library.php">Library</a>
                </div>
                <div class="navlink">
                    <a href="php/packs.php">Packs</a>
                </div>
                <div class="navlink">
                    <a href="php/support.php">Support</a>
                </div>
            </div>
        </div>
        <?php 
    session_start();
    if(isset($_SESSION['u_id'])){
        echo "Logged in.";
      }
?>
    </header>
</body>
<html>