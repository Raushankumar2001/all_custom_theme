
// navbar 
document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav');

    // hamburger.addEventListener('click', function () {
    //     navMenu.classList.toggle('active');
    // });
});

// random image autoplay 


const progressCircle = document.querySelector(".autoplay-progress svg");
const progressContent = document.querySelector(".autoplay-progress span");
var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  on: {
    autoplayTimeLeft(s, time, progress) {
      progressCircle.style.setProperty("--progress", 1 - progress);
      progressContent.textContent = `${Math.ceil(time / 1000)}s`;
    }
  }
});


// company icon 

var swiper = new Swiper(".modual_company_wrap", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {

        768: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 50,
        },
    },
});


// client section 

        var swiper = new Swiper(".modual_client_all_content", {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {

                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });



    document.addEventListener('DOMContentLoaded', function() {
        const headers = document.querySelectorAll('.accordion-header');

        headers.forEach(header => {
            header.addEventListener('click', function() {
                const body = this.nextElementSibling;
                const arrow = this.querySelector('.arrow');

                if (body.style.display === 'none' || body.style.display === '') {
                    body.style.display = 'block';
                    arrow.textContent = '−'; // Change to minus sign
                    this.classList.add('active'); // Add active class for rotation
                } else {
                    body.style.display = 'none';
                    arrow.textContent = '+'; // Change to plus sign
                    this.classList.remove('active'); // Remove active class for rotation
                }
            });
        });
        
      
    });


   
 

    document.querySelectorAll('.star-rating').forEach(function(rating) {
        rating.addEventListener('click', function(e) {
            if (e.target.classList.contains('star')) {
                const stars = rating.querySelectorAll('.star');
                const selectedValue = e.target.getAttribute('data-value');
    
                stars.forEach(function(star, index) {
                    star.innerHTML = index < selectedValue ? '&#9733;' : '&#9734;'; // Full or empty star
                });
    
                const ratingResult = rating.nextElementSibling;
                ratingResult.innerHTML = `Rating: ${selectedValue}`; // Show selected rating
                ratingResult.style.display = 'block'; // Display the result
            }
        });
    });



        
       
    
   

    
    document.querySelectorAll('select').forEach(function(select) {
        select.addEventListener('change', function() {
            // this.form.submit();
        });
    });
