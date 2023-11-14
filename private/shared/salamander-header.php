<?php
  if(!isset($pageTitle)) { 
    $pageTitle = 'Salamanders'; 
  }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>SAS - <?php echo $pageTitle; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?= url_for('/stylesheets/salamanders.css'); ?>" />
  </head>

  <body>
    <header>
      <h1>Southern Appalachian Salamanders (SAS)</h1>
    </header>
    <navigation>
      <ul>
      <li><a href="<?= url_for('/'); ?>">Home</a></li>
      <li><a href="<?= url_for('salamanders/'); ?>">Salamanders</a></li>
      </ul>
    </navigation>

