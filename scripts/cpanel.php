<div class="forms">
    <form action="insert.php" method="post">
    <h2>Add Data</h2>
        <label for="main_task">New Task:</label><input type="text" name="main_task" id="main_task"><br />
        <label for="subtask">Sub Task of:</label><input type="text" name="subtask" id="subtask"><br />
        <label for="start">Start Date:</label><input type="date" name="start" id="start"><br />
        <label for="start">End Date:</label><input type="date" name="end" id="end"><br />
        <input type="submit">
    </form>
    <form action="deleteAll.php" method="post">
    <h2>Delete Data</h2>
      	<input type="submit" id="del" value="Delete all data">
    </form>
    </div>
     