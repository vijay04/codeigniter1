<header class="group">
  <h2><?php print anchor(base_url(), 'Burnstudio', 'title:burstudio');?></h2>
  <div id="call">
    <h3>(012) 345 6789</h3>
    <h4 class="green">Call us <strong>now</strong></h4>
  </div><!-- end call -->
  <nav class="group">
    <ul>
      <li class="home"><a href="<?php echo base_url();?>pages/view/home" title="">Home</a></li>
      <li><a href="<?php echo base_url();?>news" title="">News</a></li>
      <li><a href="<?php echo base_url();?>pages/view/about" title="">About Us</a></li>
      <li><a href="<?php echo base_url();?>pages/view/testimonials" title="">Testimonials</a></li>
      <li class="last">
        <div>
          <input type="text" name="search" placeholder="search" />
          <input type="submit" name="search" value="go" class="search"/>
        </div>
      </li>
    </ul>
  </nav>
</header>
