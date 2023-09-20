<?php
use classes\Category;
 require_once("includes/include.php"); ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
    <script src="CJ/jquery.js" type="text/javascript" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    
    <link rel="stylesheet" href="CJ/new.css" />
    <title>Document</title>
  </head>
  <body>
    
  <div class="nav-post">
  <div class="ul-post">
    <div class="logoh">
      <h2 class="f">F</h2>
      <h2 class="m">M</h2>
    </div>
    <div class="sec-div">
      <a href="http://localhost/TP/RP/ORM/">
        <svg fill="#000000" width="45px" height="35px" style="margin: 6px; border: 1px solid #3434346b; background-color: #1c39bb; border-radius: 100%; padding: 4px;" viewBox="0 0 24 24" id="home" data-name="Flat color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color"><rect id="secondary" x="8" y="13" width="8" height="9" style="fill: #1c39bb;"></rect><path id="primary" d="M21.71,12.71a1,1,0,0,1-1.42,0L20,12.42V20.3A1.77,1.77,0,0,1,18.17,22H16a1,1,0,0,1-1-1V15.1a1,1,0,0,0-1-1H10a1,1,0,0,0-1,1V21a1,1,0,0,1-1,1H5.83A1.77,1.77,0,0,1,4,20.3V12.42l-.29.29a1,1,0,0,1-1.42,0,1,1,0,0,1,0-1.42l9-9a1,1,0,0,1,1.42,0l9,9A1,1,0,0,1,21.71,12.71Z" style="fill: #ffffff;"></path></svg>
      </a>

      <input type="search" id="gsearch" name="gsearch" placeholder="جستجو"/>
      <label for="gsearch">
        <svg fill="#fff" width="25px" height="25px"  viewBox="0 0 24 24" id="search" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color"><line id="secondary" x1="21" y1="21" x2="15" y2="15" style="fill: none; stroke: #ffff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2.5;"></line><circle id="primary" cx="10" cy="10" r="7" style="fill: none; stroke: #fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2.5;"></circle></svg>
      </label>
    </div>
    <a href="http://localhost/TP/RP/ORM/insertPost.php?post=<?php echo $_GET['post']; ?>">
      <div class="addpost">
        <svg width="20" height="20" style="margin: 0 5px 0 2px;" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"><circle style="fill:none;stroke:#fff;stroke-width:16;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" cx="128" cy="128" r="112"/><path style="fill:none;stroke:#fff;stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" d="M80 128h96m-48-48v96"/></svg>
        <small> اضافه پست</small>
      </div>
    </a>

  </div>
</div>
    <div class="posts ">
      <div class="secpost">
        <?php require "includes/takpost.php" ?>
      </div>
      <div class=" recent-posts ">
      <?php 
      if ($posts = Post::getAllPosts(1, true)):
        foreach ($posts as $post):
          // Number of comment
          if ($comment = Comment::getCommentsByPostId($post->id)) {
            $commentCount = count($comment);
          } else {
            $commentCount = 0;
          }
      ?>
          <div class="recent-post ">
            <div class="img" style="background-image: url('uploadpost/<?php echo $post->img_post ?>') ;background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            <div class="txs">
              <h6> 
                <a href="?post=<?php echo $post->id; ?>">
                    <?php echo $post->title; ?>
                </a> </h6>
              <p class="userrec"> نوشته شده توسط کاربران </p>
              <div class="catsrec">
              <?php 
                foreach ($post->categories as $cat_id) { 
                  $cat_name = Category::getCategoryById($cat_id)->category_name; ?>
                  <p class="catrec"> 
                    <!-- <a href="?cat=<?php //echo $cat_id; ?>"> -->
                    <?php echo $cat_name; ?>
                    <!-- </a> -->
                  </p>
                  <?php
                  
                } ?>

              </div>
            </div>
          </div>
          <?php endforeach; ?>  
<?php endif; ?>
      </div>
    </div>



    <script src="CJP/new.js"></script>
    <script src="CJP/scrtpt1.js"></script>
    <script src="CJ/javascript.js"></script>
    <script>
      $(".comment-parent").animate({ scrollTop: 100000000}, 1000);

     
    </script>
    </script>
    <script src="CJ/javascript.js"></script>
    <script>

  
      // function setCookie(name,value) {
      //   var expires = "";
      //   document.cookie = name + "=" + (value || "")  + expires + "; path=/";
      // }
      // function getCookie(name) {
      //   var nameEQ = name + "=";
      //   var ca = document.cookie.split(';');
      //   for(var i=0;i < ca.length;i++) {
      //       var c = ca[i];
      //       while (c.charAt(0)==' ') c = c.substring(1,c.length);
      //       if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
      //   }
      //   return null;
      // }

      // // setCookie("user_email","bobthegreat@gmail.com");
      // var userEmail = getCookie("open");
      // const cookieName = "open";
      
      // function adc() {
      //   setCookie("open","done");
      //   location.reload()
      // } 
      
      // function closeadd(element) {
      //   document.cookie = `${cookieName}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
        
      //   location.reload()
      // }
      // if (userEmail == 'done') {
      //   $('.add-f').toggleClass('d-none')
        
      // }
      // if (userEmail !== 'done') {
      //   $(element).parent().parent().parent().toggleClass('d-none');
      // }
    </script>
  </body>
</html>
