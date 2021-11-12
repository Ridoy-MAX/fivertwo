<?php 

session_start();
require('php/db.php');

$selectall_from_db = "SELECT * FROM posts WHERE status='0' ORDER BY id DESC";
$selectall_push = mysqli_query($dbconnect, $selectall_from_db);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Love Problem Solver - Blog with Jane Ambler</title>
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/blog.css">
  <link rel="stylesheet" href="assets/css/media.css">
  <meta name="description"
    content="A blog of Love problem solver Teach you special, simple skills to ensure future love relationship success">
  <meta name="author" content="Love Problem Solver">
  <meta name=language content="English" />
  <meta name=designer content="Love Problem Solver 2021" />
  <meta name=copyright content="Love Problem Solver'" />
  <meta name=coverage content="Worldwide" />
  <meta name=distribution content="Global" />
  <meta name=expires content="Never" />
  <meta name=robots content="index, follow" />
  <meta name="identifier" -URL content="https://loveproblemsolver.co.uk/terms.html" />
  <meta http-equiv=Cache-control content="public" />
  <link rel="alternate" hreflang="en-GB" href="https://loveproblemsolver.co.uk/" />
  <link rel="canonical" href="https://loveproblemsolver.co.uk/terms.html" />
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/images/favicon.png">
  <meta name="theme-color" content="#ffffff">
  <script type='application/ld+json'>
{
  "@context": "http://www.schema.org",
  "@type": "WebSite",
  "name": "Love Problem Solver",
  "url": "https://loveproblemsolver.co.uk/"
}
 </script>
  <meta property="og:title" content="About">
  <meta property="og:site_name" content="Love Problem Solver">
  <meta property="og:url" content="https://loveproblemsolver.co.uk/terms.html">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://loveproblemsolver.co.uk/assets/images/2nd_logo.png">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@LpSolver">
  <meta name="twitter:title" content="Love Problem Solver">
  <meta name="twitter:description" content="Love Problem Solver - We make your love life how YOU want it to be. UK: +44 113 534 8887 http://loveproblemsolver.co.uk">
  <meta name="twitter:image" content="https://loveproblemsolver.co.uk/assets/images/footer_logo.png">
 <!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  
  })(window,document,'script','dataLayer','GTM-NP8TPP4');</script>
  
  <!-- End Google Tag Manager -->
  <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '993862854517858');
  fbq('track', 'PageView');
</script>
<noscript><img alt="facebookpic" height="1" width="1"
  src="https://www.facebook.com/tr?id=993862854517858&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
  <span id=wts2071715></span>
<script async src=https://wts.one/log7.js onload="wtslog7('2071715','2')"></script>
<noscript><a href=https://www.web-stat.com>
</a></noscript>

<!-- Pinterest Tag -->
<script>
!function(e){if(!window.pintrk){window.pintrk = function () {
window.pintrk.queue.push(Array.prototype.slice.call(arguments))};var
  n=window.pintrk;n.queue=[],n.version="3.0";var
  t=document.createElement("script");t.async=!0,t.src=e;var
  r=document.getElementsByTagName("script")[0];
  r.parentNode.insertBefore(t,r)}}("https://s.pinimg.com/ct/core.js");
pintrk('load', '2613750158237', {em: '<user_email_address>'});
pintrk('page');
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt=""
  src="https://ct.pinterest.com/v3/?event=init&tid=2613750158237&pd[em]=<hashed_email_address>&noscript=1" />
</noscript>
<!-- end Pinterest Tag -->

<script>
pintrk('track', 'checkout', {
value: 100,
order_quantity: 1,
currency: 'USD'
});
</script>


</head>

