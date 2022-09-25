<?php 
  include "admin/db_connection.php";
  
?>
<!DOCTYPE html>

<html lang="en" class="no-js">
<!-- <head> -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Northampton blog </title>
    <!-- homecss -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link href="mycss.css" rel="stylesheet">
    <!-- home css above -->
   

<body> 
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}

body { margin: 0; } 
div#slider { overflow: hidden; }
div#slider figure img { width: 20%; float: left; }
div#slider figure { 
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 30s slidy infinite; 
}


* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>


<body>


<h1 class="head">
			
				<h1>Northampton News</h1>
			
</h1>
<div class="navbar">

  <a href="index.php">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">categories 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <?php 
                                    $sql_select_category = "SELECT * FROM categories ORDER BY cat_priority asc";
                                    //
                                    $stmt = $pdo->prepare($sql_select_category);
                                    $stmt->execute();
                                  $rowcategory = $stmt->fetchAll();

                                    // $result_sql_select_category = mysqli_query($dbconnection, $sql_select_category);
                                    // $counter_category_post=0;
                                    // while ($rowcategory = mysqli_fetch_assoc($result_sql_select_category))
                                    {

                                    $view_category_id = $rowcategory['id'];
                                    $view_cat_title = $rowcategory['cat_title'];

                                    $sql_select_post_for_category = "SELECT * FROM posts WHERE post_category = {$view_category_id}";
                                    //
                                    $stmt = $pdo->prepare($sql_select_post_for_category);
                                    $stmt->execute([$view_category_id]);
                                    $rowpost_for_category = $stmt->fetchAll();

                                    // $result_sql_select_post_for_category = mysqli_query($dbconnection, $sql_select_post_for_category);
                                    // while ($rowpost_for_category = mysqli_fetch_assoc($result_sql_select_post_for_category))
                                    {
                                                    
                                    $counter_category_post++;
                                    }
                                    if ($counter_category_post>0)
                                    {
                                    
                                    $counter_category_post=0;
                                ?>
                            <a class="dropdown-item" href="categories.php?catid=<?= $view_category_id; ?>"><?php echo $view_cat_title; ?></a>
                            <?php
                                    }
                                }
                                ?>
    </div>
  </div> 
</div>


<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
    <?php 
        if (isset($_GET['catid'])) 
        {
          $no_posts_per_page = 15;
          if (isset($_GET['page']))
          {
            $page = $_GET['page'];
          }
          else
          {
            $page = 1;
          }
          $start = $no_posts_per_page * $page - $no_posts_per_page;

          $selected_category_page= $_GET['catid'];
          $sql_select_category_page = "SELECT * FROM categories WHERE id = {$selected_category_page}";
          //
          $stmt = $pdo->prepare($sql_select_category_page);
          $stmt->execute([$selected_category_page]);
          $rowcategorypage = $stmt->fetchAll();

          // $result_sql_select_category_page = mysqli_query($dbconnection, $sql_select_category_page);
          //       while ($rowcategorypage = mysqli_fetch_assoc($result_sql_select_category_page))
                {
                  $view_category_id = $rowcategorypage['id'];
                  $view_cat_title = $rowcategorypage['cat_title'];
                }
        }

         ?>
        <div >
            <div  data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"><?php echo $view_cat_title;?></div>
                </div>
                <?php 
                $sql_select_post = "SELECT * FROM posts WHERE post_status = 1 AND post_category = {$selected_category_page} ORDER BY id desc LIMIT {$start} ,{$no_posts_per_page}";
                //
                $stmt = $pdo->prepare($sql_select_post);
                $stmt->execute();
                $rowpost = $stmt->fetchAll();
                // $result_sql_select_post = mysqli_query($dbconnection, $sql_select_post);
                // $post_counter_for_category = 0;
                // while ($rowpost = mysqli_fetch_assoc($result_sql_select_post))
                {
                  $post_counter_for_category++;
                  $view_post_id = $rowpost['id'];
                  $view_post_category = $rowpost['post_category'];
                  $view_post_title = $rowpost['post_title'];
                  $view_post_autor = $rowpost['post_autor'];
                  $view_post_date = $rowpost['post_date'];
                  $view_post_edit_date = $rowpost['post_edit_date'];
                  $view_post_image = $rowpost['post_image'];
                  $view_post_text = $rowpost['post_text'];
                  $view_post_tag = $rowpost['post_tag'];
                  $view_post_visit_counter = $rowpost['post_visit_counter'];
                  $view_post_status = $rowpost['post_status'];
                  $view_post_priority = $rowpost['post_priority'];

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
              <div>
                    <div>
                        <div >
                            <div ><img src="admin/images/blog/<?php  echo $view_post_image; ?>" alt="" /></div>
                            <div></div>
                        </div>
                    </div>
                    <div >
                         <a href="single.php?postid=<?= $view_post_id; ?>" class="fh5co_magna py-2"><?php echo $view_post_title; ?></a>
                        <div ><?php //echo $view_post_text; 
                          echo substr($view_post_text, 0, 200) . "...";?>
                          
                        </div>
                       
                   
                    </div>
                </div>
                
               
                <?php
                }
                ?>
                
            </div>
                 
                
           
            <div >
                <div>
                    <div class="spin" >Category</div>
                </div>
              
                
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

        <div class="spin">
            <div class="spinner" >Trending News Click To view The News;</div>
        </div>
        <div >
        <?php 
                $counter_popular= 0;
                $sql_select_post_popular = "SELECT * FROM posts WHERE post_status = 1 ORDER BY post_visit_counter DESC LIMIT 0,5";
                //

                $stmt = $pdo->prepare($sql_select_post_popular);
                $stmt->execute();
                $rowpost_popular = $stmt->fetchAll();
                // $result_sql_select_post_popular = mysqli_query($dbconnection, $sql_select_post_popular);
                // while ($rowpost_popular = mysqli_fetch_assoc($result_sql_select_post_popular))
                {
                  $view_post_id_popular = $rowpost_popular['id'];
                  $view_post_category_popular = $rowpost_popular['post_category'];
                  $view_post_title_popular = $rowpost_popular['post_title'];
                  $view_post_autor_popular = $rowpost_popular['post_autor'];
                  $view_post_date_popular = $rowpost_popular['post_date'];
                  $view_post_edit_date_popular = $rowpost_popular['post_edit_date'];
                  $view_post_image_popular = $rowpost_popular['post_image'];
                  $view_post_text_popular = $rowpost_popular['post_text'];
                  $view_post_tag_popular = $rowpost_popular['post_tag'];
                  $view_post_visit_counter_popular = $rowpost_popular['post_visit_counter'];
                  $view_post_status_popular = $rowpost_popular['post_status'];
                  $view_post_priority_popular = $rowpost_popular['post_priority'];
                 
                  $counter_popular++;
                  ?>
                  
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    
                    <div>
                    <a href="single.php?postid=<?=$view_post_id_popular ?>"style="color: #000000"><?php echo $view_post_title_popular;?> <span class=""></span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> <?php echo $view_post_date_popular; ?></div>
                    </div>
                </div>
            </div>
            <?php
                  
                }
                  
             ?>
           
            
            </div>
        </div>

<footer class="foot">
			&copy; Northampton News 2017 <a href="google.com"> Northampton News</a>
</footer>

<style>
    /* for footer */
.foot{
    color:white;
    background-color: #555;
    text-align:center;
    margin-top:90px;
   
   
}
</style>

</body>
</html>