<?php require_once('../../private/initialize.php');

$page_title = 'View Salamander';
include(SHARED_PATH . '/salamander-header.php');
$id = $_GET['id'] ?? '1'; // PHP > 7.0
$salamander = find_salamander_by_id($id);
?>

<h2>Salamander Details</h2>
<p><strong>ID:</strong><?= h($salamander['id']); ?></p>
<p><strong>Name:</strong><?= h($salamander['name']); ?></p>
<p><strong>Habitat:</strong><br> <?= h($salamander['habitat']); ?> </p>
<p><strong>Description:</strong><br> <?= h($salamander['description']); ?></p>

<p><a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a></p>
  <!--
   <p> Page ID: <?= //echo h($salamander['menu_name']); ?> </p>

   <div class="attributes">
     <dl>
       <dt>Menu Name</dt>
       <dd><?php //echo h($salamander['menu_name']); ?></dd>
     </dl>
     <dl>
       <dt>Position</dt>
       <dd><?php //echo h($salamander['position']); ?></dd>
     </dl>
     <dl>
       <dt>Visible</dt>
       <dd><?php //echo $salamander['visible'] == '1' ? 'true' : 'false'; ?></dd>
     </dl>
   </div>
-->
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
