<?php 
include 'includes/header.php';
?>

<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Contact Jeremy</h2>
  <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress  = "mostpuzzled@outlook.com";  //place your/your client's email address here
        $toName     = "Jeremy Robinson"; //place your client's name here
        $website    = "CodeWithJeremy IT162 Projects";  //place NAME of your client's website,
            // $website is used for client to identify webiste, and or page

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements
  ?>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
</aside>
<!-- END RIGHT COL -->
 
<?php 
include 'includes/footer.php';
?>
