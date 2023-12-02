<?php 
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
?>
<?php require_once('../private/initialize.php'); ?>

<?php 
$pageTitle = 'Welcome to SAS';
include_once(SHARED_PATH . '/salamander-header.php');
?>
<main>
  <h1>Welcome to SAS</h1>
  <p>The Southern Appalachian Mountains Region is often hailed as the Salamander Capital of the World. In fact, the Smithsonian Conservation Biology Institute proclaims that the Appalachian region is home to more salamander species than anywhere else in the world, making it a true hotspot for salamander biodiversity.</p> 
  
  <p><a href="https://www.savethesalamanders.com/appalachian-salamanders/">Source</a></p>
</main>
<footer>
  <?php include_once(SHARED_PATH . '/salamander-footer.php'); ?>
</footer>
