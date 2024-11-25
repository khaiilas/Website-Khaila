<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portofolio</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Curriculum Vitae</h1>
    <h2>Khaila Sukmawati</h2>
    </header>
    <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="profile.html">Profile</a>
            <a href="pendidikan.html">Pendidikan</a>
            <a href="Portofolio.php">Portofolio</a>
    </nav>
    <div class="content">
        <?php
        if (isset($_GET['section'])) {
            $section = $_GET['section'];
            if ($section == "profile") {
                include "profile.php";
            } elseif ($section == "pendidikan") {
                include "pendidikan.php";
            } elseif ($section == "portofolio") {
                include "portofolio.php";
            } else {
                echo "<h2>404 Section Not Found</h2>";
            }   
        }
        ?>
    </div>
</body>
</html>
