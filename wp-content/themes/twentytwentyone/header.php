<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://kit.fontawesome.com/ed08344d88.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
	<?php wp_head(); ?>
</head>
<header class=" Cus_Header">
        <div class="Cus_Header_logo">
            <a href="#"><img src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/06/Udemy.png" alt="Logo"></a>
        </div>
        <nav class="Cus_Header_menu">
            <ul class="cus_header_menu--top">
                <li><a href="#">Home</a></li>
                <li class="hover" style=" display: flex; padding: 4px 19px;"><a href="#">Page </a>
				<ul class="Cus_Header_menu--page">
                        <div class="Cus_Header_menu--pagetitle">
                            <li><a href="#">Course</a></li>
                            <li><a href="#">Membership</a> </li>
                            <li><a href="#">Even</a></li>
                            <li><a href="#"></a> </li>
                            <li><a href="#"></a></li>
                        </div>
                    </ul>
                </li>
                <li class="hover" style=" display: flex; padding: 4px 19px;font-size: 15px;font-family:roboto" >Categories</a>
					<ul class="Cus_Header_menu--Categories">
                        <div class="Cus_Header_menu--pagetitle">
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Design</a> </li>
                            <li><a href="#">Even</a></li>
                            <li><a href="#"></a> </li>
                            <li><a href="#"></a></li>
                        </div>
                    </ul>
				</li>
				<div class="input-group">
					<input type="text" placeholder="Search ..." name="s" class="thim-ekits-search">
					<button type="submit" class="button-search">
						<i aria-hidden="true" class="tk tk-search"></i>
					</button>
				</div>
				<div class="Cus_Header_title"><a href="#">Become a Teacher</a></div>
				<button type="button" class="Cus_Header_btn">Login</button>
            </ul>
        </nav>
        <!-- Mobie-icon -->
          <div class="cus_mobie-icon"> 
				    <button type="button" class="Cus_Header_btn">Login</button>
            <i class="fa-solid fa-bars">  </i>

          </div>
          <!--  -->
    </header>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#content">
		<?php
		/* translators: Hidden accessibility text. */
		esc_html_e( 'Skip to content', 'twentytwentyone' );
		?>
	</a>
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/12/slide-udume-new-2-1.jpg" class="d-block w-100" alt="...">
      <div class="overlay"></div>
      <div class="carousel-caption d-none d-md-block"class="cus_carousel-caption">
      <h5>Build Online Course Website</h5>
        <p>
          Get The Best <br>
          LMS WordPress Theme
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/12/slide-udume-new-1-1.jpg" class="d-block w-100" alt="...">
      <div class="overlay"></div>
      <div class="carousel-caption d-none d-md-block">
        <h5>Build Online Course Website</h5>
        <p>
          Get The Best <br>
          LMS WordPress Theme
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/12/slide-udume-new-4-1.jpg" class="d-block w-100" alt="...">
      <div class="overlay"></div>
      <div class="carousel-caption d-none d-md-block" 
          style="	position: absolute;
              text-align: left;
              margin-bottom: 246px;">
      <h5>Build Online Course Website</h5>
        <p>
          Get The Best <br>
          LMS WordPress Theme
        </p>
      </div>
    </div>
  </div>
  <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev"> -->
    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
    <span class="visually-hidden">Previous</span>
  </button>
  <!-- <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next"> -->
    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="main_section1">
    <div class="main_section1_content">
          <h3>100,000 online courses</h3>
          <p>Explore a variety of fresh topics</p>
    </div>
    <div class="border-left"></div>

    <div class="main_section1_content">
         <h3>Expert instruction</h3>
        <p>Find the right instructor for you</p>
    </div>
    <div class="border-left"></div>
    <div class="main_section1_content">
       <h3>Lifetime access</h3>
        <p>Learn on your schedule</p>
    </div>
 
</div>
<div class="main_no"></div>
<div class="main_section2">
    <div class="main_section2_content">
          <h2>Popular Courses</h2>
    </div>
    <div class="main_section3">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style=" width:91% ;
    justify-content: end;
    align-items: center">
     <p style="width: 59%;
    font-size: 15px;
    color: #6666;">All Eduma, All the time</p>
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" 
    style="background-color: #fff;
    color: #000;font-size:15px;">Business</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"
    style="background-color: #fff;
    color: #000;font-size:15px">Design
