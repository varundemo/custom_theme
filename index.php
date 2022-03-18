<?php get_header(); ?>    
    <header>
        <div class="logo-section sticky-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 logo"> <a class="navbar-brand" href="https://technisun.com"><img class="img-fluid" src="<?php echo get_bloginfo('template_url'); ?>/images/logo.png" alt="Technisun"></a> </div>
                    <div class="col-lg-7">
                        <nav class="navbar sticky-top navbar-toggleable-md navbar-light nopadding"> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-bars" style="color:#fff; font-size:17px;"></i> </button>
                            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                                
                                            <?php 
                                            // wp custom menu 
                                            include('subMenu.php');
                                            wp_nav_menu(array(
                                                'menu'=>'primary_menu',
                                                'container'=>'',
                                                'items_wrap'=>'<ul class="navbar-nav ml-auto">%3$s</ul>',
                                                'add_li_class'  => 'nav-item dropdown',
                                                'walker' => new subMenu
                                            ));


                                            ?>
                                   
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "Product",
            "name": "Technisun",
            "image": "https://technisun.com/uploads/sliders/1535339886.jpg",
            "description": "Technisun offers complete web solutions for local and international businesses in Australia. Website design, development, internet marketing and app development is our forte.",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "5",
                "bestRating": "5",
                "worstRating": "1",
                "ratingCount": "3"
            }
        }
    </script>
    <div class="banner">
        <div class="row">
            <div class=" banner-img "> <img class=" img-fluid " src="<?php echo get_bloginfo('template_url'); ?>/images/front.jpg" alt="Technisun">
                <div class="banner-text ">
                    <h1>
                        <p class="afterload" style="display:none;">WE MAKE</p> <a href="javascript:void(0)" class="typewrite" data-period="2000" data-type='[ "SPECTACULAR DESIGNS" , "GREAT FUNCTIONALITY" , "AWESOME WEBSITES" , "TARGET MARKETING" , "IDEAS" , "AMAZING APPS" , "eCOMMERCE" , "QUICK RANKINGS" , "LONG TERM SEO" , "INTRIGUING CONTENT"]'> <span class="wrap"></span> </a>
                        <p class="afterload" style="display:none;">POSSIBLE</p>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="about-section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 abt-text text-center headings">
                    <h2>Welcome to <span style="color:#023052;">Techni</span><span style="color:#ffd318;">Sun</span></h2>
                    <p>Technisun has been crafted keeping in mind the requirements of IT industry.</p>
                    <p>As an organization, we vouch to be different because of our open work culture, zeal to learn more and fire in the belly to perform better. We house experts in every web technology you can think of. Our services range from creating
                        powerful, engaging websites to developing complex, seamlessly working, glitch-free web applications, and anything that lies across lengths and breadths of IT Services.</p>
                    <p>We are a closely-knit team of highly skillful individuals with hands-on experience across different aspects of web technology. We have been brought together to achieve common organizational goal of growth and exceptional performance.</p>
                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/techone.png" class="img-fluid" alt=""> </div>
            </div>
        </div>
    </div>
    <section class="services ">
        <div class="text-center blue-bg headings text-style">
            <h2>What we do</h2>
            <p>We know how valuable are happy, satisfied customers. We make our customers happy by exceeding their expectations, and we make sure they are listened and understood rightly.</p>
        </div>
        <div class="container">
            <div class="row services-list">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-effect">
                        <div class="service-item"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/blockone.png" class="icon-tv img-fluid" alt="Development">
                            <h3 class="">Development</h3>
                            <p>Creating highly effective, glitch-free web applications that delight the end-users.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-effect">
                        <div class="service-item"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/blocktwo.png" class="icon-tv img-fluid" alt="Designing">
                            <h3 class="">Designing</h3>
                            <p>Designing holistic, engaging, and expressive web designs that speak for themselves.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-effect">
                        <div class="service-item"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/blockthree.png" class="icon-tv img-fluid" alt="Digital Marketing">
                            <h3 class="">Digital Marketing</h3>
                            <p>Promoting your business across all social platforms in the most cost-effective manner.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-effect">
                        <div class="service-item"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/blockfour.png" class="icon-tv img-fluid" alt="Mobile Applications">
                            <h3 class="">Mobile Applications</h3>
                            <p>Developing mobile applications that work seamlessly, enabling end-users to do what they wish to.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-effect">
                        <div class="service-item"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/blockfive.png" class="icon-tv img-fluid" alt="CMS Development">
                            <h3 class="">CMS Development</h3>
                            <p>Producing management solutions for your organization to help you manage things more easily and effectively.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-effect">
                        <div class="service-item"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/blocksix.png" class="icon-tv img-fluid" alt="eCommerce">
                            <h3 class="">eCommerce</h3>
                            <p>Developing eCommerce portals for you so that your customers can buy your products securely and quickly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio-section" style="opacity: 1;">
        <div class="portfolio-bg">
            <div class="portfolio-heading">
                <div class="headings text-style">
                    <h2><b>Portfolio</b></h2>
                    <p>Though we are new, we have done considerably well in such a short time that we can show off our work and pat our back.</p>
                </div>
            </div>
            <div class="portfolioFilter"> <a href="#" data-filter="*" class="current">All </a> <a href="#" data-filter=".web-development" class="">Web Development</a> <a href="#" data-filter=".logo" class="">Logo</a> </div>
        </div>
        <div class="portfolioContainer grid-4 no-space" style="position: relative; height: 361.25px;">
            <figure class="effect-jazz web-development" style="position: absolute; left: 0px; top: 5px;"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/port_1.jpg" alt="IELTS PTE TRAINING">
                <figcaption>
                    <div class="see-more">
                        <div class="see-more-inner">
                            <h2>IELTS PTE TRAINING</h2> <a href="https://technisun.com/portfolio" class="btn button-line button-white btn-rounded hover-effect">SEE MORE</a> </div>
                    </div>
                </figcaption>
            </figure>
            <figure class="effect-jazz web-development" style="position: absolute; left: 0px; top: 5px;"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/port_2.jpg" alt="TRAYEE GROUP">
                <figcaption>
                    <div class="see-more">
                        <div class="see-more-inner">
                            <h2>TRAYEE GROUP</h2> <a href="https://technisun.com/portfolio" class="btn button-line button-white btn-rounded hover-effect">SEE MORE</a> </div>
                    </div>
                </figcaption>
            </figure>
            <figure class="effect-jazz web-development" style="position: absolute; left: 0px; top: 5px;"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/port_3.jpg" alt="TUTORIAL EXPERT">
                <figcaption>
                    <div class="see-more">
                        <div class="see-more-inner">
                            <h2>TUTORIAL EXPERT</h2> <a href="https://technisun.com/portfolio" class="btn button-line button-white btn-rounded hover-effect">SEE MORE</a> </div>
                    </div>
                </figcaption>
            </figure>
            <figure class="effect-jazz web-development" style="position: absolute; left: 0px; top: 5px;"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/port_4.jpg" alt="CONNECT PTE">
                <figcaption>
                    <div class="see-more">
                        <div class="see-more-inner">
                            <h2>CONNECT PTE</h2> <a href="https://technisun.com/portfolio" class="btn button-line button-white btn-rounded hover-effect">SEE MORE</a> </div>
                    </div>
                </figcaption>
            </figure>
            <figure class="effect-jazz web-development" style="position: absolute; left: 0px; top: 5px;"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/port_5.jpg" alt="OSHC POLICY">
                <figcaption>
                    <div class="see-more">
                        <div class="see-more-inner">
                            <h2>OSHC POLICY</h2> <a href="https://technisun.com/portfolio" class="btn button-line button-white btn-rounded hover-effect">SEE MORE</a> </div>
                    </div>
                </figcaption>
            </figure>
            <figure class="effect-jazz web-development" style="position: absolute; left: 0px; top: 5px;"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/port_6.jpg" alt="Budget Policy">
                <figcaption>
                    <div class="see-more">
                        <div class="see-more-inner">
                            <h2>Budget Policy</h2> <a href="https://technisun.com/portfolio" class="btn button-line button-white btn-rounded hover-effect">SEE MORE</a> </div>
                    </div>
                </figcaption>
            </figure>
            <figure class="effect-jazz logo" style="position: absolute; left: 0px; top: 5px;"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/port_7.jpg" alt="IELTS PTE TRAINING">
                <figcaption>
                    <div class="see-more">
                        <div class="see-more-inner">
                            <h2>IELTS PTE TRAINING</h2> <a href="https://technisun.com/portfolio" class="btn button-line button-white btn-rounded hover-effect">SEE MORE</a> </div>
                    </div>
                </figcaption>
            </figure>
            <figure class="effect-jazz logo" style="position: absolute; left: 0px; top: 5px;"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/port_8.png" alt="TRAYEE GROUP">
                <figcaption>
                    <div class="see-more">
                        <div class="see-more-inner">
                            <h2>TRAYEE GROUP</h2> <a href="https://technisun.com/portfolio" class="btn button-line button-white btn-rounded hover-effect">SEE MORE</a> </div>
                    </div>
                </figcaption>
            </figure>
            <figure class="effect-jazz logo" style="position: absolute; left: 0px; top: 5px;"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/port_9.jpg" alt="CONNECT PTE">
                <figcaption>
                    <div class="see-more">
                        <div class="see-more-inner">
                            <h2>CONNECT PTE</h2> <a href="https://technisun.com/portfolio" class="btn button-line button-white btn-rounded hover-effect">SEE MORE</a> </div>
                    </div>
                </figcaption>
            </figure>
            <figure class="effect-jazz logo" style="position: absolute; left: 0px; top: 5px;"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/logo_2.jpg" alt="OSHC POLICY">
                <figcaption>
                    <div class="see-more">
                        <div class="see-more-inner">
                            <h2>OSHC POLICY</h2> <a href="https://technisun.com/portfolio" class="btn button-line button-white btn-rounded hover-effect">SEE MORE</a> </div>
                    </div>
                </figcaption>
            </figure>
        </div>
        </div>
    </section>
    <section class=" testimonial-section">
        <div class="container">
            <div class="row">
                <div class="headings w-100 text-style">
                    <h2>words of appreciation</h2>
                    <p>Here&rsquo;s what our customers say about us, as it is.</p>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
                    <ol class="carousel-indicators testimonial-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4" class=""></li>
                    </ol>
                    <div class="carousel-inner " role="listbox">
                        <div class="carousel-item active">
                            <div class="testimonial-list w-100 text-center"> <img class="img-fluid rounded-circle" src="<?php echo get_bloginfo('template_url'); ?>/images/person_2.jpg" alt="Mark S.">
                                <p class=" ">Technisun has an excellent team to work with. We got our project delivered flawlessly and within time. The team members we dealt with responded promptly, were great at communication and understood our requirements absolutely
                                    perfectly. Technisun has earned our trust is highly recommended.</p>
                                <div class="name-time"> <span>Mark S.</span> </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="testimonial-list w-100 text-center"> <img class="img-fluid rounded-circle" src="<?php echo get_bloginfo('template_url'); ?>/images/person_3.jpg" alt="Donna P.">
                                <p class=" ">Developers at Technisun did a great job in working to meet our requirements in short time span. Their communication and follow-ups on the tasks were best. We enjoyed working with them, and look forward to do more projects
                                    together.</p>
                                <div class="name-time"> <span>Donna P.</span> </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="testimonial-list w-100 text-center"> <img class="img-fluid rounded-circle" src="<?php echo get_bloginfo('template_url'); ?>/images/person_4.jpg" alt="Henry Z.">
                                <p class=" ">Technisun is the company that can help you achieve online success over your competitors. Their approach towards work is absolutely professional. The company helped me improve my brand image and business to a level that
                                    I always wanted.</p>
                                <div class="name-time"> <span>Henry Z.</span> </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="testimonial-list w-100 text-center"> <img class="img-fluid rounded-circle" src="<?php echo get_bloginfo('template_url'); ?>/images/person_5.jpg" alt="Shirley C.">
                                <p class=" ">I was referred to Technisun by one of my acquaintances and I am glad I trusted her. I got my website developed from Technisun at a great price! The staff was cooperative and prompt in communication. I highly recommend Technisun.</p>
                                <div class="name-time"> <span>Shirley C.</span> </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="testimonial-list w-100 text-center"> <img class="img-fluid rounded-circle" src="<?php echo get_bloginfo('template_url'); ?>/images/person_1.jpg" alt="Tony T.">
                                <p class=" ">I was initially doubtful in giving my project to Technisun as they are new, but believe me, it turned out to be great. Their staff is extremely professional and experienced. I got my work done at almost half the price,
                                    and more importantly, on time. I thank one of my friends who recommended me Technisun, and the Technisun team, of course.</p>
                                <div class="name-time"> <span>Tony T.</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-us">
        <div class="row no-gutters">
            <div class="col-lg-6 whyus-text d-flex flex-wrap align-content-center">
                <div class="headings">
                    <h2>Why Choose Us</h2>
                </div>
                <div class="why-us-content ">
                    <div class="media wtext-box"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/icon_1.png" class=" img-fluid" alt="Custom Design &amp; Development">
                        <div class="media-body">
                            <h5 class="mt-0">Custom Design &amp; Development</h5>
                            <p>Technisun is the one-stop shop for all your custom web design &amp; development needs.</p>
                        </div>
                    </div>
                    <div class="media wtext-box"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/icon_2.png" class=" img-fluid" alt="Timely Delivery With Results">
                        <div class="media-body">
                            <h5 class="mt-0">Timely Delivery With Results</h5>
                            <p>Punctuality is the priority and we adhere to it, making sure your project is delivered on/before time.</p>
                        </div>
                    </div>
                    <div class="media wtext-box"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/icon_3.png" class=" img-fluid" alt="Customized and Cost-Effective Services">
                        <div class="media-body">
                            <h5 class="mt-0">Customized and Cost-Effective Services</h5>
                            <p>We claim to be one of the most affordable IT service providers with absolutely no compromise on quality.</p>
                        </div>
                    </div>
                    <div class="media wtext-box"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/icon_4.png" class=" img-fluid" alt="12-Month Free Technical Assistance">
                        <div class="media-body">
                            <h5 class="mt-0">12-Month Free Technical Assistance</h5>
                            <p>We are there to assist you for one full year should you need any technical support related to your product.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 whyus-image"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/choose.jpg" alt="WHY US" class="img-fluid"> </div>
        </div>
    </section>
    <section class="getin-touch">
        <div class="container">
            <div class="headings w-100">
                <h2>get in touch</h2>
                <p>We are always there, no matter what time. Contact us and we&rsquo;ll respond to your query within 48 working hours.</p>
            </div>
            <div class="address ">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 address-box text-center"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/add_icon_1.png" class="get in touch" alt="address-icon">
                        <p>Technisun</p>
                        <p>Suite 5, Level 10, 276 Flinders St.<br />Melbourne VIC 3000 Australia</p>
                    </div>
                    <div class="col-lg-4 col-sm-4 address-box text-center"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/add_icon_2.png" class="get in touch" alt="address-icon">
                        <p>Technisun Solutions Pvt. Ltd.</p>
                        <p>Plot No. 48, First Floor, JLPL Industrial Area, Sector 82, Mohali (Chandigarh), Punjab, India 140308</p>
                    </div>
                    <div class="col-lg-4 col-sm-4 address-box text-center"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/add_icon_3.png" class="get in touch" alt="address-icon">
                        <p>info@technisun.com</p>
                        <p>Australia: +61 3 7003 8732</p>
                        <p>India: +91 95014 67764</p>
                    </div>
                </div>
                <div class="row ">
                    <form id="homeForm" action="https://technisun.com/submit-info" class="w-100 d-flex getin-form "> <input type="hidden" name="_token" value="kNhbN7kXx5zMEwXYFa5pt4TvKQPh5ItkkTdN8r9P"> <input type="hidden" name="page" value="home">
                        <div class="col-lg-4 input-list ">
                            <div class="form-group"> <input type="text" class="form-control" id="name" name="name" placeholder=" Enter Name" value=""> <span style="color:darkred"></span> </div>
                            <div class="form-group"> <input type="text" class="form-control " id="email" name="email" placeholder=" Enter Email" value=""> <span style="color:darkred"></span> </div>
                            <div class="form-group"> <input type="text" class="form-control " id="phone" name="phone" placeholder=" Mobile Number" value=""> <span style="color:darkred"></span> </div>
                        </div>
                        <div class="col-lg-8 message-box">
                            <div class="form-group"> <textarea class="form-control " name="text" placeholder=" Enter Your Message" rows="" id="message" style=""></textarea> <button type="button" onclick="buttonSubmit()" class="btn btn-primary home-submit-btn">Submit</button>                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="our-partners-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h4 class="headings">Our Partners</h4>
                </div>
                <div class="col-lg-2 col-sm-6 partner-image-div">
                    <a href="https://www.asiapacificgroup.com/" target="_blank" class="our-partner-link d-flex flex-wrap align-content-center">
                        <div class="partner-image"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/foot_logo_1.png" class="img-fluid" alt="nib-img"> </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6 partner-image-div">
                    <a href="https://www.connectpte.com/" target="_blank" class="our-partner-link d-flex flex-wrap align-content-center">
                        <div class="partner-image"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/foot_logo_2.png" class="img-fluid" alt="nib-img"> </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6 partner-image-div">
                    <a href="https://www.ieltsptetraining.com/" target="_blank" class="our-partner-link d-flex flex-wrap align-content-center">
                        <div class="partner-image"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/foot_logo_3.jpg" class="img-fluid" alt="nib-img"> </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6 partner-image-div">
                    <a href="https://budgetpolicy.com/" target="_blank" class="our-partner-link d-flex flex-wrap align-content-center">
                        <div class="partner-image"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/foot_logo_4.jpg" class="img-fluid" alt="nib-img"> </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <style>
        a.our-partner-link {
            padding: 8px;
            background: #fff;
            height: 100%;
            box-shadow: 0px 2px 6px #666666;
        }

        section.our-partners-section {
            padding: 50px 0;
        }

        .our-partners-section h4.headings {
            font-size: 30px;
            FONT-WEIGHT: 800;
            text-transform: uppercase;
            margin: 0 0 20px;
        }
    </style>

<?php get_footer(); ?>    
   