<!DOCTYPE html>
<html lang="en">

<head>
<?php

    $eid = 'simple';
    if ($_POST['eid'] = "simple") {
    echo '
    <!-- <link rel="stylesheet" href="css/visualizationPageStyle.css"> -->
    <!-- jqueury stuff.  Only used for the animation speed slider. -->
    <!-- <link rel="stylesheet" href="ThirdParty/jquery-ui-1.8.11.custom.css"> -->

    <script src="ThirdParty/jquery-1.5.2.min.js"></script>
    <script src="ThirdParty/jquery-ui-1.8.11.custom.min.js"></script>

    <!-- Javascript for the actual visualization code -->
    <script type="text/javascript" src="AnimationLibrary/CustomEvents.js"> </script>
    <script type="text/javascript" src="AnimationLibrary/UndoFunctions.js"> </script>
    <script type="text/javascript" src="AnimationLibrary/AnimatedObject.js"> </script>
    <script type="text/javascript" src="AnimationLibrary/AnimatedLabel.js"> </script>
    <script type="text/javascript" src="AnimationLibrary/AnimatedCircle.js"> </script>
    <script type="text/javascript" src="AnimationLibrary/AnimatedRectangle.js"> </script>
    <script type="text/javascript" src="AnimationLibrary/AnimatedLinkedList.js"> </script>
    <script type="text/javascript" src="AnimationLibrary/HighlightCircle.js"> </script>
    <script type="text/javascript" src="AnimationLibrary/Line.js"> </script>
    <script type="text/javascript" src="AnimationLibrary/ObjectManager.js"> </script>
    <script type="text/javascript" src="AnimationLibrary/AnimationMain.js"> </script>
    <script type="text/javascript" src="AlgorithmLibrary/Algorithm.js"> </script>
    <script type="text/javascript" src="AlgorithmLibrary/Huffman.js"> </script>
    <script>
        document.getElementById("generalAnimationControlSection").remove();
    </script>
    ';}?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Virtual Labs Simulation</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body <?php if ($_POST['eid'] = "simple") {
    echo 'onload="init();" class="VisualizationMainPage"';
    print "Done";}?>
>
    <div class="row px-4">
        <div style="height: 25vh;" class="p-5 border border-primary w-100">
            <h3>Data Compression Simulation</h3>
        </div>
    </div>
    <div class="row px-4">
        <div class="col-2 border border-primary">
            <?php
            $epage = "intro";
            if (isset($_POST['epage']) && $_POST['epage'] != "") {
                $epage = $_POST['epage'];
            }
            require('expsidebar.php');
            ?>
            <div class="col-sm-9 col-xl-10 border border-primary" style="padding: 0px;">
                <?php
                $eid = 'simple';
                if (isset($_POST['eid']) && $_POST['eid'] != "") {
                    $eid = $_POST['eid'];
                }
                include('expcontent.php');
                ?>
            </div>
        </div>
        <script src="js/jquery-3.3.1-slim-min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script>
            setTimeout(() => {  document.getElementById("generalAnimationControlSection").remove(); }, 0);
        </script>
</body>

</html>