<!DOCTYPE html>
<html>
    <head>
        <title>Nato-Taskforce</title>
        <?php include("../essentials/head.php") ?>
    </head><!-- head -->

    <body>
        <?php include("../essentials/navbar.php");?>

        <div class="jumbotron">
            <div class="container">
                <h2 class="center">Willkommen bei der</h2>
                <center><img class="center" src="../img/Logo.png" alt="Nato Taskforce" height="200" width="200"></center>
                <h1 class="center">NATO TASKFORCE</h1>
                <h2 class="center">Taktische ArmA 3 Community</h2>
            </div><!-- container -->
        </div><!-- Jumbotron -->

        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="well well-sm panelHead" id="indexPanelHead">
                                <h3 class="PanelHeading">Willkommen bei der Nato Taskforce</h3>
                            </div><!--Welcome Panel <Head-->
                            <div class="well panelBody" id="indexPanelBody">
                                Die NTF ist ein Clan rund um das Spiel ArmA 3 aus dem Hause Bohemia Interactive.<br /><br /> Wir sind eine halb-offene Gemeinschaft und legen Wert auf herausfordernde Missionen mit einem gewissen Anspruch an jeden Mitspieler.<br> Wir wollen nicht versuchen sämtliche Dienstvorschriften der Armeen dieser Welt in unseren virtuellen Szenarien abzubilden, dennoch adaptieren wir erprobte Verhaltensweisen und Strategien aus der Realität um ein möglichst immersives Spielerlebnis
                                zu erleben.<br><br> Diese Webpräsenz ist unsere Info-Tafel rund um unsere Gemeinschaft, unsere Spielweise und soll dir darüber hinaus noch Aufschluss geben – ob du möglicherweise zur Nato-Taskforce passt und wie man sich bei uns bewirbt.<br><br>
                                <a class="btn btn-primary btn-lg" href="about.php" role="button">Erfahre mehr &raquo;</a>
                                <br>
                            </div><!--Welcome Panel Body-->
                        </div><!-- Welcome Panel -->
                        <div class="col-md-12">
                            <div class="well well-sm panelHead">
                                <h3 class="PanelHeading">Twitter-Feed</h3>
                            </div><!--Twitter Feed Panel Head-->
                            <div class="well well-sm panelBody">
                                <a class="twitter-timeline" data-height="600" href="https://twitter.com/Nato_Taskforce">Tweets by Nato_Taskforce</a>
                                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                           </div><!--Twitter Feed Panel Body-->
                        </div><!-- Twitter Panel -->
                    </div><!-- Row left Panels -->
                </div><!-- Left Panels -->
                <div class="col-md-5" >
                    <div class="row">
                        <div class="col-md-12">
                            <div class="well well-sm panelHead">
                                <h3 class="PanelHeading">Nächste Termine</h3>   
                            </div><!--Termin Panel Head-->
                            <div class="well panelBody">
                                <?php include("../essentials/termine.php");?>
                            </div><!--Termin Panel Body-->
                        </div><!-- Termin Panel -->
                        <div class="col-md-12">
                            <div class="well well-sm panelHead">
                                <h3 class="PanelHeading">Official ArmA III News</h3>
                            </div><!--Dev Hub Head -->
                            <div class="well well-sm panelBody">
                                <?php include("../essentials/BiRss.php");?>
                            </div><!--Dev Hub Feed Body-->                            
                        </div><!-- Dev Hub Feed -->
                    </div> <!-- Right Panel Row -->
                </div><!-- Right Panels-->
            </div><!--Row-->
            <?php include '../essentials/footer.php' ?>
        </div><!--container-->
    </body>
</html>
