    <?php
      $current_date = date('d/m/Y');
      if (isset($_POST['save_comment']))
      {
        $add_comm_posid = $selected_post_page;
        $add_comm_autor=$_POST['comm_autor'];
        $add_comm_email=$_POST['comm_email'];
        $add_comm_text=$_POST['comm_text'];
        //


        $stmt = $pdo->prepare($add_comm_autor);
     

      $stmt = $pdo->prepare($add_comm_email);
  

    $stmt = $pdo->prepare($add_comm_text);


        // $add_comm_autor = mysqli_real_escape_string($dbconnection, $add_comm_autor);
        // $add_comm_email = mysqli_real_escape_string($dbconnection, $add_comm_email);
        // $add_comm_text = mysqli_real_escape_string($dbconnection, $add_comm_text);

        $sql_add_comment = "INSERT INTO comments(postid, comm_autor, comm_email, comm_text, comm_status,comm_date) VALUES('$add_comm_posid', '$add_comm_autor', '$add_comm_email', '$add_comm_text', '0', '$current_date' )";
        //


        $stmt = $pdo->prepare($sql_add_comment);
      
        // $result_sql_add_comment= mysqli_query($dbconnection, $sql_add_comment);

        echo "testiram";
        if (!$sql_add_comment)
                {
                  public PDO::errorInfo():
                }
                else
                {
                  echo "Data added successfully";
                  header("Location: " . $_SERVER['REQUEST_URI']);
                }
      }
     ?> 

           
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">

            <form method="post" action="" onsubmit="myFunction()">
              <div class="form-group">
                <?php 
                   if (!isset($_SESSION['type']))
                    {
                      # code...
                    

                 ?>
                <label for="autor" class="col-form-label">Author:</label>
                <input type="text" class="form-control" id="comm_autor" name="comm_autor" required="">
                 <label for="email" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="comm_email" name="comm_email" required=""><br>
                <?php 
                  }
                  else
                  {
      
                  
                 ?>
<?php
                 if (isset($_SESSION['type'])){
                  $success_login_id = $_SESSION['id'];
                  $success_login_name_admin = $_SESSION['name'];
                  $success_login_username_admin = $_SESSION['username'];
                  $success_login_email_admin = $_SESSION['email'];
                  $success_login_type_password_admin = $_SESSION['password'];
                  $success_login_gender_admin = $_SESSION['gender'];
                  $success_login_image_admin = $_SESSION['image'];
                  $success_login_code_admin = $_SESSION['code'];
                  $success_login_status_admin = $_SESSION['status'];
                  $success_login_type_admin = $_SESSION['type'];

                 }
                 ?>
                 <p class="lead">
                   <img src="admin/images/users/<?php echo $success_login_image_admin; ?>" class="zoom3" alt="User Image" width="50" align="left" hspace="5">
                      <a href="#"><?php echo $success_login_name_admin; ?></a> <br>Author <a href="#">Paperstown</a>
                    
                  </p>
                
                <input type="hidden" class="form-control" id="comm_autor" name="comm_autor" value="<?php echo $success_login_id; ?>" required="">

                <input type="hidden" class="form-control" id="comm_email" name="comm_email" value="<?php echo $success_login_email_admin; ?>" required=""><br>
                <?php } ?>
                <textarea class="form-control" name="comm_text" rows="6" required=""></textarea>
              </div>
              <button type="submit" name="save_comment" class="btn btn-primary">Submit</button>
            </form>
            

          </div>
        </div>
        <!-- Success Alert -->
    
        <script>
function myFunction() {
  alert("Your comment is awaiting moderation and your will be visible after it has been approved!!");
  document.getElementById("p11").innerHTML = '<label for="user_type" class="col-form-label"> User type:</label>';
  var messageSend = 1;
  //commentMessage();
}
</script>

