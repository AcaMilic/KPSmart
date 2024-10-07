
// One

document.addEventListener('DOMContentLoaded', function() {
    var menuButton = document.getElementById('menuButton');
    var popupMenu = document.getElementById('popupMenu');

    // Toggle the popup menu on button click
    menuButton.addEventListener('click', function() {
        var isMenuVisible = popupMenu.style.display === 'block';
        popupMenu.style.display = isMenuVisible ? 'none' : 'block';
    });

    // Hide the popup menu when clicking outside of it
    document.addEventListener('click', function(event) {
        if (!popupMenu.contains(event.target) && !menuButton.contains(event.target)) {
            popupMenu.style.display = 'none';
        }
    });
});

// Two

document.addEventListener('DOMContentLoaded', function() {
    var menuButton = document.getElementById('menuButtontwo');
    var popupMenu = document.getElementById('popupMenutwo');

    // Toggle the popup menu on button click
    menuButton.addEventListener('click', function() {
        var isMenuVisible = popupMenu.style.display === 'block';
        popupMenu.style.display = isMenuVisible ? 'none' : 'block';
    });

    // Hide the popup menu when clicking outside of it
    document.addEventListener('click', function(event) {
        if (!popupMenu.contains(event.target) && !menuButton.contains(event.target)) {
            popupMenu.style.display = 'none';
        }
    });
});
// Three

document.addEventListener('DOMContentLoaded', function() {
    var menuButton = document.getElementById('menuButtonthree');
    var popupMenu = document.getElementById('popupMenuthree');

    // Toggle the popup menu on button click
    menuButton.addEventListener('click', function() {
        var isMenuVisible = popupMenu.style.display === 'block';
        popupMenu.style.display = isMenuVisible ? 'none' : 'block';
    });

    // Hide the popup menu when clicking outside of it
    document.addEventListener('click', function(event) {
        if (!popupMenu.contains(event.target) && !menuButton.contains(event.target)) {
            popupMenu.style.display = 'none';
        }
    });
});

// Four

// document.addEventListener('DOMContentLoaded', function() {
//     var menuButton = document.getElementById('menuButtonfour');
//     var popupMenu = document.getElementById('popupMenufour');

//     // Toggle the popup menu on button click
//     menuButton.addEventListener('click', function() {
//         var isMenuVisible = popupMenu.style.display === 'block';
//         popupMenu.style.display = isMenuVisible ? 'none' : 'block';
//     });

//     // Hide the popup menu when clicking outside of it
//     document.addEventListener('click', function(event) {
//         if (!popupMenu.contains(event.target) && !menuButton.contains(event.target)) {
//             popupMenu.style.display = 'none';
//         }
//     });
// });

// // Five

// document.addEventListener('DOMContentLoaded', function() {
//     var menuButton = document.getElementById('menuButtonfive');
//     var popupMenu = document.getElementById('popupMenufive');

//     // Toggle the popup menu on button click
//     menuButton.addEventListener('click', function() {
//         var isMenuVisible = popupMenu.style.display === 'block';
//         popupMenu.style.display = isMenuVisible ? 'none' : 'block';
//     });

//     // Hide the popup menu when clicking outside of it
//     document.addEventListener('click', function(event) {
//         if (!popupMenu.contains(event.target) && !menuButton.contains(event.target)) {
//             popupMenu.style.display = 'none';
//         }
//     });
// });
// // Six

// document.addEventListener('DOMContentLoaded', function() {
//     var menuButton = document.getElementById('menuButtonsix');
//     var popupMenu = document.getElementById('popupMenusix');

//     // Toggle the popup menu on button click
//     menuButton.addEventListener('click', function() {
//         var isMenuVisible = popupMenu.style.display === 'block';
//         popupMenu.style.display = isMenuVisible ? 'none' : 'block';
//     });

