<?php 
  include "admin/db_connection.php";
  
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link href="mycss.css">
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

<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">categories 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <?php 
                                    $sql_select_category = "SELECT * FROM categories ORDER BY cat_priority asc";
                                    $result_sql_select_category = mysqli_query($dbconnection, $sql_select_category);
                                    $counter_category_post=0;
                                    while ($rowcategory = mysqli_fetch_assoc($result_sql_select_category))
                                    {

                                    $view_category_id = $rowcategory['id'];
                                    $view_cat_title = $rowcategory['cat_title'];

                                    $sql_select_post_for_category = "SELECT * FROM posts WHERE post_category = {$view_category_id}";
                                    $result_sql_select_post_for_category = mysqli_query($dbconnection, $sql_select_post_for_category);
                                    while ($rowpost_for_category = mysqli_fetch_assoc($result_sql_select_post_for_category))
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

<center><h1 style="font-size:50px; color:Red;"> All Categories  </h1></center> 
<hr>
<div>




<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
 
    <div class="flex flex-wrap -m-4">
    <?php 
                $counter_popular= 0;
                $sql_select_post_popular = "SELECT * FROM posts WHERE post_status = 1 ORDER BY post_visit_counter DESC LIMIT 0,5";
                $result_sql_select_post_popular = mysqli_query($dbconnection, $sql_select_post_popular);
                while ($rowpost_popular = mysqli_fetch_assoc($result_sql_select_post_popular))
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
      <div class="p-4 md:w-1/3">
        
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <div > <img src="admin/images/blog/<?php echo $view_post_image_popular;?>" alt="<?php echo $view_post_image_popular;?>" class="lg:h-48 md:h-36 w-full object-cover object-center" /> </div>
          <div class="p-6">
            
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><a href="single.php?postid=<?=$view_post_id_popular ?>"style="color: 	#000000"><?php echo $view_post_title_popular; ?> </a></h1>
           
           
            
          </div>
          
         
        </div>
        
      </div>
      <?php
                  
                }
                  
             ?>
        
        </div>
       
      </div>
    
</section>

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