</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"
    style="background-color: #fff;
    color: #000;font-size:15px">Health & Fitness
</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"
    style="background-color: #fff;
    color: #000;font-size:15px">IT & Software</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="cus_tabs">
    <div class="container text-center">
  <div class="row align-items-start"style=" margin-left: -102px;
    margin-bottom: -46px;
    margin-top: -59px;
    margin-right: -102px;
    padding-right: 46px;">
    <div class="col">
      <div class="cus_col">
        <div class="cus_col_img">
          <a href="#" class="course-thumbnail">
          <img decoding="async" loading="lazy" width="400" height="300" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/04/courses-18-400x300.jpg" class="attachment-course_thumbnail size-course_thumbnail wp-image-13691" alt="courses 18"> </a>
        </div>
        <div class="cus_col_author">
          <div class="cus_col_author-img">
            <img decoding="async" loading="lazy" alt="User Avatar" src="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=96&amp;r=g" height="150" width="150">
            <a href="#">Keny White</a>
            <a href="https://eduma.thimpress.com/demo-udemy/courses/financial-accounting/"><span class="cus_col_author-img-title">Financial Accounting</span></a>
          </div>
        <div class="underline"></div>
          <div class="cus_col_author_bottom">
              <span class="cus_col_author_bottom_no">
              <i aria-hidden="true" class="icon"></i>0 </span>
              <span class="cus_col_author_bottom_seven">
              <i aria-hidden="true" class="icon"></i>7 </span>
              <span>
              <span class="cus_col_author_bottom_price"><span class="icon"><span class="price">$39.00</span></span></span> </span>
          </div>
        </div>

      </div>
    </div>
    <div class="col">
    <div class="cus_col">
        <div class="cus_col_img">
          <a href="#" class="course-thumbnail">
          <img decoding="async" loading="lazy" width="400" height="300" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/04/courses-18-400x300.jpg" class="attachment-course_thumbnail size-course_thumbnail wp-image-13691" alt="courses 18"> </a>
        </div>
        <div class="cus_col_author">
          <div class="cus_col_author-img">
            <img decoding="async" loading="lazy" alt="User Avatar" src="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=96&amp;r=g" height="150" width="150">
            <a href="#">Keny White</a>
            <a href="#"><span class="cus_col_author-img-title">Financial Accounting</span></a>
          </div>
        <div class="underline"></div>
          <div class="cus_col_author_bottom">
              <span class="cus_col_author_bottom_no">
              <i aria-hidden="true" class="icon"></i>0 </span>
              <span class="cus_col_author_bottom_seven">
              <i aria-hidden="true" class="icon"></i>7 </span>
              <span>
              <span class="cus_col_author_bottom_price"><span class="icon"><span class="price">$39.00</span></span></span> </span>
          </div>
        </div>

      </div>
    </div>
  <div class="col">
    <div class="cus_col">
        <div class="cus_col_img">
          <a href="#" class="course-thumbnail">
          <img decoding="async" loading="lazy" width="400" height="300" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/04/courses-18-400x300.jpg" class="attachment-course_thumbnail size-course_thumbnail wp-image-13691" alt="courses 18"> </a>
        </div>
        <div class="cus_col_author">
          <div class="cus_col_author-img">
            <img decoding="async" loading="lazy" alt="User Avatar" src="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=96&amp;r=g" height="150" width="150">
            <a href="#">Keny White</a>
            <a href="https://eduma.thimpress.com/demo-udemy/courses/financial-accounting/"><span class="cus_col_author-img-title">Financial Accounting</span></a>
          </div>
        <div class="underline"></div>
          <div class="cus_col_author_bottom">
              <span class="cus_col_author_bottom_no">
              <i aria-hidden="true" class="icon"></i>0 </span>
              <span class="cus_col_author_bottom_seven">
              <i aria-hidden="true" class="icon"></i>7 </span>
              <span>
              <span class="cus_col_author_bottom_price"><span class="icon"><span class="price">$39.00</span></span></span> </span>
          </div>
        </div>

      </div>
    </div>
    <div class="col">
    <div class="cus_col">
        <div class="cus_col_img">
          <a href="#" class="course-thumbnail">
          <img decoding="async" loading="lazy" width="400" height="300" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/04/courses-18-400x300.jpg" class="attachment-course_thumbnail size-course_thumbnail wp-image-13691" alt="courses 18"> </a>
        </div>
        <div class="cus_col_author">
          <div class="cus_col_author-img">
            <img decoding="async" loading="lazy" alt="User Avatar" src="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=96&amp;r=g" height="150" width="150">
            <a href="#">Keny White</a>
            <a href="https://eduma.thimpress.com/demo-udemy/courses/financial-accounting/"><span class="cus_col_author-img-title">Financial Accounting</span></a>
          </div>
        <div class="underline"></div>
          <div class="cus_col_author_bottom">
              <span class="cus_col_author_bottom_no">
              <i aria-hidden="true" class="icon"></i>0 </span>
              <span class="cus_col_author_bottom_seven">
              <i aria-hidden="true" class="icon"></i>7 </span>
              <span>
              <span class="cus_col_author_bottom_price"><span class="icon"><span class="price">$39.00</span></span></span> </span>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="cus_tabs">
    <div class="container text-center">
  <div class="row align-items-start"style=" margin-left: -102px;
    margin-bottom: -46px;
    margin-top: -59px;
    margin-right: -102px;
    padding-right: 46px;">
    <div class="col">
      <div class="cus_col">
        <div class="cus_col_img">
          <a href="#" class="course-thumbnail">
          <img decoding="async" loading="lazy" width="400" height="300" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/04/courses-18-400x300.jpg" class="attachment-course_thumbnail size-course_thumbnail wp-image-13691" alt="courses 18"> </a>
        </div>
        <div class="cus_col_author">
          <div class="cus_col_author-img">
            <img decoding="async" loading="lazy" alt="User Avatar" src="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=96&amp;r=g" height="150" width="150">
            <a href="#">Keny White</a>
            <a href="https://eduma.thimpress.com/demo-udemy/courses/financial-accounting/"><span class="cus_col_author-img-title">Financial Accounting</span></a>
          </div>
        <div class="underline"></div>
          <div class="cus_col_author_bottom">
              <span class="cus_col_author_bottom_no">
              <i aria-hidden="true" class="icon"></i>0 </span>
              <span class="cus_col_author_bottom_seven">
              <i aria-hidden="true" class="icon"></i>7 </span>
              <span>
              <span class="cus_col_author_bottom_price"><span class="icon"><span class="price">$39.00</span></span></span> </span>
          </div>
        </div>

      </div>
    </div>
    <div class="col">
    <div class="cus_col">
        <div class="cus_col_img">
          <a href="#" class="course-thumbnail">
          <img decoding="async" loading="lazy" width="400" height="300" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/04/courses-18-400x300.jpg" class="attachment-course_thumbnail size-course_thumbnail wp-image-13691" alt="courses 18"> </a>
        </div>
        <div class="cus_col_author">
          <div class="cus_col_author-img">
            <img decoding="async" loading="lazy" alt="User Avatar" src="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=96&amp;r=g" height="150" width="150">
            <a href="#">Keny White</a>
            <a href="https://eduma.thimpress.com/demo-udemy/courses/financial-accounting/"><span class="cus_col_author-img-title">Financial Accounting</span></a>
          </div>
        <div class="underline"></div>
          <div class="cus_col_author_bottom">
              <span class="cus_col_author_bottom_no">
              <i aria-hidden="true" class="icon"></i>0 </span>
              <span class="cus_col_author_bottom_seven">
              <i aria-hidden="true" class="icon"></i>7 </span>
              <span>
              <span class="cus_col_author_bottom_price"><span class="icon"><span class="price">$39.00</span></span></span> </span>
          </div>
        </div>

      </div>
    </div>
  <div class="col">
    <div class="cus_col">
        <div class="cus_col_img">
          <a href="#" class="course-thumbnail">
          <img decoding="async" loading="lazy" width="400" height="300" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/04/courses-18-400x300.jpg" class="attachment-course_thumbnail size-course_thumbnail wp-image-13691" alt="courses 18"> </a>
        </div>
        <div class="cus_col_author">
          <div class="cus_col_author-img">
            <img decoding="async" loading="lazy" alt="User Avatar" src="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=96&amp;r=g" height="150" width="150">
            <a href="#">Keny White</a>
            <a href="https://eduma.thimpress.com/demo-udemy/courses/financial-accounting/"><span class="cus_col_author-img-title">Financial Accounting</span></a>
          </div>
        <div class="underline"></div>
          <div class="cus_col_author_bottom">
              <span class="cus_col_author_bottom_no">
              <i aria-hidden="true" class="icon"></i>0 </span>
              <span class="cus_col_author_bottom_seven">
              <i aria-hidden="true" class="icon"></i>7 </span>
              <span>
              <span class="cus_col_author_bottom_price"><span class="icon"><span class="price">$39.00</span></span></span> </span>
          </div>
        </div>

      </div>
    </div>
    <div class="col">
    <div class="cus_col">
        <div class="cus_col_img">
          <a href="#" class="course-thumbnail">
          <img decoding="async" loading="lazy" width="400" height="300" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/04/courses-18-400x300.jpg" class="attachment-course_thumbnail size-course_thumbnail wp-image-13691" alt="courses 18"> </a>
        </div>
        <div class="cus_col_author">
          <div class="cus_col_author-img">
            <img decoding="async" loading="lazy" alt="User Avatar" src="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=96&amp;r=g" height="150" width="150">
            <a href="#">Keny White</a>
            <a href="https://eduma.thimpress.com/demo-udemy/courses/financial-accounting/"><span class="cus_col_author-img-title">Financial Accounting</span></a>
          </div>
        <div class="underline"></div>
          <div class="cus_col_author_bottom">
              <span class="cus_col_author_bottom_no">
              <i aria-hidden="true" class="icon"></i>0 </span>
              <span class="cus_col_author_bottom_seven">
              <i aria-hidden="true" class="icon"></i>7 </span>
              <span>
              <span class="cus_col_author_bottom_price"><span class="icon"><span class="price">$39.00</span></span></span> </span>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
    </div>
  </div>
    
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
</div>
    </div>

