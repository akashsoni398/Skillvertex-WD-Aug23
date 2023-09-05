<?php 

    include "./db-config.php";
    session_start();

    if(isset($_GET['logout'])) {
        session_destroy();
        header("Location:./index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Hub</title>
    <script src="https://kit.fontawesome.com/9e2c9fd14a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        * {
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
        }
        body {
            background-color: rgb(255, 253, 246);
            height: 5000px;
        }
        header {
            background-color: #333;
            text-align: right;
        }
        header>a {
            color: #f6f6f6;
            text-decoration:none;
            margin-right: 30px;
            font-size: 13px;
        }
        #dropdown {
            display: inline-block;
        }
        #dropbtn {
            border: none;
            color: #1f1f1f;
            background-color: rgb(29, 162, 29);
            padding: 10px 25px;
            font-size: 17px;
            font-weight: bold;
        }
        #dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            z-index: 1;
        }
        #dropdown-content a{
            color: #333;
            background-color:rgb(200, 200, 200);
            display: block;
            text-decoration: none;
            padding: 10px 20px;
        }
        #dropdown-content a:hover {
            background-color:rgb(148, 148, 148);
            color: #111;
        }
        #dropbtn:hover {
            background-color: rgb(8, 120, 8);
            cursor: pointer;
        }
        #dropdown:hover #dropdown-content {
            display: block;
        }
       
        #branding {
            position: relative;
            top: 0;
            height: 150px;
            background-color: #fcca16;
            display: flex;
            justify-content: space-between;
            white-space: nowrap;
        }
        #logo {
            position: relative;
        }
        #logo h1 {
            position: absolute;
            top: 10px;
            left: 160px;
            font-family: fantasy;
            font-size: 75px;
            font-weight: normal;
        }
        #logo p {
            position: absolute;
            top: 90px;
            left: 160px;
            font-size: 16.1px;
            font-weight: normal;
            text-align: center;
        }
        #search-box {
            position: relative;
        }
        #search-box form {
            position: relative;
            top: 60px;
            right: 30px;
        }
        #search-box>i {
                display: none;
            }
        #search-box input,#search-box button {
            position: absolute;
            right: 0;
            height: 30px;
            border: none;
            border-radius: 30px;
        }
        #search-box input {
            width: 250px;
            padding: 10px 25px 10px 10px;

        }
        #search-box button {
            width: 30px;
            background-color: transparent;
            cursor: pointer;
        }
        #search-box button:hover {
            background-color: #11111125;
        }
        #search-box input:focus-visible{
            border: none;
        }

        nav {
            background-color: #333;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        nav li {
            list-style-type: none;
            
        }
        nav li a {
            color: white;
            text-decoration: none;
            display: inline-block;
            padding: 10px 30px;
        }

        @media screen and (max-width:700px){
            header {
                display: none;
            }
            nav {
                display: none;
            }
            #search-box form {
                display: none;
            }
            #search-box>i {
                display: block;
            }

        }
    </style>
</head>
<body>
    
    <header>
        <a href="./privacy.html" target="_blank">Privacy Policy</a>
        <a href="./tnc.html" target="_blank">Terms and Conditions</a>
        <a href="./user/cart.html"><i class="fa-solid fa-cart-shopping" style="color: white;"></i></a>
        
        <?php if(!isset($_SESSION['userid'])) { ?>

            <div id="dropdown">
                <button id="dropbtn">LOGIN</button>
                <div id="dropdown-content">
                    <a href="./auth/login.php">Login into existing account</a>
                    <a href="./auth/signup.php">Create a new account</a>
                </div>
            </div>

        <?php } else { ?>

            <div id="dropdown">
                <button id="dropbtn"><?php echo $_SESSION['username'] ?></button>
                <div id="dropdown-content">
                    <a href="./auth/changepwd.php">Change account password</a>
                    <a href="./index.php?logout=true">Logout</a>
                </div>
            </div>

        <?php } ?>
        

    </header>

    <section id="branding">
        <div id="logo">
            <img src="./assets/images/logo.gif" height="150px"/>
            <h1>MUSIC HUB</h1>
            <p>---------------------------------------------<br>One stop shop for all your musical needs</p>
        </div>
        <div id="search-box">
            <form method="get" action="./search.html">
                <input type="search" name="query" placeholder="search songs, artists, etc..."/>
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <i class="fa-solid fa-bars"></i>
        </div>
    </section>

    <nav>
        <li><a href="./index.html">Home</a></li>
        <li><a href="./hits.html">Popular</a></li>
        <li><a href="./recent.html">Latest Releases</a></li>
        <li><a href="./playlist.html">Playlists</a></li>
        <li><a href="./about.html">About us</a></li>
    </nav>

    <main>
        <h1>Songs</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 m-3">

            <?php 
                $sql_query = "SELECT * FROM music ORDER BY views DESC;";
                $result = mysqli_query($conn,$sql_query);
                
                while($rows = mysqli_fetch_array($result)) {
            ?>

                <div class="col">
                    <div class="card h-100">
                    <img src="./assets/musicimg/<?php echo $rows['image']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['name'] ?></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </main>
    <footer></footer>
</body>
</html>