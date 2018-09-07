<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Starting php</title>
</head>
<body>
  <nav>
    <li><a href="about.php">About me</a></li>
    <li><a href="contact.php">Contact me</a></li>
  </nav>
<h1>My Tasks</h1>
<?php foreach ($tasks as $task):?>
<li>
  <?php if($task->completed): ?>
      <strike><?= $task->description; ?></strike>
  <?php else :?>
     <?=$task->description;?>


  <?php endif; ?>
</li>



<<?php endforeach; ?>
</body>
</html>
