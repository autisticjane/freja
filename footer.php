		</div><!-- body--main -->
		<footer>
			<p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>&trade;</p>
			<nav class="menu--footer" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
			</nav>
		</footer>
       <!--js-->
            <script>
            var acc = document.getElementsByClassName("accordion");
            var i;
            
            for (i = 0; i < acc.length; i++) {
              acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight){
                  panel.style.maxHeight = null;
                } else {
                  panel.style.maxHeight = panel.scrollHeight + "px";
                } 
              });
            }
            </script>
        <!--end js-->
		<?php wp_footer(); ?>
	</body>
</html>