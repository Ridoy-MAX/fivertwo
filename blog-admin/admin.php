<?php
  session_start();
require('../php/db.php');

if(!(isset($_SESSION['login_start']))) {
  header('location:../admin_login.php');
}

$selecteall_from_db = "SELECT * FROM posts ORDER BY id DESC";
$selectall_push = mysqli_query($dbconnect,$selecteall_from_db);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Jane Ambler</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/trumbowyg.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
</head>
<body>
    
    <header id="header">
        <div class="header_wrap">
            <div class="text">Admin - Jane Ambler</div>
            <div class="logout_button">
                <a href="logout.php">Log Out</a>
            </div>
        </div>
    </header>

    <section id="admin_body" class="position-relative">
            <div class="nav_toggler">
              <i class="fa fa-bars"></i>
            </div>
            <div class="admin_main">
                <div class="menu">
                    <div class="menu_header d-flex align-items-center w-100">
                      <div class="nav_back">
                      <i class="fa fa-arrow-left" aria-hidden="true"></i>
                      </div>
                        <p class="mb-0">Menu</p>
                    </div>
                    <div class="menu_body">
                        <ul class="mb-0 ps-0 nav nav-tabs" id="myTab" role="tablist">
                            <li role="presentation">
                                <button class="nav_wrap active" id="hometab" data-bs-toggle="tab" data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span>Home</span>
                                </button>
                            </li>
                            <li role="presentation">
                                <button class="nav_wrap" id="addposttab" data-bs-toggle="tab" data-bs-target="#add_post" role="tab" aria-controls="add_post" aria-selected="true">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    <span>Add Post</span>
                                </button>
                            </li>
                            <li role="presentation">
                                <button class="nav_wrap" id="editposttab" data-bs-toggle="tab" data-bs-target="#edit_post" role="tab" aria-controls="edit_post" aria-selected="true">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    <span>Edit Post</span>
                                </button>
                            </li>
                            <li role="presentation">
                                <button class="nav_wrap" id="removeposttab" data-bs-toggle="tab" data-bs-target="#remove_post" role="tab" aria-controls="remove_post" aria-selected="true">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                    <span>Remove</span>
                                </button>
                            </li>
                            <li role="presentation">
                                <button class="nav_wrap" id="restoreposttab" data-bs-toggle="tab" data-bs-target="#restore_post" role="tab" aria-controls="restore_post" aria-selected="true">
                                    <i class="fa fa-repeat" aria-hidden="true"></i>
                                    <span>Restore</span>
                                </button>
                            </li>
                            <li role="presentation">
                                <button class="nav_wrap" id="deleteposttab" data-bs-toggle="tab" data-bs-target="#delete_post" role="tab" aria-controls="delete_post" aria-selected="true">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    <span>Delete</span>
                                </button>
                            </li>
                            <li role="presentation" class="d-none">
                                <button class="nav_wrap" id="editcorrectpost" data-bs-toggle="tab" data-bs-target="#edit_correct_post" role="tab" aria-controls="edit_correct_post" aria-selected="true">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    <span>edit_correct_post</span>
                                </button>
                            </li>
                            <li role="presentation">
                                <a href="logout.php">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>Log Out</span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="../blog.php" target="blank">
                                    <i class="fa fa-link" aria-hidden="true"></i>
                                    <span>Blog Home</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main_body">
                    <div class="tab-content" id="myTabContent">
                        <?php
                          $active_post = 0;
                          $trash_post = 0;
                          $editable_post = 0;
                          foreach($selectall_push as $key=>$value){
                            if($value['status'] == 0) {
                              $active_post++;
                            }
                            if($value['status'] == 1) {
                              $trash_post++;
                            }
                            if($value['status'] == 0) {
                              $editable_post++;
                            }
                          }
                        
                        ?>
                        <!-----------------Home Tab start------------->

                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="hometab">
                            <div class="modal_header text-center">
                                <p>Home</p>
                            </div>
                            <div class="container-fluid">
                                <div class="row nav nav-tabs home_post">
                                    <div class="col-lg-4 col-6 d-flex justify-content-center">
                                        <button class="post_wrap active_btn">
                                            <span class="count"><?=$active_post;?></span>
                                            <span class="title">Active Post</span>
                                        </button>
                                    </div>
                                    <div class="col-lg-4 col-6 d-flex justify-content-center">
                                        <button class="post_wrap trash_btn">
                                            <span class="count"><?=$trash_post?></span>
                                            <span class="title">Trashed Post</span>
                                        </button>
                                    </div>
                                    <div class="col-lg-4 col-6 mt-4 mt-lg-0 mx-auto d-flex justify-content-center">
                                        <button class="post_wrap edit_btn">
                                            <span class="count"><?=$editable_post?></span>
                                            <span class="title">Editable Post</span>
                                        </button>
                                    </div>
                            </div>
                            </div>

                            <div class="recent_post_container">
                                <table>
                                    <tr>
                                        <th width="100%">Title</th>
                                      </tr>
                                      <?php 
                                      
                                      foreach($selectall_push as $key=>$value) {
                                         if($key < 16 && $value['status'] == 0) {
                                        ?>
                                        <tr>
                                        <td><?=$value['header']?></td>
                                      </tr>
                                        <?php
                                         }
                                      }
                                      
                                      ?>
                                </table>
                            </div>

                        </div>

                        <!-----------------Add Post Tab start------------->

                        <div class="tab-pane fade" id="add_post" role="tabpanel" aria-labelledby="addposttab">
                            
                            <div class="modal_header text-center">
                                <p>Add a Post</p>
                            </div>
                            <div class="add_post_main px-3">
                              <?php 
                              
                                if(isset($_SESSION['post_success'])) {
                                  echo '<div class="post_success"><span>';
                                  echo $_SESSION['post_success'];
                                  echo '</span></div>';
                                  unset($_SESSION['post_success']);
                                }
                              
                              ?>
                                <form action="<?php echo htmlspecialchars('../php/blog_input.php') ?>" method="POST" enctype="multipart/form-data">
                                            
                                    <div class="input_wrap">
                                        <h4 class="title mb-2">Banner Image</h4>
                                        <div class="file-upload">
                                            <div class="image-upload-wrap">
                                              <input class="file-upload-input" name="image" type='file' onchange="readURL(this);" accept="image/*" />
                                              <div class="drag-text">
                                                <h3>Drag and drop a file or select add Image (690px X 310px)</h3>
                                              </div>
                                            </div>
                                            <div class="file-upload-content">
                                              <img class="file-upload-image" src="#" alt="your image" />
                                              <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    <?php 
                                        
                                        if(isset($_SESSION['imageerr'])) {
                                          echo '<div class="field_err mt-1">';
                                          echo $_SESSION['imageerr'];
                                          echo '</div>';
                                          unset($_SESSION['imageerr']);
                                        }

                                    ?>
                                    <div class="input_wrap mb-5 mt-5">
                                        <h4 class="title mb-2">Title<span>(Max 60 Characters)</span></h4>
                                        <input type="text" maxlength="60" name="title" placeholder="Please enter a title here" value="<?php  
                                        
                                        if(isset($_SESSION['title'])) {
                                          echo $_SESSION['title'];
                                          unset($_SESSION['title']);
                                        }
                                        
                                        ?>">
                                        <?php 
                                        
                                        if(isset($_SESSION['titleerr'])) {
                                          echo '<div class="field_err mt-1">';
                                          echo $_SESSION['titleerr'];
                                          echo '</div>';
                                          unset($_SESSION['titleerr']);
                                        }

                                        ?>
                                    </div>
                                    <div class="input_wrap ">
                                        <h4 class="title mb-2">Post</h4>
                                        <textarea id="Post_write" name="post_content">
                                        <?php
                                        
                                        if(isset($_SESSION['article'])) {
                                          echo $_SESSION['article'];
                                          unset($_SESSION['article']);
                                        }
                                        ?>
                                        </textarea>
                                    </div>
                                    <?php 
                                        
                                        if(isset($_SESSION['articleerr'])) {
                                          echo '<div class="field_err mt-1">';
                                          echo $_SESSION['articleerr'];
                                          echo '</div>';
                                          unset($_SESSION['articleerr']);
                                        }

                                        ?>
                                    <div class="input_wrap mt-5">
                                        <h4 class="title mb-2">Short Description <span>(Max 150 Characters allowed)</span></h4>
                                        <input type="text" name="s-dec" maxlength="150" placeholder="Write a short description about your blog article" value="<?php
                                        
                                        if(isset($_SESSION['s_dec'])) {
                                          echo $_SESSION['s_dec'];
                                          unset($_SESSION['s_dec']);
                                        }
                                        
                                        ?>">
                                        
                                    </div>
                                    <?php 
                                        
                                        if(isset($_SESSION['s_decerr'])) {
                                          echo '<div class="field_err mt-1">';
                                          echo $_SESSION['s_decerr'];
                                          echo '</div>';
                                          unset($_SESSION['s_decerr']);
                                        }

                                        ?>
                                    <div class="input_wrap mt-5">
                                        <h4 class="title mb-2">Tags <span>(Seperate multiple tags with comma)</span></h4>
                                        <input type="text" name="tags" placeholder="Love, Technology, Food, Lifestyle" value="<?php
                                        
                                        if(isset($_SESSION['tags'])) {
                                          echo $_SESSION['tags'];
                                          unset($_SESSION['tags']);
                                        }
                                        
                                        ?>">
                                        
                                    </div>
                                    <?php 
                                        
                                        if(isset($_SESSION['tagerr'])) {
                                          echo '<div class="field_err mt-1">';
                                          echo $_SESSION['tagerr'];
                                          echo '</div>';
                                          unset($_SESSION['tagerr']);
                                        }

                                        ?>
                                    <div class="submit_btn mb-5 mt-5 text-end">
                                        <button type="submit" <?php
                                        
                                          if(isset($_SESSION['disable-btn'])) {
                                            echo $_SESSION['disable-btn'];
                                            unset($_SESSION['disable-btn']);
                                          }
                                        
                                        ?>>Make New Post</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                        <!-----------------Edit Post Tab start------------->

                        <div class="tab-pane fade" id="edit_post" role="tabpanel" aria-labelledby="editposttab">
                            
                            <div class="modal_header text-center">
                                <p>Edit Post</p>
                            </div>
                            <div class="edit_container px-3 blog_item">
                                <div class="row">
                                <?php 
              
                                  foreach($selectall_push as $key=>$value) {
                                    if( $value['status'] == 0) {
                                      $month_name = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
                                      $day = date('d', strtotime($value['date']));
                                      $month_numb = date('m', strtotime($value['date']));
                                      $month = $month_name[$month_numb-1];
                                      $year = date('Y', strtotime($value['date']));
                                      $total_time = $month.' '.$day.' '.$year;
                                      ?>
                              <div class="col-xl-4 col-md-6 col-lg-4 mb-3">
                                <div class="blog_wrap">
                                  <div class="image">
                                    <?php 
                                    
                                      if($value['image'] != '') {
                                      ?>
                                        <div class="image">
                                          <img src="<?='images/'.$value['image']?>" alt="blog_item" class="img-fluid w-100">
                                        </div>
                                    <?php

                                      }
                                    
                                    ?>
                                  </div>
                                  <div class="date mt-3 mb-1"><?=$total_time?></div>
                                  <h2 class="title"><?=$value['header']?></h2>
                                  <p><?=$value['shortdec']?></p>
                                  <div class="action">
                                          <a href="../php/edit_post.php?id=<?=$value['id']?>" class="restore_btn" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="../php/trash.php?id=<?=$value['id']?>" class="trash_btn" title="Remove"><i class="fa fa-times"></i></a>
                                        </div>
                                </div>
                              </div>
                              <?php
                                    }
                                  }
                            ?>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="edit_correct_post" role="tabpanel" aria-labelledby="editcorrectpost">
                            
                            <div class="modal_header text-center">
                                <p>Edit Post</p>
                            </div>
                            <div class="add_post_main px-3">
                              <?php 
                              
                                if(isset($_SESSION['edit_post_success'])) {
                                  echo '<div class="post_success"><span>';
                                  echo $_SESSION['edit_post_success'];
                                  echo '</span></div>';
                                  unset($_SESSION['edit_post_success']);
                                }
                              
                              ?>
                                <form action="<?php echo htmlspecialchars('../php/post_update.php') ?>" method="POST" enctype="multipart/form-data">
                                            
                                    <div class="input_wrap">
                                      <input type="text" name="postid" hidden value="<?php  
                                        
                                        if(isset($_SESSION['postid'])) {
                                          echo $_SESSION['postid'];
                                          unset($_SESSION['postid']);
                                        }
                                        
                                        ?>">
                                        <h4 class="title mb-">Banner Image</h4>
                                        <div class="banner_image">
                                          <?php  
                                        
                                        if(!empty($_SESSION['image_name'])) {
                                          echo '<div class="mb-3 edit-image"><button type="button" class="image_remove" title="Remove"><i class="fa fa-close"></i></button><img class="w-100" src="images/' . $_SESSION['image_name'] . '" alt="'. $_SESSION['image_name'] .'"></div>';
                                        }
                                        
                                        ?>
                                        </div>
                                        <input type="hidden" name="image_remove" id="image_remove" value="">
                                        <input type="hidden" name="image_name" value="<?php 
                                        
                                        if(!empty($_SESSION['image_name'])) {

                                          echo $_SESSION['image_name'];

                                        }

                                        
                                        ?>">
                                        <input name="image" class="form-control" type="file" id="formFile" accept="image/*">
                                    </div>
                                    <?php 
                                        
                                        if(isset($_SESSION['edit_imageerr'])) {
                                          echo '<div class="field_err mt-1">';
                                          echo $_SESSION['edit_imageerr'];
                                          echo '</div>';
                                          unset($_SESSION['edit_imageerr']);
                                        }

                                    ?>
                                    <div class="input_wrap mb-5 mt-5">
                                        <h4 class="title mb-2">Title<span>(Max 60 Characters)</span></h4>
                                        <input type="text" maxlength="60" name="title" placeholder="Please enter a title here" value="<?php  
                                        
                                        if(isset($_SESSION['title_name'])) {
                                          echo $_SESSION['title_name'];
                                          unset($_SESSION['title_name']);
                                        }
                                        
                                        ?>">
                                        <?php 
                                        
                                        if(isset($_SESSION['edit_titleerr'])) {
                                          echo '<div class="field_err mt-1">';
                                          echo $_SESSION['edit_titleerr'];
                                          echo '</div>';
                                          unset($_SESSION['edit_titleerr']);
                                        }

                                        ?>
                                    </div>
                                    <div class="input_wrap ">
                                        <h4 class="title mb-2">Post</h4>
                                        <textarea id="Post_edit" name="post_content">
                                        <?php
                                        
                                        if(isset($_SESSION['article_cont'])) {
                                          echo $_SESSION['article_cont'];
                                          unset($_SESSION['article_cont']);
                                        }
                                        ?>
                                        </textarea>
                                    </div>
                                    <?php 
                                        
                                        if(isset($_SESSION['edit_articleerr'])) {
                                          echo '<div class="field_err mt-1">';
                                          echo $_SESSION['edit_articleerr'];
                                          echo '</div>';
                                          unset($_SESSION['edit_articleerr']);
                                        }

                                        ?>
                                    <div class="input_wrap mt-5">
                                        <h4 class="title mb-2">Short Description <span>(Max 150 Characters allowed)</span></h4>
                                        <input type="text" name="s-dec" maxlength="150" placeholder="Write a short description about your blog article" value="<?php
                                        
                                        if(isset($_SESSION['shordec'])) {
                                          echo $_SESSION['shordec'];
                                          unset($_SESSION['shordec']);
                                        }
                                        
                                        ?>">
                                        
                                    </div>
                                    <?php 
                                        
                                        if(isset($_SESSION['edit_s_decerr'])) {
                                          echo '<div class="field_err mt-1">';
                                          echo $_SESSION['edit_s_decerr'];
                                          echo '</div>';
                                          unset($_SESSION['edit_s_decerr']);
                                        }

                                        ?>
                                    <div class="input_wrap mt-5">
                                        <h4 class="title mb-2">Tags <span>(Seperate multiple tags with comma)</span></h4>
                                        <input type="text" name="tags" placeholder="Love, Technology, Food, Lifestyle" value="<?php
                                        
                                        if(isset($_SESSION['tags_cont'])) {
                                          echo $_SESSION['tags_cont'];
                                          unset($_SESSION['tags_cont']);
                                        }
                                        
                                        ?>">
                                        
                                    </div>
                                    <?php 
                                        
                                        if(isset($_SESSION['edit_tagerr'])) {
                                          echo '<div class="field_err mt-1">';
                                          echo $_SESSION['edit_tagerr'];
                                          echo '</div>';
                                          unset($_SESSION['edit_tagerr']);
                                        }

                                        ?>
                                    <div class="submit_btn mb-5 mt-5 text-end">
                                        <button type="submit" <?php
                                        
                                          if(isset($_SESSION['edit_disable-btn'])) {
                                            echo 'disabled';
                                            unset($_SESSION['edit_disable-btn']);
                                          }
                                        
                                        ?>>Edit This Post</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                        <!-----------------Remove Post Tab start------------->

                        <div class="tab-pane fade" id="remove_post" role="tabpanel" aria-labelledby="removeposttab">
                            
                            <div class="modal_header text-center">
                                <p>Remove Post</p>
                            </div>
                            <div class="remove_container px-3 blog_item">
                                <div class="row">
                                <?php 
            
                                    foreach($selectall_push as $key=>$value) {
                                      if( $value['status'] == 0) {
                                        $month_name = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
                                        $day = date('d', strtotime($value['date']));
                                        $month_numb = date('m', strtotime($value['date']));
                                        $month = $month_name[$month_numb-1];
                                        $year = date('Y', strtotime($value['date']));
                                        $total_time = $month.' '.$day.' '.$year;
                                        ?>
                                <div class="col-xl-4 col-md-6 col-lg-4 mb-3">
                                  <div class="blog_wrap">
                                  <?php 
                                    
                                    if($value['image'] != '') {
                                    ?>
                                      <div class="image">
                                        <img src="<?='images/'.$value['image']?>" alt="blog_item" class="img-fluid w-100">
                                      </div>
                                  <?php

                                    }
                                  
                                  ?>
                                    <div class="date mt-3 mb-1"><?=$total_time?></div>
                                    <h2 class="title"><?=$value['header']?></h2>
                                    <p><?=$value['shortdec']?></p>
                                    <div class="action">
                                    <a href="../php/trash.php?id=<?=$value['id']?>" class="trash_btn" title="Remove"><i class="fa fa-times"></i></a>
                                          </div>
                                  </div>
                                </div>
                                <?php
                                      }
                                    }
                              ?>
                                </div>
                            </div>
                        </div>

                        <!-----------------Restore Post Tab start------------->

                        <div class="tab-pane fade" id="restore_post" role="tabpanel" aria-labelledby="restoreposttab">
                            
                            <div class="modal_header text-center">
                                <p>Restore Post</p>
                            </div>
                            <div class="restore_container px-3 blog_item">
                                <div class="row">
                                  <?php 
              
                                  foreach($selectall_push as $key=>$value) {
                                    if( $value['status'] == 1) {
                                      $month_name = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
                                      $day = date('d', strtotime($value['date']));
                                      $month_numb = date('m', strtotime($value['date']));
                                      $month = $month_name[$month_numb-1];
                                      $year = date('Y', strtotime($value['date']));
                                      $total_time = $month.' '.$day.' '.$year;
                                      ?>
                              <div class="col-xl-4 col-md-6 col-lg-4 mb-3">
                                <div class="blog_wrap">
                                  <div class="image">
                                    <img src="<?='images/'.$value['image']?>" alt="blog_item" class="img-fluid w-100">
                                  </div>
                                  <div class="date mt-3 mb-1"><?=$total_time?></div>
                                  <h2 class="title"><?=$value['header']?></h2>
                                  <p><?=$value['shortdec']?></p>
                                  <div class="action">
                                  <a href="../php/restore.php?id=<?=$value['id']?>" class="restore_btn" title="Edit"><i class="fa fa-repeat"></i></a>
                                  <a href="../php/delete.php?id=<?=$value['id']?>" class="trash_btn" title="Edit"><i class="fa fa-trash"></i></a>
                                        </div>
                                </div>
                              </div>
                              <?php
                                    }
                                  }
                            ?>
                                </div>
                            </div>

                        </div>

                        <!-----------------Delete Post Tab start------------->

                        <div class="tab-pane fade" id="delete_post" role="tabpanel" aria-labelledby="deleteposttab">
                            
                            <div class="modal_header text-center">
                                <p>Delete Post</p>
                            </div>
                            <div class="restore_container px-3 blog_item">
                                <div class="row">
                                <?php 
              
                                    foreach($selectall_push as $key=>$value) {
                                      if( $value['status'] == 1) {
                                        $month_name = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
                                        $day = date('d', strtotime($value['date']));
                                        $month_numb = date('m', strtotime($value['date']));
                                        $month = $month_name[$month_numb-1];
                                        $year = date('Y', strtotime($value['date']));
                                        $total_time = $month.' '.$day.' '.$year;
                                        ?>
                                <div class="col-xl-4 col-md-6 col-lg-4 mb-3">
                                  <div class="blog_wrap">
                                    <div class="image">
                                      <img src="<?='images/'.$value['image']?>" alt="blog_item" class="img-fluid w-100">
                                    </div>
                                    <div class="date mt-3 mb-1"><?=$total_time?></div>
                                    <h2 class="title"><?=$value['header']?></h2>
                                    <p><?=$value['shortdec']?></p>
                                    <div class="action">
                                    <a href="../php/delete.php?id=<?=$value['id']?>" class="trash_btn" title="Edit"><i class="fa fa-trash"></i></a>
                                          </div>
                                  </div>
                                </div>
                                <?php
                                      }
                                    }
                              ?>
                                </div>
                            </div>

                        </div>
                      </div>
                </div>
            </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/trumbowyg.min.js"></script>
    <script src="js/trumbowyg.pasteembed.min.js"></script>
    <script src="js/trumbowyg.pasteimage.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>