<?php 

include 'db.php';


$sql = "SELECT * FROM tasks ORDER BY created_at DESC";
$resulttask = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EVERDAY TASK</title>
  <link rel="stylesheet" href="assets/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

<div class="container">
  <h1>Complete Your Task</h1>
  <form id="addTaskForm" method="POST" action="add_task.php">
    <input type="text" name="title" placeholder="Task Title" required>
    <textarea name="description" placeholder="Task Description required"></textarea>
    <button type="submit">Add Task</button>
  </form>

  <div id="tasklist">
    <?php while($row=$resulttask->fetch_assoc()):?>
      <div class="task <?= $row['status'] == 'Completed' ? 'completed' : '' ?>" data-id="<?= $row['id'] ?>">
        <h3><?php echo htmlspecialchars($row['title']);?></h3>
        <p><?php echo htmlspecialchars($row['description']);?></p>

        <div class="actions">
                        <button class="markComplete" data-id="<?= $row['id'] ?>">Complete</button>
                        <button class="deleteTask" data-id="<?= $row['id'] ?>">Delete</button>
        </div>
      </div>
      <?php endwhile; ?>
  </div>
</div>
<script src="assets/script.js"></script>

</body>
</html>