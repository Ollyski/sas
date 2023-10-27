<? php require_once('../../private/initialize.php'); ?>

<?
$salamanders = array(
    array('id' => 1, 'salamanderName' => 'Red-Legged Salamander'),
    array('id' => 2, 'salamanderName' => 'Pigeon Mountain Salamander'),
    array('id' => 3, 'salamanderName' => 'ZigZag Salamander'),
    array('id' => 4, 'salamanderName' => 'Slimy Salamander')
);
?>


<!-- Add the pageTitle for salamanders
Include a shared path to the salamander header -->

<?php 
$pageTitle = 'Salamanders';
include_once(SHARED_PATH . '/salamander-header.php');
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

    <?php foreach($salamanders as $salamander) { ?>
    <tr>
    <td><?= $salamander[id] ?></td>
    <td><?= $salamander['salamanderName'] ?></td>
    <td><a href="<? url_for('salamanders/show.php?id=' . h(u($salamander['id']))); ?>">View</a></td>
    <!-- Use url_for with show.php AND h(u) with the salamander['id'] -->
    <td><a href="#">Edit</a></td>
    <td><a href="#">Delete</a></td>
    </tr>
        <?php } ?>
  </table>
</main>
<footer>
  <? php include_once(SHARED_PATH . '/salamander-footer.php'); ?>
</footer>