</div>

<div class="main_section4">
  <div class="main_section4_content">
    <div class="main_section4_content_heading "><h3 class="title1">Limitless learning, more possibilities</h3>
    </div>
    <div class="main_section4_content--sub-heading"><p>Answer a few questions for your top picks</p>
    </div>
  </div>
  <div class="main_section4_content_btn">
    <a class="main_section4_content_btn--content" href="#" target="_blank" rel="nofollow">join for free</a> </div>
</div>
<div class="main_section4_content_img"><img loading="lazy" width="378" height="230" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/06/image-cta-min-1.png" class="attachment-full size-full" alt="" decoding="async" srcset="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/06/image-cta-min-1.png 378w, https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/06/image-cta-min-1-300x183.png 300w" sizes="(max-width: 378px) 100vw, 378px"></div>
<div class="main_section5">
<div class="main_section5_">
      <div class="main_section5_content">
      <div class="main_section5_content_heading "><h2 class="title2">Top Categories</h2>
      </div>
      <div class="container">
  <div class="row">
    <div class="col-6 col-sm-3"style="WIDTH: 261px;height: 61px;background-color: #fff;margin-bottom: 15px;border-radius: 5px;line-height: 61px; margin-left:15px">
    <a href="#" style="text-decoration: none;">
      <img decoding="async" alt="Business" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/02/005-settings.png"> 
      <span class="category-title">Business</span> 
    </a>
    </div>
    <div class="col-6 col-sm-3"style="	WIDTH: 261px;height: 61px;background-color: #fff;margin-bottom: 15px;border-radius: 5px;line-height: 61px; margin-left:15px">
    <a href="#"style="text-decoration: none;">
      <img decoding="async" alt="Design" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/02/002-color-palette.png"> <span class="category-title">Design</span> </a>
    </div>
    <div class="col-6 col-sm-3"style="	WIDTH: 261px;height: 61px;background-color: #fff;margin-bottom: 15px;border-radius: 5px;line-height: 61px;margin-left:15px">
      <a href="#"style="text-decoration: none;">
        <img decoding="async" alt="Health &amp; Fitness" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/02/003-lifestyle.png"> <span class="category-title">Health &amp; Fitness</span> 
      </a>
    </div>
    

    <!-- Force next columns to break to new line -->
    <div class="w-100"></div>

    <div class="col-6 col-sm-3"style="WIDTH: 261px;height: 61px;background-color: #fff;margin-bottom:15px;border-radius: 5px;line-height: 61px; margin-left:15px">
    <a href="#" style="text-decoration: none;">
