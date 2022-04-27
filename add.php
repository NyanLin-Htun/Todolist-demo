<?php
include 'header.php';
require 'config.php';

if($_POST) {
    $task = $_POST['task'];
    $process = $_POST['process'];

    $sql = "INSERT INTO todo(task, process) VALUES (:task,:process)";
    $statement = $pdo->prepare($sql);
    $statement->execute(
        [
            ':task' => $task,
            ':process' => $process,
        ]
    );
    $result = $statement->fetch();

    header('location: index.php');
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Your Task</h3>
                </div>
                <div class="card-body">
                    <form action="add.php" method="post">
                    <div class="form-group mb-3">
                        <label for="">Your task:</label>
                        <input type="text" name="task" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Process</label>
                        <input type="text" name="process" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>