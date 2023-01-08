<?php
require_once 'PDOConnection.php';
$id = $_GET['id'];
if (isset($_POST['update'])) {

    $status = $_POST['status'];
    
   

    // Query for Query for Updation
    $sql = "UPDATE orders set status=:st where id='$id'";
  
    $query = $conn->prepare($sql);

    $query->bindParam(':st', $status, PDO::PARAM_STR);

    
    // Query Execution
    $query->execute();
    // Mesage after updation
    echo "<script>alert('Record Updated successfully');</script>";
    // Code for redirection
    echo "<script>window.location.href='Orders.php'</script>";
}
?>



    <div class="container">

        <div class="row">
            <div class="col-md-12">
            
            </div>
        </div>

        <?php
        // Get the userid
        $userid = $_GET['id'];
        $sql = "SELECT * from orders where id=:uid";
        //Prepare the query:
        $query = $conn->prepare($sql);
        //Bind the parameters
        $query->bindParam(':uid', $userid, PDO::PARAM_STR);
        //Execute the query:
        $query->execute();
        //Assign the data which you pulled from the database (in the preceding step) to a variable.
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        //In case that the query returned at least one record, we can echo the records within a foreach loop:
            // print_r($results);
        foreach ($results as $result) {

        ?>

        <form name="insertrecord" method="post">
            <div class="row">
                <div class="col-md-4"><b>status</b>
                    <select name="status" class="form-control" id="status" 
                        value="<?php echo htmlentities($result->status); ?>">
                        <option value="pending">pending</option>
                        <option value="completed">completed</option>
                    </select>
                </div>
            </div>

            <div class="row" style="margin-top:3%">
                <div class="col-md-8 ">
                    <input type="submit" name="update" value="Update" style="width:48%; background-color: #1e78fc; border-color: #1e78fc; color: white; border-radius: 10px;">
                </div>
            </div>

        </form>
        <?php } ?>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- textaddneww -->
        <ins class="adsbygoogle" style="display:inline-block;width:728px;height:15px"
            data-ad-client="ca-pub-8906663933481361" data-ad-slot="3318815534"></ins>
    </div>
    </div>