<img decoding="async" alt="IT &amp; Software" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/02/001-web-programming.png"> <span class="category-title">IT &amp; Software</span> </a>
    </div>
    <div class="col-6 col-sm-3"style="	WIDTH: 261px;height: 61px;background-color: #fff;margin-bottom:15px;border-radius: 5px;line-height: 61px; margin-left:15px">
    <a href="#" style="text-decoration: none;">
      <img decoding="async" alt="Lifestyle" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/02/006-tablet.png">
      <span class="category-title">Lifestyle</span> 
    </a>
    </div>
    <div class="col-6 col-sm-3"style="	WIDTH: 261px;height: 61px;background-color: #fff;margin-bottom:15px;border-radius: 5px;line-height: 61px; margin-left:15px">
    <a href="#" style="text-decoration: none;">
<img decoding="async" alt="Marketing" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/02/004-setting.png"> <span class="category-title">Marketing</span> </a>
    </div>
  </div>
</div> 
      
      </div>
</div>
<div class="main_section6">
    <div class="main_section6_heading ">
      <h2 class="title3">New Courses</h2>
      <p>Learn new skills, pursue your interests or advance your career with our short online courses</p>
    </div>
    <div class="cus_tabs">
    <div class="container text-center">
  <div class="row align-items-start"style=" margin-left: -102px;
    margin-bottom: -46px;
    margin-top: -59px;
    margin-right: -102px;
    padding-right: 46px;">
    <div class="col">
      <div class="cus_col">
        <div class="cus_col_img">
          <a href="#" class="course-thumbnail">
          <img decoding="async" loading="lazy" width="400" height="300" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/04/courses-18-400x300.jpg" class="attachment-course_thumbnail size-course_thumbnail wp-image-13691" alt="courses 18"> </a>
        </div>
        <div class="cus_col_author">
          <div class="cus_col_author-img">
            <img decoding="async" loading="lazy" alt="User Avatar" src="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=96&amp;r=g" height="150" width="150">
            <a href="#">Keny White</a>
            <a href="https://eduma.thimpress.com/demo-udemy/courses/financial-accounting/"><span class="cus_col_author-img-title">Financial Accounting</span></a>
          </div>
        <div class="underline"></div>
          <div class="cus_col_author_bottom">
              <span class="cus_col_author_bottom_no">
              <i aria-hidden="true" class="icon"></i>0 </span>
              <span class="cus_col_author_bottom_seven">
              <i aria-hidden="true" class="icon"></i>7 </span>
              <span>
              <span class="cus_col_author_bottom_price"><span class="icon"><span class="price">$39.00</span></span></span> </span>
          </div>
        </div>

      </div>
    </div>
    <div class="col">
    <div class="cus_col">
        <div class="cus_col_img">
          <a href="#" class="course-thumbnail">
          <img decoding="async" loading="lazy" width="400" height="300" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/04/courses-18-400x300.jpg" class="attachment-course_thumbnail size-course_thumbnail wp-image-13691" alt="courses 18"> </a>
        </div>
        <div class="cus_col_author">
          <div class="cus_col_author-img">
            <img decoding="async" loading="lazy" alt="User Avatar" src="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=96&amp;r=g" height="150" width="150">
            <a href="#">Keny White</a>
            <a href="https://eduma.thimpress.com/demo-udemy/courses/financial-accounting/"><span class="cus_col_author-img-title">Financial Accounting</span></a>
          </div>
        <div class="underline"></div>
          <div class="cus_col_author_bottom">
              <span class="cus_col_author_bottom_no">
              <i aria-hidden="true" class="icon"></i>0 </span>
              <span class="cus_col_author_bottom_seven">
              <i aria-hidden="true" class="icon"></i>7 </span>
              <span>
              <span class="cus_col_author_bottom_price"><span class="icon"><span class="price">$39.00</span></span></span> </span>
          </div>
        </div>

      </div>
    </div>
  <div class="col">
    <div class="cus_col">
        <div class="cus_col_img">
          <a href="#" class="course-thumbnail">
          <img decoding="async" loading="lazy" width="400" height="300" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/04/courses-18-400x300.jpg" class="attachment-course_thumbnail size-course_thumbnail wp-image-13691" alt="courses 18"> </a>
        </div>
        <div class="cus_col_author">
          <div class="cus_col_author-img">
            <img decoding="async" loading="lazy" alt="User Avatar" src="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=96&amp;r=g" height="150" width="150">
            <a href="#">Keny White</a>
            <a href="https://eduma.thimpress.com/demo-udemy/courses/financial-accounting/"><span class="cus_col_author-img-title">Financial Accounting</span></a>
          </div>
        <div class="underline"></div>
          <div class="cus_col_author_bottom">
              <span class="cus_col_author_bottom_no">
              <i aria-hidden="true" class="icon"></i>0 </span>
              <span class="cus_col_author_bottom_seven">
              <i aria-hidden="true" class="icon"></i>7 </span>
              <span>
              <span class="cus_col_author_bottom_price"><span class="icon"><span class="price">$39.00</span></span></span> </span>
          </div>
        </div>

      </div>
    </div>
    <div class="col">
    <div class="cus_col">
        <div class="cus_col_img">
          <a href="#" class="course-thumbnail">
          <img decoding="async" loading="lazy" width="400" height="300" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/04/courses-18-400x300.jpg" class="attachment-course_thumbnail size-course_thumbnail wp-image-13691" alt="courses 18"> </a>
        </div>
        <div class="cus_col_author">
          <div class="cus_col_author-img">
            <img decoding="async" loading="lazy" alt="User Avatar" src="https://secure.gravatar.com/avatar/b08d0d3bc9bf251a412e53566ac82b54?s=96&amp;r=g" height="150" width="150">
            <a href="#">Keny White</a>
            <a href="https://eduma.thimpress.com/demo-udemy/courses/financial-accounting/"><span class="cus_col_author-img-title">Financial Accounting</span></a>
          </div>
        <div class="underline"></div>
          <div class="cus_col_author_bottom">
              <span class="cus_col_author_bottom_no">
              <i aria-hidden="true" class="icon"></i>0 </span>
              <span class="cus_col_author_bottom_seven">
              <i aria-hidden="true" class="icon"></i>7 </span>
              <span>
              <span class="cus_col_author_bottom_price"><span class="icon"><span class="price">$39.00</span></span></span> </span>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
    </div>   
