    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="style.css">
<div class="addTaskContainer">
    <div class="addTaskSubContainer">
        <div class="addTaskTitle">
            <h2>Add New Task</h2>
            <span>Tackle your goals in daily doses</span>    
            <a href="index.php" id="addTaskCancel"><i class="fas fa-times"></i></a>
        </div>
        <div class="addTask">
            <form action="">
                <label for="taskTitle">Task Title</label>
                <input type="text" id="taskTitle">
                <label for="taskDes">Task Description</label>
                <textarea name="" id="taskDes" cols="83" rows="7"></textarea>
                <label for="date">Deadline</label>
                <input type="date" name="date" id="date">
                <label for="time"></label>
                <input type="time" name="time" id="time">
                <input type="submit" value="Add" id="addTaskBtn">
            </form>
        </div>
    </div>
</div>