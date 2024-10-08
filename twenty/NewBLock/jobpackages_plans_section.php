<section>
    <?php
    $jobpackages_plans_section_wrap = get_sub_field('jobpackages_plans_section_wrap');
    $jobpackages_plans_section_main_heading = $jobpackages_plans_section_wrap['jobpackages_plans_section_main_heading'] ;
    $jobpackages_plans_section_paragraph = $jobpackages_plans_section_wrap['jobpackages_plans_section_paragraph'] ;
    $jobpackages_plans = $jobpackages_plans_section_wrap['jobpackages_plans'] ;
    ?>
    
    <div class="modual_plans_package_wrap">
        <div class="container">
            <div class="modual_plans_package_wrap_inner">
                <?php if ($jobpackages_plans_section_main_heading): ?>
                    <h3><?php echo esc_html($jobpackages_plans_section_main_heading); ?></h3>
                <?php endif; ?>
                
                <?php if ($jobpackages_plans_section_paragraph): ?>
                    <p><?php echo esc_html($jobpackages_plans_section_paragraph); ?></p>
                <?php endif; ?>
            </div>

            <div class="modual_all_plans_wrap">
                <div class="modual_plans_inner_wrap">
                    <?php if ($jobpackages_plans): ?>
                        <?php foreach ($jobpackages_plans as $index => $plan): 
                            $plans_heading = $plan['plans_heading'] ;
                            $plans_price = $plan['plans_price'] ;
                            $plans_button = $plan['plans_button'] ;
                            $plans_all_support = $plan['plans_all_support'] ; ?>
                            
                            <div class="plan_box <?php echo $index === 1 ? 'highlighted' : ''; ?>"> 
                                <?php if ($plans_heading): ?>
                                    <h5><?php echo esc_html($plans_heading); ?></h5>
                                <?php endif; ?>
                                
                                <?php if ($plans_price): ?>
                                    <span><?php echo esc_html($plans_price); ?></span>
                                <?php endif; ?>
                                
                                <p>Per user, per month</p>
                                <div class="modual_plans_btn ">
                                    <button><?php echo esc_html($plans_button); ?></button>
                                </div>
                                <hr>
                                <div class="modual_plans_support">
                                    <?php if ($plans_all_support): ?>
                                        <?php foreach ($plans_all_support as $option): 
                                            $support_option = $option['support_option'] ; ?>
                                            <?php if ($support_option): ?>
                                                <p><?php echo esc_html($support_option); ?></p>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div> 
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div> 
            </div> 
        </div> 
    </div> 
</section>