</div>

<div class="main_section7">
    <div class="main_section7_heading ">
      <h2>Explore Certificates</h2>
      <p>Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="cus_tabs">
    <div class="container text-center">
  <div class="row align-items-start"style=" margin-left: -102px;
    margin-bottom: -46px;
    margin-top: -59px;
    margin-right: -102px;
    padding-right: 46px;">
    <div class="col">
    <div class="cus_col">
        <div class="cus_col_img">
          <a href="#" class="course-thumbnail">
          <img decoding="async" loading="lazy" width="400" height="300" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/11/certificates-new-1-2.png" class="attachment-course_thumbnail size-course_thumbnail wp-image-13691" alt="courses 18"> </a>
        </div>
        <div class="cus_col-heading">
          <h5><a class="icon-box-link" href="#" target="_blank">Certificate of Training</a></h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="cus_col">
        <div class="cus_col_img">
          <a href="#" class="course-thumbnail">
          <img decoding="async" loading="lazy" width="400" height="300" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/11/certificates-new-2-2.png" class="attachment-course_thumbnail size-course_thumbnail wp-image-13691" alt="courses 18"> </a>
        </div>
        <div class="cus_col-heading">
          <h5 ><a class="icon-box-link" href="#" target="_blank">Course Completion</a></h5>
        </div>
      </div>
    </div>
    <div class="col">
    <div class="cus_col">
        <div class="cus_col_img">
          <a href="#" class="course-thumbnail">
          <img decoding="async" loading="lazy" width="400" height="300" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/11/certificates-new-3-2.png" class="attachment-course_thumbnail size-course_thumbnail wp-image-13691" alt="courses 18"> </a>
        </div>
        <div class="cus_col-heading">
          <h5><a class="icon-box-link" href="#" target="_blank">Digital Marketing
