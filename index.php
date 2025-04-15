<?php
require_once 'includes/header.php';
require_once 'config/app.php';
require_once 'php/taskFunction.php';


?>

<div><?php require_once 'includes/navbar.php'; ?></div>

<main>
    <div class="app_container">
        <h2 class="app_second-title"><?= APP_NAME ?></h2>
      
        <!-- Task Form -->
        <div class="task_form">
            <h3>Add New Task</h3>
            <form action="php/taskManager.php" method="POST">
                <label>Task Description</label>
                <input type="text" name="task_description" required>
                
                <label>Task Author</label>
                <input type="text" name="task_author" required>
                
                <label>Task Date</label>
                <input type="date" name="task_date" required>
                
                <button type="submit">Add Task +</button>
            </form>

            <!-- Task Display -->
            <div class="task_container">
                <?php
                $tasks = getAllTasks();
                
                if (empty($tasks)) {
                    echo '<p class="no-tasks">No tasks yet. Add one above!</p>';
                } else {
                    foreach ($tasks as $task) {
                        echo '
                        <div class="task_card">
                            <h3>'.htmlspecialchars($task['description']).'</h3>
                            <div class="task_meta">
                                <span>Author: '.htmlspecialchars($task['author']).'</span>
                                <span>Date: '.date('d/m/Y', strtotime($task['date'])).'</span>
                            </div>
                        </div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>