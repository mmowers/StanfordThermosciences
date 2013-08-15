<?php
  function is_currentFooter($sel_page, $cur_page) {
    return ($sel_page == $cur_page) ? ' id="current"' : '';
  }
?>
									<div id="innerFooter">
										<a class="footerLinks" href="http://www.stanford.edu" <?php echo is_currentFooter($selected, "stanford-home"); ?>>Stanford Home</a>&nbsp;|&nbsp;
										<a class="footerLinks" href="http://soe.stanford.edu" <?php echo is_currentFooter($selected, "engineering-home"); ?>>Engineering Home</a>&nbsp;|&nbsp;
										<a class="footerLinks" href="#" <?php echo is_currentFooter($selected, "sitemap"); ?>>Site Map</a>&nbsp;|&nbsp;
										<a class="footerLinks" href="<?php echo $dir ?>contact/index.html" <?php echo is_currentFooter($selected, "contactus"); ?>>Contact Us</a>&nbsp;|&nbsp;
										<a class="footerLinks" href="#" <?php echo is_currentFooter($selected, "feedback"); ?>>Feedback</a>
									</div>
									<div id="copyright">
										&copy; 1997-<?php print date('Y'); ?> Stanford University. All Rights Reserved.
									</div>