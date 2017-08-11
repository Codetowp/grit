<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package grit
 */

get_header(); ?>

<!-- banner Page
    ==========================================-->
<div id="page-banner" style="background-image: url(img/p-1.jpg);">
  <div class="content  wow fdeInUp">
    <div class="container "> 
      
      <!--breadcrumb--
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Wordpress</li>
        </ol>
        --/breadcrumb--> 
      <span>Branading.Design</span>
      <h1>Case Study: Bradley Co 
        Protoype design </h1>
      <!--  <header class="entry-header"><a href="#"> </a><span class="date-article">10 days ago</span> in <span class="byline"><span class="author vcard"><a href="#">WORDPRESS</a> ,<a href="#"> BLOG</a></span></span> </header>-->
      <ul class="tag-head">
        <li><a href="#">Red</a></li>
        <li><a href="#">design</a></li>
      </ul>
    </div>
  </div>
</div>

<!--page body-->

<div id="page-body">
  <div class="container">
    <div class="row  wow fdeInUp"> 
      <!--blog posts container-->
      <div class="col-md-12 page-block "   >
        <h3><strong>The Brief:</strong></h3>
        <p> Donut cake carrot cake toffee tootsie roll halvah muffin tiramisu icing. Danish pie liquorice candy dessert soufflé. Pudding halvah jelly-o gingerbread sweet roll candy canes donut. I love topping lemon drops wafer chocolate candy chupa chups I love icing. Biscuit pudding brownie danish macaroon soufflé candy. </p>
        <h3><strong>Our Approach:</strong></h3>
        <p> Donut cake carrot cake toffee tootsie roll halvah muffin tiramisu icing. Danish pie liquorice candy dessert soufflé. <em>Pudding halvah jelly-o gingerbread sweet roll candy canes donut. I love topping lemon drops wafer chocolate candy chupa chups I love icing. Biscuit pudding brownie danish macaroon soufflé candy.</em> </p>
        <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p>
        <h3><strong>The Result:</strong></h3>
        <figure  ><img src="img/p-1.jpg" class="img-responsive">
          <figcaption class="wp-caption-text">Look at 580×300 getting some <a title="Image Settings" href="http://en.support.wordpress.com/images/image-settings/">caption</a> love. </figcaption>
        </figure>
        <h3><strong>Client Details:</strong></h3>
        <ul>
          <li> Client: Designscrazed</li>
          <li> Task: Design, Prototype</li>
          <li> Dead line: 3 Months</li>
        </ul>
        <a href="#" class="page-body-a">Vist Website</a> 
        
        <!--footer tags-->
        
        <footer class="entry-footer entry-meta-bar">
          <div class="entry-meta"> <i class="fa fa-tags"></i> <span class="tag-links  clearfix"> <a href="#" rel="tag">wordpress</a> <a href="#" rel="tag">themes</a> </span> </div>
        </footer>
        <!--/footer tags--> 
        
      </div>
      <!--blog posts container-->
      
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!--/page body-->

<div class="page-share-block">
  <div class="container">
    <div class="row">
      <h4>Share on :</h4>
      
      <!--page-share-->
      <ul class="page-share">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
      
      <!--page-share--> 
      
    </div>
  </div>
</div>
<?php
//get_sidebar();
get_footer();
