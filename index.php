<?php
/*
* This is main template file 
*/

  get_header();

?>
    
    
    
    <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>

  <?php
    // footer.php file include code is Bellow
    get_footer(); 
  ?>