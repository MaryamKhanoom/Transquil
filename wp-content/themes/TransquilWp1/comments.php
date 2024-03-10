<?php
/*
 The template for displaying comments
 */
?>

<!-- comment_form(); === A wordpress   built-in function which shows the standard comment  -->
<?php //comment_form(); ?>

<?php
 // اولین چیزی را که باید چک کرد این است که آیا کروم پسورد پروتکت است یا خیر
// اگر هیچ پسوردی با بازدید کننده کروم وارد نشده بود و پسورد پروتکت بود می توانیم خارج شویم قبل از این که هیچ کامنتی لود شود برگردیم
 if(post_password_required())
     {
         return; // اول چک می کند ببینمد آیا پست پسورد پروتگت است اگر آری بدون لود شدن هیچ کامنتی خارج می شود
     }
 ?>
    <section>


    </section>



 <?php
  $arg = array(
	  'title_reply' => 'Reply or Comment',
      //  =>   در آرایه ها وقتی که استفاده بشود یعنی مقدار سمت راست را به متغییر سمت چپ می دهد
      // title_reply عنوان برای نظرات  است
	  //  comment_field شامل دو فیلد عنوان کامنت و بدنه  (textarea)کامنت است
      'comment_field' => '<div class="form">

          <label for="comment">Comment *</label>
      <br/>
      <textarea id="comment" name="comment" class="form-control">
      
 
         </div>',
        'submit_button'=> '<button type="submit" class="btn btn-primary">Submit</button> ',
       // field offers Email, cookies and URL  ما نیاز داریم علاوه بر این یک آرایه فیلد تو در تو ایجاد کنیم که این آرایه فیلدی از هوکی استفاده می کند
      //به نام comment_form-defualt-field
      //  filters the default common forms field
       'field' => apply_filters('comment_form-defualt-field' , array(
              'author' => '<div class="form"><label for="author">Your name *</label>
            <input id="author" name="author" class="form-control"></div>',

              'email' => '<div class="form"><label for="email">Your email *</label>
            <input id="email" name="email" class="form-control"></div>',


            
              

       ))

);
comment_form($arg);


?>






<!--  اما این کافی نیست باید دید که کجا فرم را در این قالب قرار دهیم در صحفه پست ها و یا محصولات single.php هم چک کنیم ببینیم