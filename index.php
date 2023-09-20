<?php 
use classes\Category;
use classes\Images;

require_once("includes/include.php") ; ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="CJ/new.css" />
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
    <script defer src="CJ/jquery.js"></script>
    <script defer src="CJ/javascript.js"></script>
    <script defer src="CJ/new.js"></script>
    <title>welcom</title>
  </head>
  <body>
    <!-- header -->
    <header class="bg-262626 d-flex flex-wrap justify-content-around align-items-center">
      <div class="ch1">
        <div class="logo">
          <img src="images/mf_logo_ideas__logo__ideas___mf_logo___mf_logo_design___mf_logo_fonts___mf_logo_ideas___mf_logo_design_ideas___mf_logo_typography___mf_logomarca___mf_logo_design_letter-removebg-preview.png" width="60" alt="M" />
        </div>
        <div class="upgrade">
          <h5 class="tx-y" title="اکانتتو اپگرید کن تا از ویزه گی های خوب سایت بهره ببری.">Upgrade</h5>
        </div>
        <div class="location">
          <h6 class="cloc">
            <strong class="nav-strong">
              <small>ایران سرزمین شیران</small> <br />
              تهران | انقلاب
            </strong>
          </h6>
          <svg class="svg-icon loc" viewBox="0 0 20 20">
            <path
              d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"
            ></path>
          </svg>
        </div>
      </div>
      <div class="ch2">
        <button class="btn-group" type="role">همه</button>
        <form class="">
          <input class="search" type="search" placeholder="جستجو" aria-label="Search" />
          <button class="btn-search bg-y" type="submit">جستجو</button>
        </form>
      </div>
      <div class="ch3">
        <div class="gh1">
          <svg class="svg-icon" style="font-size: 35px;" viewBox="0 0 20 20">
            <path
              fill="none"
              d="M15.971,7.708l-4.763-4.712c-0.644-0.644-1.769-0.642-2.41-0.002L3.99,7.755C3.98,7.764,3.972,7.773,3.962,7.783C3.511,8.179,3.253,8.74,3.253,9.338v6.07c0,1.146,0.932,2.078,2.078,2.078h9.338c1.146,0,2.078-0.932,2.078-2.078v-6.07c0-0.529-0.205-1.037-0.57-1.421C16.129,7.83,16.058,7.758,15.971,7.708z M15.68,15.408c0,0.559-0.453,1.012-1.011,1.012h-4.318c0.04-0.076,0.096-0.143,0.096-0.232v-3.311c0-0.295-0.239-0.533-0.533-0.533c-0.295,0-0.534,0.238-0.534,0.533v3.311c0,0.09,0.057,0.156,0.096,0.232H5.331c-0.557,0-1.01-0.453-1.01-1.012v-6.07c0-0.305,0.141-0.591,0.386-0.787c0.039-0.03,0.073-0.066,0.1-0.104L9.55,3.75c0.242-0.239,0.665-0.24,0.906,0.002l4.786,4.735c0.024,0.033,0.053,0.063,0.084,0.09c0.228,0.196,0.354,0.466,0.354,0.76V15.408z"
            ></path>
          </svg>
        </div>
        <div class="gh2">
          <div class="my_post">
            <div class="dropdown">
              <button class="sabtnam">
                <strong class="font1"> ثبت نام | ورود </strong>
                <i class="fa fa-sign-in"></i>
              </button>
              <div class="dropdown-content text-danger">
                <button class="btns w-100 text-white">ثبت نام</button>
                <button class="btns w-100 mt-1 text-white">ورود</button>
              </div>
            </div>
          </div>
          <div class="icon1">
            <svg class="svg-icon" viewBox="0 0 20 20">
              <path
                fill="none"
                d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"
              ></path>
              <path
                fill="none"
                d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"
              ></path>
              <path
                fill="none"
                d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"
              ></path>
            </svg>
          </div>
        </div>
      </div>
    </header>

    <!-- ========== navbar ========== -->
    <div class="navbar">
      <div class="container-fluid d-flex justify-content-between">
        <input type="radio" name="s" id="home" checked />

        <input type="radio" name="s" id="blog" />
        <input type="radio" name="s" id="code" />
        <input type="radio" name="s" id="help" />
        <input type="radio" name="s" id="about" />
        <nav>
          <div class="slider"></div>
            <label class="home" for="home">
              <a href="http://localhost/TP/RP/Home-work/">
                خانه
              </a>
            </label>
            <label class="blog" for="blog">
              <a href="http://localhost/TP/RP/Home-work/post.php">
                پست ها
              </a>
            </label>
            <label class="code" for="code">
              <a href="http://localhost/TP/RP/Home-work/comment.php">
                نمونه
              </a>
            </label>
            <label class="help" for="help">
              مطالب
            </label>
            <label class="about" for="about">
              درباره من
            </label>
        </nav>
      </div>
      <h6 class="slogan"><strong>ارزان تر از اینجا پیدا نمیکنی</strong></h6>
    </div>

    <!-- ========== slider ========== -->
    <div class="slideshow-container">
      <?php 
      if($typeones = Images::getImagesByTypeId(1)) { 
      foreach($typeones as $typeone) :?>
      <div class="mySlides fade">
        <!-- <div class="numbertext"></div> -->
        <img src="<?php echo $typeone->img_source; ?>" style="width: 100%;" />
        <!-- <div class="text"></div> -->
      </div>
      <?php endforeach;  ?>
      <?php }  ?>
      <div class="btn-slider">
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
      </div>
    </div>
    <div class="dots">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <!-- ========== title of category ========== -->
    <div class="category-title">
      <?php if($rootCats = Category::getCategoryByParentId(0)){
        foreach ($rootCats as $rootCat) : ?>
        <a href="comment.php?post=<?php echo $rootCat->id;?>">
          <div class="title-cat1">
            <img class="img-title" src="<?php echo $rootCat->img_source;?>" />
            <h5 class="cat-tx"><?php echo $rootCat->category_name;?></h5>
          </div>
        </a>
      <?php endforeach; ?>
      <?php } ?>
      <?php if($mores = Images::getImagesByTypeId(2)){
        foreach ($mores as $more) : ?>
      <a class="more" href="#other-cat">
        <img class="img-more" src="<?php echo $more->img_source;?>" />
        <h5 class="more-tx"><?php echo $more->key_word; ?></h5>
      </a>
      <?php endforeach; ?>
      <?php } ?>
    </div>

    <!-- ▮▮▮▮▮▮▮▮▮▮ Introduction ▮▮▮▮▮▮▮▮▮▮ -->
    <div class="Introduction">
      <!-- -==================- -->
      <div class="legend-parent">
        <div class="befor-legend"></div>
        <div class="legend">
          خلاصه مطالب
        </div>
        <div class="after-legend"></div>
      </div>

      <div class="summary-post">
        <?php require "includes/showLess.php"; ?>
      </div>

      <div id="other-cat" class="segment">
        <h3> دسته های دیگر </h3><br>

        <!-- <div class="other-cats"> -->
          <div class="item">
            <?php 
            if($othercats = Category::getCategoryByTypeId(1)){
            foreach ($othercats as $othercat) : ?>
            <div class="other-cat ">
              <div class="title-cat2 ">
                <img class="img-title" src="<?php echo $othercat->img_source;?>">
                <h5 class="cat-tx"> <?php echo $othercat->category_name;?></h5>
              </div>
            </div>
            <?php endforeach; ?>
            <?php  } ?>
            <div class="readmore">دسته بیشتر</div>
          </div>
        <!-- </div> -->



      </div> 
    <br>
    <div class="segment">
        <a href="post.php" target="_blank" rel="noopener noreferrer">
          <div class="all-post">
            <div class="post-logo">
              <img width="50" height="50" src="https://img.icons8.com/color/100/message-squared.png" alt="message-squared"/>
                برای مشاهده پست ها کلیک کنید. 
            </div>
            <div class="post-btn">
              <button class="button-18" role="button">
                برو به پست ها 
                <svg class="svg-icon white-path" fill="#fff" viewBox="0 0 20 20">
                  <path fill="none" d="M18.271,9.212H3.615l4.184-4.184c0.306-0.306,0.306-0.801,0-1.107c-0.306-0.306-0.801-0.306-1.107,0
                  L1.21,9.403C1.194,9.417,1.174,9.421,1.158,9.437c-0.181,0.181-0.242,0.425-0.209,0.66c0.005,0.038,0.012,0.071,0.022,0.109
                  c0.028,0.098,0.075,0.188,0.142,0.271c0.021,0.026,0.021,0.061,0.045,0.085c0.015,0.016,0.034,0.02,0.05,0.033l5.484,5.483
                  c0.306,0.307,0.801,0.307,1.107,0c0.306-0.305,0.306-0.801,0-1.105l-4.184-4.185h14.656c0.436,0,0.788-0.353,0.788-0.788
                  S18.707,9.212,18.271,9.212z"></path>
                </svg></button>
              <img width="66" height="66" src="https://img.icons8.com/external-smashingstocks-flat-smashing-stocks/66/external-Postcards-disco-smashingstocks-flat-smashing-stocks.png" alt="external-Postcards-disco-smashingstocks-flat-smashing-stocks"/>
  
            </div>
          </div>
        </a>
      </div><br>
    </div>
    <!-- ▮▮▮▮▮▮▮▮▮▮ End of Introduction ▮▮▮▮▮▮▮▮▮▮ -->

    <footer class="footer">
      <div class="footer__addr">
        <h1 class="footer__logo">محمد مهدی فاتحی</h1>

        <h2>ارتباط با ما</h2>

        <address>
          989911001275+<br />

          <a class="footer__btn" href="mailto:example@gmail.com">ایمیل ما</a>
        </address>
      </div>

      <ul class="footer__nav">
        <li class="nav__item">
          <h2 class="nav__title">پست ها</h2>

          <ul class="nav__ul">
            <li>
              <a href="#">ریاضیات</a>
            </li>

            <li>
              <a href="#">علوم تجربی</a>
            </li>

            <li>
              <a href="#">ارسال با پیک</a>
            </li>
          </ul>
        </li>

        <li class="nav__item nav__item--extra">
          <h2 class="nav__title">تکنولوژی</h2>

          <ul class="nav__ul nav__ul--extra">
            <li>
              <a href="#">اچ تی ام ال</a>
            </li>

            <li>
              <a href="#">سی اس اس</a>
            </li>

            <li>
              <a href="#">پی اچ پی</a>
            </li>

            <li>
              <a href="#">جاوا اسکریپت</a>
            </li>

            <li>
              <a href="#">شی گرایی</a>
            </li>

            <li>
              <a href="#">او ار ام</a>
            </li>
          </ul>
        </li>

        <li class="nav__item">
          <h2 class="nav__title">امتیازات</h2>

          <ul class="nav__ul">
            <li>
              <a href="#">کد تخفیف</a>
            </li>

            <li>
              <a href="#">ارسال رایگان</a>
            </li>

            <li>
              <a href="#">اینجا استخدام شوید</a>
            </li>
          </ul>
        </li>
      </ul>

      <div class="legal">
        <p>&copy; 1402</p>

        <div class="legal__links">
          <span> طراحی شده توسط محمد مهدی فاتحی زیر نظر استاد علیرضا داعی</span>
        </div>
      </div>
    </footer>


  </body>
</html>