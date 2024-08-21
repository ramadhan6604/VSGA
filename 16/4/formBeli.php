<?php


$font_size = '15px';
$background_color = '#4e79a0';

if ($_POST) {
    $background_color = $_POST['background_color'];
    $font_size = $_POST['font_size'];
} else {
    if (isset($_COOKIE['background_color'])) {
        $background_color = $_COOKIE['background_color'];
    }

    if (isset($_COOKIE['font_size'])) {
        $font_size = $_COOKIE['font_size'];
    }
}

// Delete Cookies
$msg = false;

if (isset($_POST['hapus_cookie'])) {
    setcookie('background_color', '', 0, '/');
    setcookie('font_size', '', 0, '/');
    $msg = 'Data cookie berhasil dihapus';
}

// Set Cookie 7 hari
if (isset($_POST['remember'])) {
    setcookie('background_color', $_POST['background_color'], strtotime('+7 days'), '/');
    setcookie('font_size', $_POST['font_size'], strtotime('+7 days'), '/');
    $msg = 'Data cookie berhasil disimpan';
}
?>



<html>
<head>
    <title>Demo Cookie Pada PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        body {
            font: <?php echo $font_size; ?> "open sans", "segoe ui", tahoma;
            background-color: <?php echo $background_color; ?>;
        }

        h3 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        div {
            margin-bottom: 5px;
        }

        select {
            padding: 5px 10px;
            font-size: <?php echo $font_size; ?>;
            border: 1px solid #CCCCCC;
            color: #5d5d5d;
            text-align: right;
            width: 200px;
            margin-bottom: 10px;
        }

        form {
            margin: 0;
        }

        .container {
            width: 250px;
            margin: auto;
            margin-top: 15px;
            border: 0;
            padding: 20px 20px 15px;
            background-color: #FFFFFF;
        }
   
.container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        h3 {
            text-align: center;
        }

        select {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #3e97e2;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .success {
            background-color: #abff0l;
            color: #696969;
            padding: 5px 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>SETTING</h3>
        <?php if (isset($_GET['msg'])) { ?>
            <div class="success"><?php echo $_GET['msg']; ?></div>
        <?php } ?>
        <form method="post" action="">
            <div>
                <label for="background_color">Background:</label>
                <select name="background_color" id="background_color">
                    <?php
                    $colors = array('467960' => 'Biru', '75b14a' => 'Hijau', 'd06353' => 'Merah');
                    foreach ($colors as $name => $value) {
                        $selected = ($name == $_POST['background_color']) ? 'selected' : '';
                        echo '<option value="' . $name . '" ' . $selected . '>' . $value . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="font_size">Font Size:</label>
                <select name="font_size" id="font_size">
                    <?php
                    $font_sizes = array('15px', '17px', '20px', '25px');
                    foreach ($font_sizes as $value) {
                        $selected = ($value == $_POST['font_size']) ? 'selected' : '';
                        echo '<option value="' . $value . '" ' . $selected . '>' . $value . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="remember">
                <input type="checkbox" id="remember" name="remember" />
                <label for="remember"> Remember</label>
            </div>
            <div class="clearfix">
                <input type="submit" class="button blue" name="submit" value="Simpan" />
                <input type="submit" class="button red" name="hapus_cookie"   
 value="Hapus Cookie" />
            </div>
        </form>
    </div>
    <div class="container copyright">&copy; <?= date('Y') ?> JagoWebDev.com<br/>
        <a href="http://jagowebdev.com/cookie-pada-php/">Tutorial &raquo;</a>
    </div>
</body>
</html>   
?>