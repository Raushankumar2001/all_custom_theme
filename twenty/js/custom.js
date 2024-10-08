(function ($) {
    "use strict";

    $(document).ready(function () {    
        let $loadBtn = $('#loads').data('page', 1); // Set initial page number
        
        if ($loadBtn.length > 0) {
            $loadBtn.click(function() {
                var page = $loadBtn.data('page'); // Get current page number
                
                // AJAX request
                $.ajax({
                    url: ajax_object.ajaxurl, 
                    type: 'POST', 
                    data: { 
                        action: 'load_more_posts', // Correct action name
                        page: page,
                    },
                    success: function(response) {
                        if (response.success) {
                            var posts = response.data; // Access posts array
                            var output = '';
                            
                            // Iterate through each post and build the output string
                            posts.forEach(function(post) {
                                output += '<h2>' + post.title + '</h2>'; 
                                output += '<p>' + post.excerpt + '</p>'; 
                                output += '<a>' + post.link + '</a>'; 
                            });
                            
                            $('#post-container').append(output);
                            $loadBtn.data('page', page + 1); // Increment the page number
                        } else {
                            $loadBtn.remove(); // Remove button if no more posts
                        }
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', status, error);
                        $('#content').html('<p>Error loading content. Please try again.</p>');
                    }
                });
            });
        }

        // Prevent form default submission behavior
        $('#myForm').on('change', function() {
            if ($(this).val() === '') {
                return; 
            }
            var selectedValue = $(this).val();
            $('#content').html('You selected: ' + selectedValue);
        });      
        console.log("testing");
    });

})(jQuery);
