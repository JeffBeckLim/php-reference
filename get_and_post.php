<?php 
require 'index.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
     $age=$_POST['age'];
};
    
?>

<html>
<!-- it is optional to specify method if you are only using GET -->
<form class="mb-5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
    <div>
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name">
    </div>
    <div class="mb-3">
        <label for="age">Age</label>
        <input class="form-control" type="number" name="age" id="age">
    </div>
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>

<?php 
if(isset($_POST['submit'])){
    echo "<h6>You are  $name ,  $age years-old</h6>";
};
?>

</form>

</html>