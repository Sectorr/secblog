<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= (isset($title) ? $title : config('blog')['name']) ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= asset('assets/css/style.css') ?>">
</head>
<body>
<div class="container">
    <div class="row header">
        <div class="col-md-4 text-right pull-right">
            <?php include 'components/socials.php'; ?>
        </div>
        <div class="col-md-8">
            <a href="<?= route('home') ?>" class="site-title"><?= config('blog')['name'] ?></a>
            <h5 class="text-muted"><?= config('blog')['subtitle'] ?></h5>
        </div>

    </div>
    <hr>