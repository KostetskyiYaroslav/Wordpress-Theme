<?php wp_footer();
$sql_result = sprintf(('SQL: %d за %s сек. '), get_num_queries(), timer_stop(0, 3));
$date       = date('H:i:s A');
?>
     </div>
    </div>
   </div>
  </div>
 </main>
 <footer class="page-footer blue">
   <div class="container">
     <div class="row">
       <div class="col l6 s6">
        <h5 class="footer-date white-text"><?php echo $date; ?></h5>
        <p class="grey-text text-lighten-4"><?php echo $sql_result; ?></p>
       </div>
<?php if ( is_active_sidebar( 'footer_widget_area_1' ) ) : ?>
    <div class="footer-widget-area col offset-6 s4" role="complementary">
        <?php dynamic_sidebar( 'footer_widget_area_1' ); ?>
    </div><!-- #footer-sidebar -->
<?php endif; ?>
     </div>
   </div>
   <div class="footer-copyright blue darken-1">
     <div class="container">
       © 2016 SoftGroup PHP Academy
     </div>
   </div>
 </footer>
 </body>
</html>