//     // Hide the popup menu when clicking outside of it
//     document.addEventListener('click', function(event) {
//         if (!popupMenu.contains(event.target) && !menuButton.contains(event.target)) {
//             popupMenu.style.display = 'none';
//         }
//     });
// });


// Hide arrow from header on scroll
$(document).ready(function () {
    $(window).scroll(function () {
      var opacityValue = $(this).scrollTop() > 0 ? "0" : "1";
      $(".hide_on_scroll").css({ opacity: opacityValue });
    });
  });
  



document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.querySelector('.navbar-toggler');
    const menuIcon = document.getElementById('menuIcon');
  
    menuButton.addEventListener('click', function () {
      if (menuIcon.classList.contains('fa-bars')) {
        menuIcon.classList.remove('fa-bars');
        menuIcon.classList.add('fa-times'); // Font Awesome X icon
      } else {
        menuIcon.classList.remove('fa-times');
        menuIcon.classList.add('fa-bars'); // Font Awesome Hamburger icon
      }
    });
  });


// Hide arrow from header on scroll
$(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 0) {
        $(".hide_on_scroll").css({
          opacity: "0"
        });
      } else {
        $(".hide_on_scroll").css({
          opacity: "1"
        });
      }
    });
  });
  
  document.addEventListener('DOMContentLoaded', function() {
    const listItems = document.querySelectorAll('.image-list li');
    const mainImage = document.getElementById('mainImage');

    // Function to set an item as active
    function setActiveItem(item) {
        listItems.forEach(li => li.classList.remove('active'));
        item.classList.add('active');
        const newImageSrc = item.getAttribute('data-image');
        mainImage.src = newImageSrc;
    }

    // Set the first item as active on page load
    if (listItems.length > 0) {
        setActiveItem(listItems[0]);
    }

    // Add click event listeners to each list item
    listItems.forEach(item => {
        item.addEventListener('click', function() {
            setActiveItem(this);
        });
    });
});

// testimonials


// document.addEventListener('DOMContentLoaded', () => {
//   const slides = document.querySelector('.slides');
//   const slideCount = document.querySelectorAll('.slide').length;
//   let currentIndex = 0;

//   function showSlide(index) {
//       // Ensure the index is within bounds
//       if (index < 0) index = slideCount - 1;
//       if (index >= slideCount) index = 0;

//       currentIndex = index;
//       const offset = -currentIndex * 100;
//       slides.style.transform = `translateX(${offset}%)`;
//   }

//   document.querySelector('.left-arrow').addEventListener('click', () => {
//       showSlide(currentIndex - 1);
//   });

//   document.querySelector('.right-arrow').addEventListener('click', () => {
//       showSlide(currentIndex + 1);
//   });

//   // Show the first slide initially
//   showSlide(currentIndex);
// });


// // contact form


$("#sendForm").click(function (e) {
    e.preventDefault();
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
    if (name == '') {
      $("#name").addClass('error');
    } else {
      $("#name").removeClass('error');
    }
    if (message == '') {
      $("#message").addClass('error');
    } else {
      $("#message").removeClass('error');
    }
    if (email == '') {
      $("#email").addClass('error');
    } else {
      $("#email").removeClass('error');
    }
  
    if (email != '' && name != '' && message != '') {
      $.ajax({
          method: "POST",
          url: "./form/sendemail.php",
          data: {
            email: email,
            name: name,
            message: message
          }
        })
        .done(function (msg) {
          console.log("Forma poslata!");
          $("#success").show();
        });
    }
  });

  // Accordion

  $(document).ready(function() {
    $(".accordion-header").on("click", function() {
        // Toggle the corresponding accordion content
        var $content = $(this).next(".accordion-content");
        $(".accordion-content").not($content).slideUp(300); // Slide up other sections
        $content.slideToggle(300); // Slide toggle current section

        // Toggle rotation for the icon
        $(this).find("i").toggleClass("rotate");

        // Remove rotation from icons in other sections
        $(".accordion-header").not($(this)).find("i").removeClass("rotate");
    });
});