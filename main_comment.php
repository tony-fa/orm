<!DOCTYPE html>
<html lang="en" dir="rtl">
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
    <?php
      use classes\Category;
      require_once "includes/include.php";
      
      // POST
      if (isset($_GET["post"]) and is_numeric($_GET["post"])) {
          $post = $_GET["post"];
      } else {
          $post = 1;
      }
      if ($posts = Post::getPostById($post)) {
          if ($comment = Comment::getCommentsByPostId($posts->id)) {
              $commentCount = count($comment);
          } else {
              $commentCount = 0;
          } ?>
    <!-- COMMENT -->
    <div class="open-commentp" id="smnt">
      <div class="comment-count">
        <p><?php echo $commentCount; ?> کامنت</p>
        <a href="http://localhost/TP/RP/ORM/comment.php?post=<?php echo $_GET['post'] ?>">
          <svg onclick="closeadd(this)" width="24" height="24" viewBox="0 0 1024 1024" class="cw" xmlns="http://www.w3.org/2000/svg">
            <path d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"/>
            <path d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"/>
          </svg>
        </a>
      </div>
      <div class="comment-parent">
        <?php if ($comments = Comment::getCommentsByPostId($post)) {
          foreach ($comments as $comment): ?>
        <?php
          $parent_id = $comment->parent_id;
          // in kheili mohemeh
          if ($parent_id == "") {
              $parent_id = 0;
          }
          ?>
        <div class="pcomentp">
          <div class="profile-comment2">
            <svg style="fill: #464646;" width="34" height="34" class="user2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path
                d="m15.078 12.94 3.457 1.572A2.5 2.5 0 0 1 20 16.788v.712a2.5 2.5 0 0 1-2.5 2.5h-11A2.5 2.5 0 0 1 4 17.5v-.712a2.5 2.5 0 0 1 1.465-2.276l3.457-1.571a5 5 0 1 1 6.156 0Zm-5.117.627L5.88 15.422A1.5 1.5 0 0 0 5 16.788v.712A1.5 1.5 0 0 0 6.5 19h11a1.5 1.5 0 0 0 1.5-1.5v-.712a1.5 1.5 0 0 0-.88-1.366l-4.081-1.855A4.982 4.982 0 0 1 12 14a4.982 4.982 0 0 1-2.039-.433ZM12 13a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"
                />
            </svg>
          </div>
          <div class="pcomment" id="<?php echo $comment->id; ?>" ondblclick="changeAnswer(<?php echo $comment->id; ?>,'<?php echo $comment->full_name; ?>')">
            <p style="padding: 2px 10px 0 0;"><?php echo $comment->full_name; ?></p>
            <?php if ($a = $parent_id == !0) {
              $replys_name = Comment::getCommentById($parent_id); ?>
            <a href="#<?php echo $replys_name->id; ?> " onclick="pcomment()" >
              <div class="reply3">
                <div class="reply2">
                  <h5> <?php echo $replys_name->full_name; ?> </h5>
                  <p class="rcomt"> <?php echo $replys_name->comment; ?>  </p>
                </div>
              </div>
            </a>
            <?php
              } ?>
            <p class="pc2"> <?php echo $comment->comment; ?></p>
            <img class="imgcomnt" src="./upload/<?php echo $comment->img_comment; ?>" alt="">
          </div>
        </div>
        <?php endforeach;
          } ?>
      </div>
    </div>
    <!-- INSERT COMMENT -->
    <div class="">
      <p id="commenttitle">
        دیدگاه خود را در مورد این مطلب بنویسید.
      </p>
      <?php $url =
        "http://" .
        $_SERVER["HTTP_HOST"] .
        $_SERVER["REQUEST_URI"] .
        "&r=true"; ?>
      <form method="post" action="<?php echo $url; ?>" class="small-comment form-class" enctype="multipart/form-data">
        <input name="full_name" class="main-input" id="name" type="text" placeholder="نام" />
        <textarea id="sm-comment" rows="1" cols="50" name="comment" class="main-textarea" placeholder=" کامنت "></textarea>
        <input type="hidden" id="answerid" name="parent_id" value="0">
        <input type="file" accept="image/*" id="imageInput" name="img_comment">
        <label for="imageInput" class="image-button">
        <img src="https://img.icons8.com/plumpy/30/image.png" alt="">
        <small>Upload</small>
        </label>
        <img src="" class="image-preview" >
        <button type="submit" name="submit" class="button-form" onclick="handleFile()">
          <span>
            <svg fill="#000000" width="25px" height="25px" viewBox="0 0 24 24" id="send" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon2 flat-line">
              <path id="secondary" d="M5.44,4.15l14.65,7a1,1,0,0,1,0,1.8l-14.65,7A1,1,0,0,1,4.1,18.54l2.72-6.13a1.06,1.06,0,0,0,0-.82L4.1,5.46A1,1,0,0,1,5.44,4.15Z" style="fill: rgba(255, 255, 255, 0); stroke-width: 2;"></path>
              <path
                id="primary"
                d="M7,12h4M4.1,5.46l2.72,6.13a1.06,1.06,0,0,1,0,.82L4.1,18.54a1,1,0,0,0,1.34,1.31l14.65-7a1,1,0,0,0,0-1.8L5.44,4.15A1,1,0,0,0,4.1,5.46Z"
                style="fill: none; stroke: #fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"
                ></path>
            </svg>
          </span>
        </button>
      </form>
    </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->
    <script></script>
    <?php
      }
      ?>
    <?php if (isset($_POST["submit"])) {
      require "./upload/upload.php";
      $commentArray = [
          "full_name" => $_POST["full_name"],
          "comment" => $_POST["comment"],
          "post_id" => $posts->id,
          "parent_id" => $_POST["parent_id"],
          "img_comment" => $_FILES["img_comment"]["full_path"],
      ];
      Comment::insertComment($commentArray);
      ?>
    <script>
      $("html, body").animate({ scrollTop: $(document).height()   }, 100);
      window.scrollTo( 0, document.body.scrollHeight);
    </script>
    <?php
      } ?>
    <script src="CJP/new.js"></script>
    <script src="CJP/scrtpt1.js"></script>
    <script src="CJ/javascript.js"></script>
    <script>
      var path = location.toString().replace(location.search, "");
      let params = new URLSearchParams(document.location.search);
      let rjs = params.get("r");
      let postjs = params.get("post");
      // let hash = window.location.hash;
      // function pcomment() {
      //   $(hash).parent().addClass('animat');
      //   // $('.pcomment').removeClass('animat');
      // }
      if(rjs == 'true'){
        var path = location.toString().replace(location.search, "");
        window.scrollTo( 0, document.body.scrollHeight )
        location.replace(path+"?post="+postjs);
      
      }
      $(document).ready(function () {
        if (localStorage.getItem("my_app_name_here-quote-scroll") != null) {
            $(window).scrollTop(localStorage.getItem("my_app_name_here-quote-scroll"));
        }
      
        $(window).on("scroll", function() {
            localStorage.setItem("my_app_name_here-quote-scroll", $(window).scrollTop());
        });
      
      });
    </script>
  </body>
</html>