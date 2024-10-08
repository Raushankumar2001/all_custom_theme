
<?php
/**
 * Template Name: Jobpackage
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php get_header(); ?>

<?php 
            if(have_rows('jobpackage_section', get_the_ID())) { 
                // print_r(get_the_ID());
                // echo "Testing" . get_the_ID();                
                while ( have_rows('jobpackage_section', get_the_ID()) ) {
                    the_row();
                    get_template_part( 'mytheme/NewBLock/' . get_row_layout() );
                }
            }
         

        ?>  


<section>
    <div class="modual_plans_package_wrap">
        <div class="container">
            <div class="modual_plans_package_wrap_inner">
                <h3>Buy Our Plans And Packages</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

            <div class="modual_all_plans_wrap">
                <!-- Basic Plan -->
                <div class="modual_plans_inner_wrap">
                    <h5>Basic</h5>
                    <span>$14</span>
                    <p>Per user, per month</p>
                    <div class="modual_plans_btn">
                        <button>Start My 15-day Trial</button>
                    </div>
                    <hr>
                    <div class="modual_plans_support">
                        <p>20 job postings</p>
                        <p>10+ featured jobs</p>
                        <p>Job displayed for 45 days</p>
                        <p>50+ display profiles</p>
                        <p>24/7 Support</p>
                    </div>
                </div>

                <!-- Standard Plan -->
                <div class="modual_plans_inner_wrap">
                    <h5>Standard</h5>
                    <span>$29</span>
                    <p>Per user, per month</p>
                    <div class="modual_plans_btn btns">
                        <button>Start My 15-day Trial</button>
                    </div>
                    <hr>
                    <div class="modual_plans_support">
                        <p>20 job postings</p>
                        <p>10+ featured jobs</p>
                        <p>Job displayed for 45 days</p>
                        <p>50+ display profiles</p>
                        <p>24/7 Support</p>
                    </div>
                </div>

                <!-- Premium Plan -->
                <div class="modual_plans_inner_wrap">
                    <h5>Premium</h5>
                    <span>$139</span>
                    <p>Per user, per month</p>
                    <div class="modual_plans_btn">
                        <button>Start My 15-day Trial</button>
                    </div>
                    <hr>
                    <div class="modual_plans_support">
                        <p>20 job postings</p>
                        <p>10+ featured jobs</p>
                        <p>Job displayed for 45 days</p>
                        <p>50+ display profiles</p>
                        <p>24/7 Support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <!-- <section>
            <div class="blog_section">
            <img src="<?php bloginfo('template_directory');?>/image/jobs.png" alt="">

            <div class="container">
                    <div class="blog_wrap">
                        <h1>jobPackage</h1>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="blog_home_section">
                <div class="container">
                    <span>Home /jobPackage </span>
                </div>
            </div>
        </section>

        <section>
            <div class="modual_plans_package_wrap">
                <div class="container">
                    <div class="modual_plans_package_wrap_inner">
                        <h3>Buy Our Plans And Packages</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing 
                        and typesetting industry. </p>
                    </div>


                    <div class="modual_all_plans_wrap">
                        <div class="modual_plans_inner_wrap">
                            <h5>Basic</h5>
                            <span>$14</span>
                            <p>Per user, per months</p>
                            <div class="modual_plans_btn">
                                <button>Start My 15-day Trial</button>
                            </div>
                            <hr>

                            <div class="modual_plans_support">
                                <p>20 job posting</p>
                                <p>10+ featured job</p>
                                <p>Job displayed for 45 days</p>
                                <p>50+ display profile</p>
                                <p>24/7 Support</p>
                                <p>Job displayed for 45 days</p>
                                <p>24/7 Support</p>
                            </div>
                        </div>
                        <div class="modual_plans_inner_wrap">
                            <div class="s">
                            <h5>Basic</h5>
                            <span>$29</span>
                            <p>Per user, per months</p>
                            <div class="modual_plans_btn btns">
                                <button>Start My 15-day Trial</button>
                            </div>
                            <hr>

                            <div class="modual_plans_support">
                                <p>20 job posting</p>
                                <p>10+ featured job</p>
                                <p>Job displayed for 45 days</p>
                                <p>50+ display profile</p>
                                <p>24/7 Support</p>
                                <p>Job displayed for 45 days</p>
                                <p>24/7 Support</p>
                            </div>
                            </div>
                        </div>
                        <div class="modual_plans_inner_wrap">
                            <h5>Basic</h5>
                            <span>$139</span>
                            <p>Per user, per months</p>
                            <div class="modual_plans_btn">
                                <button>Start My 15-day Trial</button>
                            </div>
                            <hr>

                            <div class="modual_plans_support">
                                <p>20 job posting</p>
                                <p>10+ featured job</p>
                                <p>Job displayed for 45 days</p>
                                <p>50+ display profile</p>
                                <p>24/7 Support</p>
                                <p>Job displayed for 45 days</p>
                                <p>24/7 Support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
    <div class="company_wrap_section">
        <div class="container">
            <div class="swiper modual_company_wrap">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="modual_company_wrap_icon">
                            <img src="<?php bloginfo('template_directory'); ?>/image/icon1.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="modual_company_wrap_icon">
                            <img src="<?php bloginfo('template_directory'); ?>/image/icon2.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="modual_company_wrap_icon">
                            <img src="<?php bloginfo('template_directory'); ?>/image/icon3.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="modual_company_wrap_icon">
                            <img src="<?php bloginfo('template_directory'); ?>/image/icon1.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="modual_company_wrap_icon">
                            <img src="<?php bloginfo('template_directory'); ?>/image/icon4.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="client_pagination">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="modual_client_section">
        <div class="container">
            <div class="modual_client_text">
                <h1>Our Happy Clients</h1>
                <p>Many desktop publishing packages and web page editors</p>
            </div>
            <div class=<?php
/**
 * Template Name: Jobpackage
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php get_header(); ?>

<?php 
if(have_rows('jobpackage_section', get_the_ID())) { 
    // print_r(get_the_ID());
    // echo "Testing" . get_the_ID();                
    while ( have_rows('jobpackage_section', get_the_ID()) ) {
        the_row();
        get_template_part( 'mytheme/NewBLock/' . get_row_layout() );
    }
}
?>

<section>
    <div class="blog_section">
        <img src="<?php bloginfo('template_directory');?>/image/jobs.png" alt="">
        <div class="container">
            <div class="blog_wrap">
                <h1>jobPackage</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="blog_home_section">
        <div class="container">
            <span>Home / jobPackage </span>
        </div>
    </div>
</section>

<section>
    <div class="modual_plans_package_wrap">
        <div class="container">
            <div class="modual_plans_package_wrap_inner">
                <h3>Buy Our Plans And Packages</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

            <div class="modual_all_plans_wrap">
                <div class="modual_plans_inner_wrap">
                    <h5>Basic</h5>
                    <span>$14</span>
                    <p>Per user, per month</p>
                    <div class="modual_plans_btn">
                        <button>Start My 15-day Trial</button>
                    </div>
                    <hr>
                    <div class="modual_plans_support">
                        <p>20 job postings</p>
                        <p>10+ featured jobs</p>
                        <p>Job displayed for 45 days</p>
                        <p>50+ display profiles</p>
                        <p>24/7 Support</p>
                    </div>
                </div>
                <div class="modual_plans_inner_wrap">
                    <h5>Standard</h5>
                    <span>$29</span>
                    <p>Per user, per month</p>
                    <div class="modual_plans_btn btns">
                        <button>Start My 15-day Trial</button>
                    </div>
                    <hr>
                    <div class="modual_plans_support">
                        <p>20 job postings</p>
                        <p>10+ featured jobs</p>
                        <p>Job displayed for 45 days</p>
                        <p>50+ display profiles</p>
                        <p>24/7 Support</p>
                    </div>
                </div>
                <div class="modual_plans_inner_wrap">
                    <h5>Premium</h5>
                    <span>$139</span>
                    <p>Per user, per month</p>
                    <div class="modual_plans_btn">
                        <button>Start My 15-day Trial</button>
                    </div>
                    <hr>
                    <div class="modual_plans_support">
                        <p>20 job postings</p>
                        <p>10+ featured jobs</p>
                        <p>Job displayed for 45 days</p>
                        <p>50+ display profiles</p>
                        <p>24/7 Support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="company_wrap_section">
        <div class="container">
            <div class="swiper modual_company_wrap">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="modual_company_wrap_icon">
                            <img src="<?php bloginfo('template_directory'); ?>/image/icon1.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="modual_company_wrap_icon">
                            <img src="<?php bloginfo('template_directory'); ?>/image/icon2.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="modual_company_wrap_icon">
                            <img src="<?php bloginfo('template_directory'); ?>/image/icon3.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="modual_company_wrap_icon">
                            <img src="<?php bloginfo('template_directory'); ?>/image/icon1.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="modual_company_wrap_icon">
                            <img src="<?php bloginfo('template_directory'); ?>/image/icon4.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="client_pagination">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="modual_client_section">
        <div class="container">
            <div class="modual_client_text">
                <h1>Our Happy Clients</h1>
                <p>Many desktop publishing packages and web page editors</p>
            </div>
            <div class="swiper modual_client_all_content">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="modual_client_section_icon">
                            <div class="modual_client_section_content">
                                <img src="<?php bloginfo('template_directory'); ?>/image/interview_banner (3).png" alt="">
                                <div class="modual_client_section_text">
                                    <h5>Assunta Manson</h5>
                                    <span>Hiring Manager</span>
                                </div>
                            </div>
                            <p>It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.</p>
                            <div class="client_section_feedback">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="modual_client_section_icon">
                            <div class="modual_client_section_content">
                                <img src="<?php bloginfo('template_directory'); ?>/image/interview_banner (3).png" alt="">
                                <div class="modual_client_section_text">
                                    <h5>Assunta Manson</h5>
                                    <span>Hiring Manager</span>
                                </div>
                            </div>
                            <p>It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.</p>
                            <div class="client_section_feedback">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="modual_client_section_icon">
                            <div class="modual_client_section_content">
                                <img src="<?php bloginfo('template_directory'); ?>/image/interview_banner (3).png" alt="">
                                <div class="modual_client_section_text">
                                    <h5>Assunta Manson</h5>
                                    <span>Hiring Manager</span>
                                </div>
                            </div>
                            <p>It is a long established fact that reader will distracted the readable content page looking at its layout point using that has more-or-less normal distribution of letters opposed using content making.</p>
                            <div class="client_section_feedback">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="modual_client_section_icon">
                            <div class="modual_client_section_content">
                                <img src="<?php bloginfo('template_directory'); ?>/image/interview_banner (3).png" alt="">
                                <div class="modual_client_section_text">
                                    <h5>Assunta Manson</h5>
                                    <span>Hiring Manager</span>
                                </div>
                            </div>
                            <p
"swiper modual_client_all_content">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="modual_client_section_icon">
                            <div class="modual_client_section_content">
                                <img src="<?php bloginfo('template_directory'); ?>/image/interview_banner (3).png" alt="">
                                <div class="modual_client_section_text">
                                    <h5>Assunta Manson</h5>
                                    <span>Hiring Manager</span>
                                </div>
                            </div>
                            <p>It is a long established fact that reader will distracted the readable content pagelooking at its layout point using that hasmore-or-less normal distribution of letters opposed using content making.</p>
                            <div class="client_section_feedback">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="modual_client_section_icon">
                            <div class="modual_client_section_content">
                                <img src="<?php bloginfo('template_directory'); ?>/image/interview_banner (3).png" alt="">
                                <div class="modual_client_section_text">
                                    <h5>Assunta Manson</h5>
                                    <span>Hiring Manager</span>
                                </div>
                            </div>
                            <p>It is a long established fact that reader will distracted the readable content pagelooking at its layout point using that hasmore-or-less normal distribution of letters opposed using content making.</p>
                            <div class="client_section_feedback">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="modual_client_section_icon">
                            <div class="modual_client_section_content">
                                <img src="<?php bloginfo('template_directory'); ?>/image/interview_banner (3).png" alt="">
                                <div class="modual_client_section_text">
                                    <h5>Assunta Manson</h5>
                                    <span>Hiring Manager</span>
                                </div>
                            </div>
                            <p>It is a long established fact that reader will distracted the readable content pagelooking at its layout point using that hasmore-or-less normal distribution of letters opposed using content making.</p>
                            <div class="client_section_feedback">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star.png" alt="Error">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="modual_client_section_icon">
                            <div class="modual_client_section_content">
                                <img src="<?php bloginfo('template_directory'); ?>/image/interview_banner (3).png" alt="">
                                <div class="modual_client_section_text">
                                    <h5>Assunta Manson</h5>
                                    <span>Hiring Manager</span>
                                </div>
                            </div>
                            <p>It is a long established fact that reader will distracted the readable content pagelooking at its layout point using that hasmore-or-less normal distribution of letters opposed using content making.</p>
                            <div class="client_section_feedback">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star2.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star2.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star2.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star2.png" alt="Error">
                                <img src="<?php bloginfo('template_directory'); ?>/image/star2.png" alt="Error">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client_pagination">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section> -->



<?php get_footer(); ?> -->