</a></h5>
        </div>
      </div>
    </div>
    <div class="col">
        <div class="cus_col">
        <div class="cus_col_img">
          <a href="#" class="course-thumbnail">
          <img decoding="async" loading="lazy" width="400" height="300" src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/11/certificates-new-4-2.png" class="attachment-course_thumbnail size-course_thumbnail wp-image-13691" alt="courses 18"> </a>
        </div>
        <div class="cus_col-heading">
          <h5><a class="icon-box-link" href="#" target="_blank">Data Analytics</a></h5>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>   
</div>
<div class="main_section8">
  <div class="">
  <div class="container text-center">
    <div class="main_section8--content">
      <div class="row align-items-center">
        <div class="col">
          <div class="cus_col_left">
            <h2>Events</h2>
            <div class="cus_col_left--content">

            </div>
          </div>
        </div>
        <div class="col"style="margin-bottom: 26px;">
        <div class="cus_col_right">
            <h2>Our Testimonials</h2>
            <div class="cus_col_right--content">
            <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="cus_col_right_client-content">
            <h5>Code quality</h5>
            <p>Education WP Theme is a comprehensive LMS solution for WordPress Theme. This beautiful theme based on LearnPress – the best WordPress LMS plugin. Education WP theme will bring you the best LMS experience ever with super friendly UX and complete eLearning features.</p> 
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            </div>
          </div>
        </div>
      </div>
      </div>  
    </div>
  </div>
