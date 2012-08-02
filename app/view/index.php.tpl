<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $titulo; ?></title>
        <?php include(DIR_INC . "head.php"); ?>
    </head>
    <body>
        <div id="main_content">
            <?php include(DIR_INC . "menu.php"); ?>
            <div id="content_wrapper">

                <?php echo $mensaje; ?>

            </div>
        </div>

    </body>
</html>
