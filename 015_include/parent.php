<?
// you can also change the include path:  set_include_path(get_include_path() . PATH_SEPARATOR . '*path')
// *document relative path is better
php require './includes/copyright_year.php' ?>
<?php $siteroot = '/phpproject/phpbasic/015_include' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Using server-side includes</title>
  </head>
  <body>
    <h1>Including External Files</h1>
    <p>This paragraph is in the original file.</p>
    <?php include_once './includes/para.html' ?>
    <p>This is also in the original file</p>
    <?php include_once './includes/para.html' ?>



    <p><?= echo_copyright_year(2010); ?>  John Doe</p>
  </body>
</html>