</div>
<div class="main_section9">
  <div class="main_section9_content">
  <div class="cus_main_section9-img" >
            <a target="_self" href="#"
              ><img
                loading="lazy"
                width="151"
                height="151"
                src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/06/icon-partner-1-1.png"
                alt="icon partner 3 1"
                decoding="async"
                sizes="(max-width: 151px) 100vw, 151px"
            /></a>
          </div>
          <div class="cus_main_section9-img" >
            <a target="_self" href="#"
              ><img
                loading="lazy"
                width="151"
                height="151"
                src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/06/icon-partner-3-1.png"
                alt="icon partner 3 1"
                decoding="async"
                sizes="(max-width: 151px) 100vw, 151px"
            /></a>
          </div>
          <div class="cus_main_section9-img">
            <a target="_self" href="#"
              ><img
                loading="lazy"
                width="151"
                height="151"
                src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/06/icon-partner-2-1.png"
                alt="icon partner 3 1"
                decoding="async"
                sizes="(max-width: 151px) 100vw, 151px"
            /></a>
          </div>
          <div class="cus_main_section9-img" >
            <a target="_self" href="#"
              ><img
                loading="lazy"
                width="151"
                height="151"
                src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/06/icon-partner-4-1.png"
                alt="icon partner 3 1"
                decoding="async"
                sizes="(max-width: 151px) 100vw, 151px"
            /></a>
          </div>
          <div class="cus_main_section9-img">
            <a target="_self" href="#"
              ><img
                loading="lazy"
                width="151"
                height="151"
                src="https://eduma.thimpress.com/demo-udemy/wp-content/uploads/sites/93/2022/06/icon-partner-5-1.png"
                alt="icon partner 3 1"
                decoding="async"
                sizes="(max-width: 151px) 100vw, 151px"
            /></a>
          </div>
  </div>
</div>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
