<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Video Embed Function</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <?php require_once 'function/video_embed.php'; ?>

    <!-- Responsive Video CSS -->
    <link href="css/video_embed.css" rel="stylesheet">

</head>

<body>

    <!-- Bootstrap Page -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <p>A simple php function that allows you to create a responsive Vimeo/YouTube video embed from the video's URL.</p>
                <p><strong>Example code:</strong></p>
                <pre>&lt;?php hc_video_embed('https://vimeo.com/89527215'); ?&gt;</pre>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Vimeo Embed Demo</h1>
                <?php hc_video_embed('https://vimeo.com/89527215'); ?>
            </div>
            <div class="col-lg-12 text-center">
                <h1>YouTube Embed Demo</h1>
                <?php hc_video_embed('https://www.youtube.com/watch?v=2YBtspm8j8M'); ?>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
