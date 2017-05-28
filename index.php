<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Newsletter subscription</title>
    <!-- Css -->
    <link href="https://bootswatch.com/cosmo/bootstrap.css" rel="stylesheet">
    <link media="all" type="text/css" rel="stylesheet" href="http://newsletter.softhem.se/css/site.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="wrapper">

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hr />
                    <h2>The principles of OO JS - By Nicholas</h2>
                    <hr />
                    <h1>Index
                        <ol>
                        <?php
                            $files = scandir('./');
                            foreach($files as $file) {
                                if(pathinfo($file, PATHINFO_EXTENSION) == 'html') {
                                    echo "<li class='list'><a href='/{$file}' >" . $file . '</a></li>';
                                }
                            }
                        ?>
                        </ol>
                </div>
            </div>
        </div>
    </section>

</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; SoftHem 2017</p>
        <p class="pull-right">Powered by <a href="http://www.softhem.se/" rel="external">SoftHem</a></p>
    </div>
</footer>

</body>
</html>