<body id="blog_page">
<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NP8TPP4"

  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  
  <!-- End Google Tag Manager (noscript) -->
  <!--------------Navigation menu start------------>
  <nav class="navbar navbar-expand-lg">
    <div class="container-sm">
      <a href="index.html" class="navbar-brand position-relative "><img src="assets/images/logo.png"
          class=" first_logo" width="262" height="19" alt="Love problem solver"><img class="second_logo"
          src="assets/images/2nd_logo.png" alt="love"></a>
      <button class="nav_toggler">
        <span class="navbar-toggler-icon">
          <span class="line-1 line"></span>
          <span class="line-2 line"></span>
          <span class="line-3 line"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-center ms-auto">
          <li class="nav-item">
            <a class="nav-link p-0 text-uppercase" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-0 text-uppercase" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-0 text-uppercase" href="casestudies.html">CASE STUDIES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-0 text-uppercase callnow" href="tel:+441135348887">Call NOW</a>
          </li>
          <li class="nav-item">
            <button class="text-uppercase d-flex align-items-center more_side_bar"><span><svg version="1.1"
                  class="hamburger-menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  viewBox="0 0 512 512" width="16px">
                  <rect class="fl-hamburger-menu-top" width="512" height="102" />
                  <rect class="fl-hamburger-menu-middle" y="205" width="512" height="102" />
                  <rect class="fl-hamburger-menu-bottom" y="410" width="512" height="102" />
                </svg></span><span class="ms-2">more</span></button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Computer side NAV-->
  <div class="side_nav pc_side_nav">
    <div class="side_nav_wrap">
      <div class="btn">
        <button><i class="fa fa-close"></i></button>
      </div>
      <div class="logo mt-3 ms-2">
        <a href="index.html" class="navbar-brand">
          <img class="second_logo position-static" src="assets/images/2nd_logo.png" alt="love">
          <img src="assets/images/side_nav_logo.png" alt="Love problem solver" class="ps-3 d-inline-block">
        </a>
      </div>
      <ul class="side_nav_item align-items-left ms-0 ps-3 pt-5">
        <li class="nav-item">
          <a class="nav-link p-0 active text-uppercase" href="advice.html">Advice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-0 active text-uppercase" href="datingsitescam.html">Dating Site Scam</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-0 text-uppercase" href="glossary.html">Glossary</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-0 text-uppercase" href="terms.html">Terms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-0 text-uppercase" href="blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-0 text-uppercase" href="tel:+441135348887">CALL JANE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-0 text-uppercase" href="admin_login.php">Admin Login</a>
        </li>
      </ul>
    </div>
  </div>
  <!--Mobile side NAV-->
  <div class="side_nav mobile_side_nav">
    <div class="side_nav_wrap">
      <div class="btn">
        <button><i class="fa fa-close"></i></button>
      </div>
      <div class="logo mt-3 ms-2">
        <a href="index.html" class="navbar-brand">
          <img class="second_logo position-static" src="assets/images/2nd_logo.png" alt="love">
          <img src="assets/images/side_nav_logo.png" alt="Love problem solver">
        </a>
      </div>
      <ul class="side_nav_item align-items-left ms-0 ps-3 pt-5">
        <li class="nav-item active">
          <a class="nav-link p-0 text-uppercase" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-0 text-uppercase" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-0 text-uppercase" href="casestudies.html">CASE STUDIES</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link p-0 text-uppercase" href="advice.html">Advice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-0 text-uppercase" href="datingsitescam.html">Dating Site Scam</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-0 text-uppercase" href="glossary.html">Glossary</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-0 text-uppercase" href="terms.html">Terms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-0 text-uppercase" href="blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-0 text-uppercase" href="tel:+441135348887">CALL JANE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-0 text-uppercase" href="admin_login.php">Admin Login</a>
        </li>
      </ul>
    </div>
  </div>
  <!-------Navigation menu end------------>
  <!-------Header area start-------------->

  <header id="banner">
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-8 col-xl-7 col-md-12">
          <h1 class="header text-center"><span class="color-text"></span>Blog</h1>
          <div class="divider"><img class="w-100 img-fluid" src="assets/images/divider.png" alt="divider"></div>
          <p>LOVE PROBLEM SOLVER </br> <span class="ms-5">BLOG</span> </br><span class="color-text ms-5 ps-5">BY JANE AMBLER</span>
          </p>
          <div class="arrow text-center pb-5">
            <a href="#blog_header" class="scrollink"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="image d-lg-none">
      <img src="assets/images/mobile_banner.jpg" alt="banner" class="w-100 img-fluid">
    </div>
  </header>

  <!-------Header area end---------------->


  <!-------Blog header section start------------>

  <section id="blog_header">
      <div class="container-xl">
        <div class="row recent_blog_item">
          <div class="col-xl-12">
            <h2 class="header text-center mb-5">Blog <span class="color-text">posts</span></h2>
            <?php 
            
              foreach($selectall_push as $key=>$value) {
                if($key == 0) {
                  $month_name = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
                  $day = date('d', strtotime($value['date']));
                  $month_numb = date('m', strtotime($value['date']));
                  $month = $month_name[$month_numb-1];
                  $year = date('Y', strtotime($value['date']));
                  $total_time = $month.' '.$day.' '.$year;
                  ?>
                  <div class="row align-items-center">
              <div class="col-xl-7 col-md-6 col-xxl-6 ms-auto">
                <img src="<?php if(strlen($value['image']) > 0) {

echo 'blog-admin/images/'.$value['image'];} 
?>" alt="blog_image" class="w-100 img-fluid">
              </div>
              <div class="col-xl-5 col-md-6 col-xxl-4 me-auto ps-md-4 d-flex flex-column justify-content-end">
                <div class="date mt-3 mb-1 mt-md-0 mb-md-0"><?=$total_time?></div>
                <h2 class="title text-capitalize">
                  <a href="<?='article.php?id='.$value['id']?>"><?=$value['header']?></a>
                </h2>
                <p><?=$value['shortdec']?></p>
              </div>
            </div>
            <?php
                }
              }
            
            ?>
          </div>
        </div>
      </div>
  </section>

  <section id="blog_body" class="mt-5 pt-5">
    <div class="container-xl">
      <div class="row">
      <?php 
            
            foreach($selectall_push as $key=>$value) {
              if($key > 0) {
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
              
              if(strlen($value['image']) > 0) {

                  echo '<img src="blog-admin/images/'.$value['image'] . '" alt="blog_item" class="img-fluid w-100">';
} ?> 
            </div>
            <div class="date mt-3 mb-1"><?=$total_time?></div>
            <h2 class="title"><a href="<?='article.php?id='.$value['id']?>"><?=$value['header']?></a></h2>
            <p><?=$value['shortdec']?></p>
          </div>
        </div>
        <?php
              }
            }
      ?>
      </div>
      <div class="row">
        <div class="mx-auto col-xl-6 mt-5">
          <div class="call_btn mt-3">
            <p class="pb-2">
              For a free non-obligatory chat
            </p>
            <a href="tel:+441135348887">CALL JANE</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-------Blog section end-------------->


  <!-------Masterclass section start---------------->

  <section id="masterclass">
    <div class="container-xl">
      <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-12 ms-auto">
          <h2 class="header">Call me and let's</h2>
          <h3 class="subheader">MAKE YOUR LOVE FUTURE HOW YOU WANT IT TO BE</h3>
          <div class="divider">
            <img src="assets/images/divider.png" alt="divider" class="w-100 img-fluid">
          </div>
          <p>Discover a fresh, new way of looking at relationships and find out how easy it is to have a great
            relationship with anyone in your life.</p>
          <div class="access_btn text-center mt-5">
            <button data-bs-toggle="modal" data-bs-target="#staticBackdrop">MESSAGE JANE</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Vertically centered modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="top d-flex justify-content-end">
            <button class="me-4 mt-2" type="button" data-bs-dismiss="modal" aria-label="Close"><i
                class="fa fa-close"></i></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-xl-7 mx-auto">
                <h3 class="header">Call me and let's</h3>
                <h4 class="subheader">MAKE YOUR LOVE FUTURE HOW YOU WANT IT TO BE</h4>
                <div class="divider">
                  <img src="assets/images/divider.png" alt="divider" class="w-100 img-fluid">
                </div>
                <h5 class="contact-head">CONTACT JANE</h5>
                <p>Your privacy is important to us. We promise to keep your email and number safe.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-10 mx-auto">
                <form action="thankyou.php" novalidate method="POST">
                  <div class="row">
                    <div class="col-xl-4">
                      <div class="input_wrap">
                        <input type="text" placeholder="Name" name="name" class="w-100">
                      </div>
                    </div>
                    <div class="col-xl-4">
                      <div class="input_wrap">
                        <input type="text" placeholder="E-mail" name="email" class="w-100">
                      </div>
                    </div>
                    <div class="col-xl-4">
                      <div class="input_wrap">
                        <input type="text" placeholder="Phone" name="phone" class="w-100">
                      </div>
                    </div>
                    <div class="col-xl-12">
                      <div class="input_wrap mt-4">
                        <textarea name="message" placeholder="Please write your message" class="w-100"></textarea>
                      </div>
                      <div class="submit_btn mt-4">
                        <button type="submit" name="submit">SUBMIT</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="gold_trim"></div>

  <!-------Masterclass section end---------------->
  <!-------Footer section start---------------->

  <footer id="footer">
    <div class="container-xl">
      <div class="row">
        <div class="col-xl-12 col-lg-12 mx-auto">
          <div class="row">
            <div class="col-lg-3 footer_logo mx-sm-auto col-sm-12 d-sm-flex justify-content-center mb-sm-4">
              <a href="index.html">
                <img src="assets/images/footer_logo.png" alt="logo" class=" w-auto">
              </a>
            </div>
            <div class="col-lg-2 col-sm-6">
              <h5 class="footer_header">NAVIGATE</h5>
              <ul class="mb-0 ps-0 footer_link">
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="casestudies.html">CASE STUDIES</a></li>
                <li><a href="advice.html">ADVICE</a></li>
                <li><a href="datingsitescam.html">DATING SITE SCAM</a></li>
                <li><a href="glossary.html">GLOSSARY</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="terms.html">TERMS</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="contact_wrap">
                <h5 class="footer_header">CONNECT</h5>
                <p class="d-flex align-items-center"><span class="contact_icon"><i class="fa fa-phone"></i></span><a
                    class="contact_info" href="tel:+441135348887">CALL JANE</a></p>
                <p class="d-flex align-items-center"><span class="contact_icon"><i class="fa fa-envelope"></i></span><a
                    class="contact_info" href="mailto:loveproblemsolver1@gmail.com">Click to send Email</a></p>
                <p class="d-flex align-items-center"><span class="contact_icon"><i
                      class="fa fa-credit-card-alt"></i></span><a class="contact_info" href="#"><img
                      src="assets/images/marchent.png" alt="marchent"></a></p>
              </div>
              <div class="social_wrap">
                <a href="https://www.facebook.com/lpsolver1/" class="social_icon me-2">
                  <i class="fa fa-facebook-f"></i>
                </a>
                <a href="https://www.linkedin.com/company/love-problem-solver" class="social_icon me-2">
                  <i class="fa fa-linkedin"></i>
                </a>
                <a href="https://www.instagram.com/loveproblemsolver1/" class="social_icon me-2">
                  <i class="fa fa-instagram"></i>
                </a>
                <a href="https://twitter.com/LpSolver" class="social_icon me-2">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="https://www.pinterest.co.uk/loveproblemsolver" class="social_icon me-2">
                  <i class="fa fa-pinterest-p"></i>
                </a>
                <a href="https://loveproblemsolver.tumblr.com/" class="social_icon">
                  <i class="fa fa-tumblr"></i>
                </a>
              </div>
              <div class="social_wrap">
                <a href="https://t.me/LoveProblemSolver" class="social_icon me-2">
                  <i class="me-1 mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14.263" height="11.961" viewBox="0 0 14.263 11.961">
                      <path id="Icon_awesome-telegram-plane" data-name="Icon awesome-telegram-plane" d="M14.223,5.617l-2.152,10.15c-.162.716-.586.895-1.188.557L7.6,13.908,6.021,15.43a.824.824,0,0,1-.659.322l.236-3.34,6.078-5.492c.264-.236-.057-.366-.411-.131L3.751,11.52.516,10.508c-.7-.22-.716-.7.146-1.041L13.316,4.592C13.9,4.372,14.414,4.722,14.223,5.617Z" transform="translate(-0.001 -4.528)" fill="#fff"/>
                    </svg> 
                  </i>                 
                </a>
                <a href="https://loveproblemsolver.substack.com/" class="social_icon me-2">
                  <i class="mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="17.196" viewBox="0 0 15 17.196">
                      <g id="Group_1" data-name="Group 1" transform="translate(-559 -291)">
                        <rect id="Rectangle_4" data-name="Rectangle 4" width="15" height="2" transform="translate(559 291)" fill="#fff"/>
                        <rect id="Rectangle_5" data-name="Rectangle 5" width="15" height="2" transform="translate(559 295)" fill="#fff"/>
                        <path id="Path_1" data-name="Path 1" d="M559,298.754v9.689L566.665,304,574,308.443v-9.689Z" transform="translate(0 -0.247)" fill="#fff"/>
                      </g>
                    </svg>                    
                  </i>
                </a>
                <a href="https://linktr.ee/LoveProblemSolver" class="social_icon">
                  <i class="mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21.979" height="18.586" viewBox="0 0 21.979 18.586">
                      <g id="linktree-1" transform="translate(0 0)">
                        <path id="Path_1" data-name="Path 1" d="M1193.429,12.092,1187.053.5a.969.969,0,0,0-1.7,0l-2.814,5.115,3.562,6.475a.794.794,0,0,1,.1.437.916.916,0,0,1-.948.812H1184.1v4.42a.826.826,0,0,0,.826.826h2.556a.826.826,0,0,0,.826-.826v-4.42h4.272a.869.869,0,0,0,.849-1.249Z" transform="translate(-1171.551 0)" fill="#e6e6e6"/>
                        <path id="Path_2" data-name="Path 2" d="M8.176.5a.969.969,0,0,0-1.7,0L.1,12.092A.869.869,0,0,0,.951,13.34H5.223v4.42a.826.826,0,0,0,.826.826H8.6a.826.826,0,0,0,.826-.826v-4.42H8.277a.916.916,0,0,1-.948-.812.791.791,0,0,1,.1-.437L10.99,5.617Z" transform="translate(0 0)" fill="#fff"/>
                      </g>
                    </svg>                                        
                  </i>
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-sm-8 d-flex flex-column">
              <h5 class="footer_header">SUBSCRIBE TO</br> OUR NEWSLETTER</h5>
              <div class="news_letter">
                <iframe src="https://loveproblemsolver.substack.com/embed" width="100%" height="150" frameborder="0" scrolling="no" class="substack_form"></iframe>
              </div>
            </div>
          </div>
      </div>
      </div>
      <div class="row statement pt-5 pb-4">
        <div class="col-xl-12 mx-auto">
          <p>We are 100% committed to giving you total satisfaction in our professional services and excellent value for
            money. If there is any aspect of our service with which you are dissatisfied or which you feel could be
            improved, please let us know - You can send an email or telephone us.</p>
        </div>
      </div>
    </div>
    <div class="copyright py-3 text-center">
      © 2021 Love Problem Solver. Leeds UK. All rights reserved. Design: <a href="https://www.fiverr.com/mohammudullah" target="blank">mohammudullah</a>
    </div>
  </footer>

  <!-------Footer section end---------------->
  <!--Back to Top Button start-->

  <div class="back_to_top">
    <div class="arrow">
      <i class="fa fa-angle-up"></i>
    </div>
  </div>

  <!--Back to Top Button end-->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/script.js"></script>
  <!-- WiserNotify BEGIN -->
  <script>!function () { if (window.t4hto4) console.log("WiserNotify pixel installed multiple time in this page"); else { window.t4hto4 = !0; var t = document, e = window, n = function () { var e = t.createElement("script"); e.type = "text/javascript", e.async = !0, e.src = "https://pt.wisernotify.com/pixel.js?ti=1jqu0lkuy3suph", document.body.appendChild(e) }; "complete" === t.readyState ? n() : window.attachEvent ? e.attachEvent("onload", n) : e.addEventListener("load", n, !1) } }();</script>
  <!-- WiserNotify END -->
</body>

</html>