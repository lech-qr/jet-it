<?php
$umiejetnosc = array(   
    'Frontend Development'  =>  '<i class="fas fa-code"></i>',
    'HTML5'   =>  '<i class="fab fa-html5"></i>',
    'css/less'   =>  '<i class="fab fa-less"></i>',
    'jQuery'  =>  '<img src="img/jquery.svg" alt="jQuery">',
    'Bootstrap'  =>  '<img src="img/bootstrap-4.svg" alt="Bootsrap">',
    'Responsive Web Design'  =>  '<img src="img/rwd.svg" alt="Responsive Web Design">',
    'SEO'  =>  '<img src="img/ic_analytics.svg" alt="Search Engine Optimization">',
    'Joomla!'  =>  '<i class="fab fa-joomla"></i>',
    'WordPress'  =>  '<i class="fab fa-wordpress"></i>',
    'PrestaShop'  =>  '<img src="img/prestashop.svg" alt="PrestaShop">',
    'eCommerce'  =>  '<i class="fas fa-cash-register"></i>',
    'Marketing Automation'  =>  '<i class="fas fa-cogs"></i>',
);
ob_start();
    foreach($umiejetnosc as $tytul => $ikona) { echo "$tytul, "; }
    $lista = ob_get_contents();
ob_end_clean();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-47426351-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-47426351-1');
        </script>        
        
        <title>Jet IT - Lech Kurant - <?php echo "$lista"; ?></title>
        <meta name="description" content="Jet IT - Lech Kurant">
        <meta name="author" content="Jet IT">
        <meta name="keywords" content="<?php echo "$lista"; ?>">

	<meta property="og:image" content="http://jet-it.pl/img/logo_300x300.png">
	<meta property="og:title" content="Jet IT - Lech Kurant">        
	<meta property="og:description" content="<?php echo "$lista"; ?>">

        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon72.png">
	<meta name="theme-color" content="#15b4c9">        

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="fonts/webserveroff_regular_polish/stylesheet.css">
        <link href="style/css/style.css" rel="stylesheet">
    </head>
    <body>
        <video autoplay muted loop id="video">
            <source src="img/tlo.mp4" type="video/mp4">
        </video>
        <main>            
            <img id="logo" src="img/logo_777x300.svg" alt="Jet IT } - logo" />                          
        </main>
        <section>
<?php
    foreach($umiejetnosc as $tytul => $ikona) {
        echo '            <article>' . PHP_EOL;
        echo '              <h1>' . $tytul . '</h1>' . PHP_EOL;
        echo '              ' . $ikona . PHP_EOL;
        echo '            </article>' . PHP_EOL;
    }
?>
        </section>
        <footer>
            <ul>
                <li><a href="tel:+48886556899">gsm/whatsapp:<br>+48&nbsp;886&nbsp;556&nbsp;899</a></li>
                <li><a href="mailto:info@jet-it.pl">email:<br>info[at]jet-it.pl</a></li>
            </ul>
        </footer>
        
        <script type='text/javascript' src='skrypty/jquery-3.3.1.min.js'></script>
        <script type='text/javascript' src='skrypty/skrypty.min.js'></script>
    </body>
</html>