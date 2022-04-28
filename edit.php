<?php

include 'header.php';
require 'config.php';

$sql = "SELECT * FROM todo WHERE id=".$_GET['id'];
$statement = $pdo->prepare($sql);
$statement->execute();
$result = $statement->fetchAll();

if($_POST) {
  $task = $_POST['task'];
  $process = $_POST['process'];

  if($_POST != NULL) {
  $sql = "UPDATE todo SET task='$task', process='$process' WHERE id=".$_GET['id'];
  $statement = $pdo->prepare($sql);
  $update = $statement->execute();
  }else {
      echo "<script>alert('Please fill Something !.');
      window.location.href='edit.php';</script>";
  }

  if($update) {
      echo "<script>alert('Successfully Updated !.');
      window.location.href='index.php';</script>";
  }
  //header('location: index.php');
}

?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Edit Task (<?= $result[0]['id'];?>)</h3>
                </div>
                <div class="card-body">
                  <form action="" method="post">
                    <div class="form-group mb-3">
                      <label for="task">Your Task:</label>
                      <input type="text" name="task" class="form-control" value="<?= $result[0]['task'];?>">
                    </div>
                    <div class="form-group mb-3">
                      <label for="task">Task Details:</label>
                      <input type="text" name="process" class="form-control" value="<?= $result[0]['process'];?>">
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
</div>

<?php

include 'footer.php';

?>

<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div> -->