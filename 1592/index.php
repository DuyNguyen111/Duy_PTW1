<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

    require_once 'scss.inc.php';

    use ScssPhp\ScssPhp\Compiler;

    $scss = new Compiler();

    $scss->setImportPaths('scss/');

    $styles = $scss->compile('@import "1592-styles.scss";');

    $css = fopen('css/1592-styles.css','w');

    fwrite($css,$styles);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url_path ?>/css/1592-styles.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet"/>
    <link href="<?php echo $url_path ?>/swiper-5.4.1/package/css/swiper.min.css" rel="stylesheet"/>
    <script src="<?php echo $url_path ?>/swiper-5.4.1/package/js/swiper.min.js"></script>
    <script src="<?php echo $url_path ?>/js/jquery-3.5.1.min.js"></script>
    <script src="js/scripts.js"></script>
    <style>
        @font-face {
          font-family: "Open Sans Condensed";
          src: url("<?php echo $url_path ?>/family-font/OpenSansCondensed-Bold.ttf");
        }
    </style>
    <script language="JavaScript" type="text/javascript" src="<?php echo $url_path ?>/js/scripts.js"></script>
    <title>1592</title>
</head>
<body>
   <?php include "./1592.php";?>
</body>
</html>
