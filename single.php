<?php 
ob_start();
  include "admin/db_connection.php";
?>
<?php
      
      if (isset($_GET['postid'])) 
      {
        $edit_post_id_visit=$_GET['postid'];

        $sql_select_post_visit = "SELECT * FROM posts WHERE id={$edit_post_id_visit}";
                 //
                 $stmt = $pdo->prepare($sql_select_post_visit);
                 $stmt->execute([$edit_post_id_visit]);
                 $rowpost_visit = $stmt->fetchAll();
                // $result_sql_select_post_visit = mysqli_query($dbconnection, $sql_select_post_visit);
                // while ($rowpost_visit = mysqli_fetch_assoc($result_sql_select_post_visit))
                {
                  
                  $view_post_visit_counter_all_visits = $rowpost_visit['post_visit_counter'];

                }


        $sql_edit_post_visit = "UPDATE posts SET post_visit_counter='$view_post_visit_counter_all_visits'+1 WHERE id={$edit_post_id_visit}";
        $result_sql_edit_post_visit= mysqli_query($dbconnection, $sql_edit_post_visit);
        if (!$result_sql_edit_post_visit)
                {
                   public PDO::errorInfo():
                  //  die("Error description:" . mysqli_error());
                }
                else
                {
                  //echo "Data added successfully";
                  //header("Location: post_admin.php");
                }
      }
     ?>
<!DOCTYPE html>

<html lang="en" class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Northampton News</title>


   
</head>
<body class="single">


<?php 
      if (isset($_GET['postid'])) 
      {
        $selected_post_page= $_GET['postid'];

                $sql_select_post_page = "SELECT * FROM posts WHERE id={$selected_post_page}";
                //
                $stmt = $pdo->prepare($sql_select_post_page);
                $stmt->execute([$selected_post_page]);
                $rowpostpage = $stmt->fetchAll();
                // $result_sql_select_post_page = mysqli_query($dbconnection, $sql_select_post_page);
                // while ($rowpostpage = mysqli_fetch_assoc($result_sql_select_post_page))
                {
                  $view_post_id = $rowpostpage['id'];
                  $view_post_category = $rowpostpage['post_category'];
                  $view_post_title = $rowpostpage['post_title'];
                  $view_post_autor = $rowpostpage['post_autor'];
                  $view_post_date = $rowpostpage['post_date'];
                  $view_post_edit_date = $rowpostpage['post_edit_date'];
                  $view_post_image = $rowpostpage['post_image'];
                  $view_post_text = $rowpostpage['post_text'];
                  $view_post_tag = $rowpostpage['post_tag'];
                  $view_post_visit_counter = $rowpostpage['post_visit_counter'];
                  $view_post_status = $rowpostpage['post_status'];
                  $view_post_priority = $rowpostpage['post_priority'];
                }
      }
      else
      {
        header("Location: index.php");
      }
?>
 <!-- Author -->
 <?php 
                $sql_select_users_article = "SELECT * FROM users WHERE id={$view_post_autor}";
                //
                $stmt = $pdo->prepare($sql_select_users_article);
                $stmt->execute([$view_post_autor]);
                $rowusers_article = $stmt->fetchAll();
                // $result_sql_select_users_article = mysqli_query($dbconnection, $sql_select_users_article);
                // while ($rowusers_article = mysqli_fetch_assoc($result_sql_select_users_article))
                {
                  $view_users_id = $rowusers_article['id'];
                  $view_users_name = $rowusers_article['name'];
                  $view_users_image = $rowusers_article['image'];
                } 
             ?>


            
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60a3f9c9d657602b"></script>

<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <p>
                <?php echo $view_post_text; ?>
                </p>
                <!-- Comments Form -->
                <?php include "layout/comment_form.php";?>

                   <?php include "layout/comments.php"; ?>
            </div>
        

            
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Click one to see in which topic you want to see the NEWS ABOUT::</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                <?php 
                      $sql_select_category_wiget = "SELECT * FROM categories";
                      //
                      $stmt = $pdo->prepare($sql_select_category_wiget);
                      $stmt->execute();
                     $rowcategory_wiget = $stmt->fetchAll();
                      // $result_sql_select_category_wiget = mysqli_query($dbconnection, $sql_select_category_wiget);

                      //  $category_counter= 0;
                      //   while ($rowcategory_wiget= mysqli_fetch_assoc( $result_sql_select_category_wiget)) 
                       {
                        $category_counter++;
                        $id_category_wiget = $rowcategory_wiget['id'];
                        $title_category_wiget = $rowcategory_wiget['cat_title'];


                   ?>
                    <a href="categories.php?catid=<?=$id_category_wiget; ?>" class="fh5co_tagg">
                    <?php 
                       if ($category_counter % 15 != 0)
                       {
                          echo $title_category_wiget;
                       }
                      

                       ?>
                      </a>
                    
                    
                    </a>
                    <?php 
                        }
                    ?>
                    
                </div>

        </div>

</div>





</body>
</html>