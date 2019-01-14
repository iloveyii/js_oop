

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body>
<div class="row">
    <div class="col-12">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>The principles of OO JS - By Nicholas</h2>
        <hr />
        <ol>
            <?php

            function sortFiles($files)
            {
                foreach($files as $file) {
                    if (pathinfo($file, PATHINFO_EXTENSION) == 'html') {
                        preg_match('/_(\d+)\.html/', $file, $matches);
                        if(isset($matches[1])) {
                            $sorted[$matches[1]] = $file;
                        } else {
                            $sorted[] = $file;
                        }
                    }
                }

                ksort($sorted);
                return $sorted;
            }

            $dirs = scandir('./');

            foreach($dirs as $dir) {
                if(in_array($dir, ['chapter_01', 'chapter_02', 'chapter_03', 'chapter_04', 'chapter_05'])) {
                    echo '<li>' . ucfirst(str_replace('_', ' ', $dir)) . '</li>';
                    $files = scandir("./{$dir}");
                    $files = sortFiles($files);

                    echo '<ol>';
                    foreach ($files as $file) {
                        echo "<li class='list'><a href='{$dir}/{$file}' >" . preg_replace('/[^a-z]/i', ' ', ucfirst(rtrim($file, '.html'))) . '</a></li>';
                    }
                    echo '</ol>';
                }
            }
            ?>
        </ol>
        <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
    </div>
</div>

</body>
</html>

















