<?php require_once('../../private/initialize.php'); ?>
<!--file directory navigation correct.-->
<?php
$salamanders = [
  ['id' => '1', 'salamanderName' => 'Red-Legged Salamander'],
  ['id' => '2', 'salamanderName' => 'Pigeon Mountain Salamander'],
  ['id' => '3', 'salamanderName' => 'ZigZag Salamander'],
  ['id' => '4', 'salamanderName' => 'Slimy Salamander'],
];
?>


<!-- Add the pageTitle for salamanders
Include a shared path to the salamander header -->

<?php 
$pageTitle = 'Salamanders';?>
<?php include(SHARED_PATH . '/salamander-header.php');
?>

<main>
  <h1>Salamanders</h1>
  <a href="#">Create Salamander</a>

  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
    </tr>
    <!-- Use url_for with show.php AND h(u) with the salamander['id'] -->

    <?php foreach($salamanders as $salamander) { ?>
    <tr>
    <td><?= $salamander['id'] ?></td>
    <td><?= $salamander['salamanderName'] ?></td>
    <td><a href="<?php echo url_for('salamanders/show.php?id=' . h(u($salamander['id']))); ?>">View</a></td>
    <td><a href="#">Edit</a></td>
    <td><a href="#">Delete</a></td>
    </tr>
    <?php } ?>
  </table>
</main>
<footer>
  <?php include(SHARED_PATH . '/salamander-footer.php'); ?>
</footer>
