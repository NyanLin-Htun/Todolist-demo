<?php
include 'header.php';
require 'config.php';

$sql = "SELECT * FROM todo WHERE process='In Progress'";
$statement = $pdo->prepare($sql);
$statement->execute();
$users_incomplete = $statement->fetchAll();

$sql = "SELECT * FROM todo WHERE process='Complete'";
$statement = $pdo->prepare($sql);
$statement->execute();
$users_complete = $statement->fetchAll();

?>


<div class="container">
    <div class="row">
        <div class="col">
            <div class="col-md-12">
                <div class="card mb-3 border border-0">
                    <div class="card-header">
                        <h3 class="card-title">To Do List</h3>
                    </div> 
                        <!--<div class="card-body">
                        <form class="row g-2">
                            <div class="col-md-10">
                            <input type="text" name="task" placeholder="Enter Your Task:" class="form-control mb-3">
                            </div>
                            <div class="col-md-2">
                            <a href="" class="btn btn-success">+ADD</a>
                            </div>
                        </form>
                        <form class="row g-2">
                            <div class="col-md-10">
                            <input type="text" name="process" placeholder="In Progress or Completed" class="form-control mb-3">
                            </div>
                            <div class="col-md-2">
                            <a href="" class="btn btn-success">+ADD</a>
                            </div>
                        </form>               
                        </div>  -->
                        <a href="add.php" class="btn btn-success">+ADD Task</a>
                </div> 
                
            </div> 
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="col-md-12">
                <div class="card border border-0">
                    <div class="card-header">
                        <h3 class="card-title">Tasks</h3>
                    </div>
                    <div class="card-body">
                    <div class="row g-2">
  	                <div class="col-md-6">
                       <div class="card mb-3 border border-0">
                            <div class="card-header">
                                <h5 class="card-title">Task in progress (<?= count($users_incomplete);?>)</h5>
                            </div>
                                <div class="card-body">
                                    <?php
                                    foreach($users_incomplete as $user){
                                    
                                    ?>
                                    <div class="card mb-3">
                                        <div class="card-header bg-danger">
                                        <div class="d-flex justify-content-between">

                                            <h5 class="card-title">
                                                Task <?= $user['id'] ;?>
                                            </h5>
                                            
                                        </div>
                                         </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="d-flex justify-content-between">
                                                            
                                                            <div class="d-flex justify-content-left align-items-center">
                                                                <div><a href="complete.php?id=<?= $user['id'];?>" class="btn btn-outline-secondary"><i class="fa-solid fa-circle-check"></i></a></div>
                                                                <div>
                                                                    <h5 class="ms-2"><?= $user['task']; ?></h5>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="edit.php?id=<?= $user['id']; ?>" class="btn btn-outline-dark"><i class="fa-solid fa-user-pen"></i></i></a>
                                                                
                                                                <a href="delete.php?id=<?= $user['id'];?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
                                                            </div>
                                    </div>
                                                    </div>
                                                </div>
                                        
                                    </div>
                                
                                <?php
                            
                                
                                };
                                ?>    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border border-0">
                            <div class="card-header">
                                <h5 class="card-title"> Task Completed (<?= count($users_complete);?>)</h5>
                            </div>
                                <div class="card-body">
                                <?php
                                    foreach($users_complete as $user){
                                
                                    
                                    ?>
                                    <div class="card mb-3">
                                        <div class="card-header bg-success">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="card-title">
                                            Task <?= $user['id'] ;?>
                                            </h5>
                                            
                                        </div>
                                         </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                     <div class="d-flex justify-content-between">
                                                        <div class="d-flex justify-content-left align-items-center">
                                                            <a href="inprogress.php?id=<?= $user['id'];?>" class="btn btn-outline-secondary"><i class="fa-solid fa-circle-check"></i></a>
                                                            <h5 class="ms-2"><?= $user['task']; ?></h5>
                                                        </div>
                                                        <div>
                                                            <a href="" class="btn btn-outline-dark"><i class="fa-solid fa-user-pen"></i></a>
                                                            
                                                            <a href="delete.php?id=<?= $user['id'];?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
                                                        </div>
                                    </div>
                                                    </div>
                                                </div>
                                        
                                    </div>
                                
                                <?php
                            
                            
                                };
                                ?>
                            </div>
                        </div>
                    </div>
                </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                
            
        

<?php
include 'footer.php';
?>
