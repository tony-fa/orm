<?php require_once("includes/include.php") ?>
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
  <style>
    form {
      background: #eee;
      display: flex;
      flex-direction: column;
      padding:  5px 20px;
      justify-content: center;
      align-items: center;
    }
    .main-input {
    width: 15vw;
  }
    
    #image-preview {
      width: 30% !important;
      height: auto !important;
    }

    .formg {
      display: flex;
      /* width: 60%; */
      /* justify-content: start; */
      flex-direction: column;
      margin-top: 20px;
    }

    #image-button {
      width: 30%;
      height: 30vh;
      cursor: pointer;
      align-items: center;
      border-radius: 10px;
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      padding: 2px 5px;
      font-size: 14px;
      background-color: #4245a8;
      box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25);
      user-select: none;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    #image-preview {
      width: 40% !important;
      height: auto !important;
      display: none;
      border-radius: 2px;
      border: 0px solid #1c39bb !important;
        padding: 0 !important;
      background-color: #4245a8;
      margin: 0 5px;
      width: auto;
      height: 30px;
    }
  </style>
</head>
<body>
  <!-- INSERT COMMENT -->
  <div class="div">
    <!-- <form method="post" action="http://localhost/TP/RP/ORM/post.php" class="" enctype="multipart/form-data"> -->
    <form method="post" class="" enctype="multipart/form-data">
      <img src="" id="image-preview" class="image-preview" >
      <input type="file" accept="image/*" id="imageInput" name="img_post">
      <label for="imageInput" class="image-button" id="image-button">
        <small style="margin-top: 10px;"> آپلود عکس  </small>
        <svg fill="#fff" width="180" height="180" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"><path d="M32 4H4a2 2 0 0 0-2 2v24a2 2 0 0 0 2 2h28a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2ZM4 30V6h28v24Z" class="clr-i-outline clr-i-outline-path-1"/><path d="M8.92 14a3 3 0 1 0-3-3 3 3 0 0 0 3 3Zm0-4.6A1.6 1.6 0 1 1 7.33 11a1.6 1.6 0 0 1 1.59-1.59Z" class="clr-i-outline clr-i-outline-path-2"/><path d="m22.78 15.37-5.4 5.4-4-4a1 1 0 0 0-1.41 0L5.92 22.9v2.83l6.79-6.79L16 22.18l-3.75 3.75H15l8.45-8.45L30 24v-2.82l-5.81-5.81a1 1 0 0 0-1.41 0Z" class="clr-i-outline clr-i-outline-path-3"/><path fill="none" d="M0 0h36v36H0z"/></svg>
      </label>
      <label for=""></label>
  
      <div class="formg">
        <input    type="text" id="title"          name="title"          class="main-input1" placeholder="موضوع"/>
        <textarea type="text" id="content"        name="content"        class="main-input1" placeholder="متن پست" cols="30" rows="10"></textarea>
   <!-- <input    type="text" id="published"      name="published"      class="main-input1" placeholder="نام" /> -->
        <input    type="text" id="allow_comments" name="allow_comments" class="main-input1" placeholder="فقط میتوانید 0 یا 1 را انتخاب کنید"/>
        <input    type="text" id="link"           name="link"           class="main-input1" placeholder="لینک" />
      </div>
      
      <button type="submit" name="submit2" class="button-form" onclick="handleFile()">
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
  <script src="CJP/new.js"></script>
  <script src="CJP/scrtpt1.js"></script>
  <script src="CJ/javascript.js"></script>
  <script>
      console.log($("#image-preview").attr('src'))
  </script>
</body>
</html>
<!-- 
   //  "id" => 0 ,
    //  "title" => "" ,
    //  "content" => "" ,
    //  "post_type" => 0 ,
    //  "user_id" => 0 ,
    //  "first_name" => "" ,
    //  "last_name" => "" ,
    //  "user_name" => "" ,
    //  "published" => 0 ,
    //  "allow_comments" => 0 ,
    //  "link" => "" ,
    //  "creation_time" => 0 ,
    //  "last_modify" => 0 ,
    //  "img_post" => "" ,
    //  "categories" => array()
 -->


<?php if (isset($_POST["submit2"])) {
require "uploadpost/upload_post.php";
$postArray = [
  "title" => $_POST["title"],
  "img_post" => $_FILES["img_post"]["full_path"] ,
  "content" => $_POST["content"],
  "post_type" => 1,
  "user_id" => 1,
  "published" => 1,
  "allow_comments" => $_POST["allow_comments"],
  "link" => $_POST['link'],
];
// var_dump($postArray);
Post::insertPost($postArray);
?>
<script>
$("html, body").animate({ scrollTop: $(document).height()   }, 100);
window.scrollTo( 0, document.body.scrollHeight);
</script>
<?php
}?>
