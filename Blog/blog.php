<!DOCTYPE HTML>
<html>
<head>
    <title>The Vangaroos - Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="blogstyle.css"/>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Add jQuery and jQuery mobile-->
    <script src="../jquery.js"></script>

    <!-- Add Fancybox (Click pictures to enlarge) -->
    <link rel="stylesheet" href="../jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="../jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Font Import -->
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>


    <!-- Fancybox script -->
    <script>
         $(document).ready(function() {
            $("#single_1").fancybox({

                openEffect  : 'fade',
                closeEffect : 'fade',

                helpers : {
                   title : {
                      type : 'over'
                   }
                }
            });
        });
    </script>
    
    <script src="loadmore.js"></script>
    
    <script>
       
        $(document).ready(function(){
             //Untermenü auf- / zuklappen
            $("#nav ul li a").click(function(){
                $(this).next().slideToggle();
            });
        });
    </script>

</head>

<body>

    <?php
        mysql_connect("localhost", "web594", "ljVCqJQF");
        mysql_select_db("usr_web594_1");
    ?>

    <header>
        <a href="../index.php">
            <h1>The Vangaroos</h1>
            <h3>- Blog -</h3>
        </a>
    </header>
    
    <div id="nav">
        <ul>
            <li>
                <p><a href="Monate/oktober.php">Oktober</a></p> <a href="Monate/oktober.php">></a>
            </li>
            
            <li>
                <p><a href="#">November</a></p> <a href="#">></a>
            </li>
            
            <li>
                <p><a href="#">Dezember</a></p> <a href="#">></a>
            </li>
            
            <li>
                <p><a href="#">Januar</a></p> <a href="#">></a>
            </li>
            
            <li>
                <p><a href="#">Februar</a></p> <a href="#">></a>
            </li>
            
            <li>
                <p><a href="#">M&auml;rz</a></p> <a href="#">></a>
            </li>
            
            <li>
                <p><a href="#">April</a></p> <a href="#">></a>
            </li>
            
        </ul>
    </div>
    
    <div id="main">
        <div id="articles">
        <article>
            <h3>Endlich angekommen!</h3> <br/>
            <p>
                G'day und herzlich willkommen auf vangaroos.com, unserer kleinen Seite über die ihr alles über unseren Australien Aufenthalt erfahren könnt. Wir sind mittlerweile gut in Sydney, unserem Startpunkt, angekommen, wenn auch etwas verpätet. Unser Flug, der eigentlich am 13. gehen sollte, fiel aus und wurde auf den 14. verschoben, um ein Haar hätten wir dies jedoch nicht rechtzeitig mitbekommen, da die nette Frau von unserer Reiseagentur erst wenige Minuten vor unserem geplanten Start zum Flughafen angerufen hat, um es uns mitzuteilen. Nachdem wir dann nach 6 Stunden flug in Dubai gelandet sind hatten wir dort so lange Aufenthalt dass uns Fly Emirates ein Hotel gezahlt hat. Das Angebot nahmen wir natürlich gerne an, arme Backpacker sagen zu gratis Essen und Unterkunft schließlich grundsätzlich nicht nein! 
                Nachdem auch diese Etappe geschafft war ging es weiter, nicht jedoch wie eigentlich geplant direkt nach Sydney, sondern erst einmal nach Perth, welches am anderen Ende Australiens liegt, Weitere 10 Stunden, in einem wesentlich unkonfortabelerem Flieger als zuvor, dafür aber mit guter musikalischer Untermalung von Queen, später landeten wir dann auch dort, nur um noch ein Mal 5 Stunden zu warten, um dann unseren letzten, 4 Stunden langen, Flug nach Sydney anzutreten, auf welchem ich riesengroßer Fan vom neuen Pixar Film Inside Out, oder auf deutsch Alles steht Kopf, wurde. Mann war der gut.. 
                Dort angekommen hatten wir kaum Zeit zum Entspannen. Nach einer chaotischen Suche des Shuttle Busses kamen wir im Hostel an, das unsere Organisation für uns gebucht hatte. Durch die Verspätung sollten wir dort aber nur kurz unsere Sachen auspacken und uns dann direkt auf den Weg zum Büro der hier vertretenen Partner-Organisation zu machen, wo wir unser Willkommenspaket und eine kleine Einführung bekamen. Das alles ging relativ schnell von statten, sodass wir schon bald wieder Freizeit hatten. Nachdem wir also SIM-Karte, einen Powerpoint-Vortrag und unseren Termin zur Konto-Eröffnung bei einer Australischen Bank erhielten, machten wir uns auf den Weg und erkundeten ein wenig die nähere Umgebung und buchten unser nächstes Hostel, da vor allem mein Zimmer in unserem jetzigen ungefähr eine Müllhalde ist. Als die Zeit bis wir endlich schlafen gehen konnten endlich gekommen war, fielen wir in unsere Betten, der Jetlag durch 9 Stunden Zeitverschiebung war nämlich ordentlich zu spüren. 
                Als wir dann heute fit und munter, leider jedoch in getrennten Zimmern, aufwachten, kämpfte ich mich zunächst durch meinen Zimmerboden, dann ging es direkt ans Frühstück. Wie am Vortag schon geplant machten wir uns dann auf zu Bondi Beach, einem der bekanntesten und beliebtesten Strände Sydneys. Als wir dort ankamen staunten wir nicht schlecht über das phänomenal schöne Meer und die Strände, spätestens hier wurde uns klar: Hier lässt's sich doch ganz gut aushalten. Nach kurzen Erkunden des Strandes und einem kleinen Snack bei McDonald's (welch überraschung, es gibt ihn auch hier) begaben wir uns auf den Coastal Walk, also eine Strecke auf dem man den kompletten Küstenabschnitt entlang laufen könnte. Wieder gab es auch dabei natürlich viele schöne Aussichten zu begutachten, leider jedoch keine Delphine oder Wale, welche man hier angeblich auch des öfteren zu Gesicht bekommt. Bilder Hiervon folgen erst im Laufe dieser Woche Bilder in der Galerie, da wir unsere Kamera dieses Mal noch nicht dabei hatten.
                Zurück im Hostel haben wir dann unser erstes selbstgekochtes Mahl dieser Reise zu uns genommen: Spaghetti mit Tomatensoße. Nun ists mittlerweile Nacht und ich liege nach einem kleinen Ausflug zu einem Feuerwerk im Hafen und unserer ersten Runde Billard Down Under, in meinem Bett und werde wohl demnächst schlafen gehen. Morgen geht es dann auf in das neue Hostel und hoffentlich in ein gemeinsames, halbwegs ordentliches Zimmer. Am Montag hören wir dann 2 Vorträge über das Arbeiten und Reisen in Australien und werden unsere nächsten Wochen planen. Bis dahin und Gute Nacht bzw. für die deutschen Leser: Mahlzeit,

                Philipp
            </p>
        </article>  
    
        </div>
        
        <!--<div id="loadmore"><p>Load more...</p></div> -->
    </div>
    
    <div id="footer">
        <ul>
            <li><a href="../impressum/impressum.html">Impressum</a></li>
        </ul>
    </div>
</body>
</html>