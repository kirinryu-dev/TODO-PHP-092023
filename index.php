<?php
require_once 'includes/header.php';
require_once 'config/app.php';

?>

<div>
<?php 
require_once 'includes/navbar.php';
?>
</div>

<main>
    <div class="app_container">
        <h2 class="app_second-title">
            <!-- Task Management App -->
        <?php
         echo APP_NAME; 
        ?>
        </h2>

            <!-- from to add task  -->
       <div class="task_form">
        <h3>Add New Task</h3>
        <div class="form_container">
            <form action="php/taskManager.php" method="POST">
                <label for="Task Description">Task Description</label>
                <input type="text" name="task_description" placeholder="Task Description" required>
                <label for="Task_author">Task Author</label>
                <input type="text" name="task_author" placeholder="Task Author" required>
                <label for="task_date">Task Date</label>
                <input type="date" name="task_date" required>
                <button type="submit">Add Task + </button>
            </form>

            <!-- where task will be added dynamically  -->
            <div class="task_container">
                <!-- 2 choices task will be in column or in row which looks better?-->


            </div>
        </div>
     </div>
        
    </div>
</main>

<footer>
<?php
require_once 'includes/footer.php';
?>
</footer>