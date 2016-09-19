<!DOCTYPE html>

<html>
    <head>

        <title><?=$this->title?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />

        <?php $this->placeStyles(); ?>
        <?php $this->placeJSVars(); ?>
        <?php $this->placeScripts(); ?>

    </head>

    <body <?php $this->placeBodyAttributes()?> >
        <?=$this->content?>
    </body>
</html>