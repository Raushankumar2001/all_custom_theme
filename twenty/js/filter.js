(function ($) {
    "use strict";

    $(document).ready(function () {
        
        $('#location-select, #job-type-select, #experiences-select, #skill-select, #sector-select, #career-level-select, #offered-salary-select,#date-select').on('change', function(event) {
            event.preventDefault();


            var location_id = $('#location-select').val(); 
            var job_type_id = $('#job-type-select').val(); 
            var experiences_id = $('#experiences-select').val();
            var Skills_id = $('#skill-select').val();
            var Sector_id = $('#sector-select').val();
            var career_level_id = $('#career-level-select').val();
            var offered_salary_id = $('#offered-salary-select').val();
            var selected_date = $('#date-select').val(); 

            
            // console.log({
            //     location: location_id,
            //     job_type: job_type_id,
            //     experiences: experiences_id,
            //     Skills: Skills_id,
            //     Sector: Sector_id,
            //     career_level: career_level_id,
            //     offered_salary: offered_salary_id
            // });
        
            $.ajax({
                url: ajax_object.ajaxurl, 
                type: 'POST', 
                data: { 
                    action: 'filter_jobs',
                    location: location_id,
                    job_type: job_type_id,
                    experiences: experiences_id,
                    Skills: Skills_id,
                    Sector: Sector_id,
                    career_level: career_level_id,
                    offered_salary: offered_salary_id,
                    date: selected_date,
                },
                success: function(response) {
                    if (response.success) {
                        $(".v").empty(); 
                        if (Array.isArray(response.data) ) {
                            // console.log("testing",response.data);
                        // if(response.message != ''){
                            response.data.forEach(function(job) {
                                
                        
                                // Create HTML for each job
                                var jobHtml = `
                                    <div class="job">
                                        <div class="modual_right_job_wrap">
                                            <div class="job-image">
                                                <p><img src="${job.thumbnail}" alt="${job.title} Thumbnail" /></p>
                                            </div>
                                            <div class="modual_right_job_inner_wrap">
                                                <h4><a href="${job.permalink}">${job.title}</a></h4>
                                                <div class="modual_right_job_inner_wrap_icon">
                                                    ${job.location ? `
                                                        <span>
                                                            <img src="${job.location_image}" alt="Location Icon">
                                                            ${job.location}
                                                        </span>
                                                    ` : ''}
                                                    ${job.sector ? `
                                                        <span>
                                                            <img src="${job.sector_image}" alt="Sector Icon">
                                                            ${job.sector}
                                                        </span>
                                                    ` : ''}
                                                    ${job.salary ? `
                                                        <span>
                                                            <img src="${job.salary_image}" alt="Salary Icon">
                                                            ${job.salary}
                                                        </span>
                                                    ` : ''}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                `;
                                $(".v").append(jobHtml);
                            });
                        }else {
                            $(".v").html('<p>No jobs found.</p>');
                            
                        }
                        // }
                }
                
                     
                    console.log(response); 
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    $(".v").html('<p>Error loading content. Please try again.</p>');
                }
            });
        });
    });

})(jQuery);
