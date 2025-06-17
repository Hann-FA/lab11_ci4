
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $title; ?></title>
</head>
<body>
<?= $this->include('template/header'); ?>
<div id="wrapper">
  <!-- Main Content -->
  <div id="main">
    <div class="content-wrapper"></div>
<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>
<?= $this->include('template/footer'); ?>
</body>
</html>



