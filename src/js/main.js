import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Swiper from "swiper";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Autoplay, Navigation, Pagination } from "swiper/modules"; // Include Autoplay module
import "../scss/styles.scss";

// configure Swiper to use modules
const testiSwiper = new Swiper("#testimonials .swiper", {
  modules: [Navigation, Pagination, Autoplay],
  centeredSlides: true, // Center the active slide
  slidesPerView: "auto", // Allow CSS to define the width
  spaceBetween: 20,
  loop: true,
  breakpoints: {
    640: {
      centeredSlides: false,
      slidesPerView: "auto",
    },
    1024: {
      centeredSlides: false,
      slidesPerView: "auto",
    },
  },

  navigation: {
    nextEl: "#testimonials .next",
    prevEl: "#testimonials .prev",
  },
  pagination: {
    el: "#testimonials .swiper-pagination",
    clickable: true,
  },
});


// more-case-studies
const moreCaseStudiesSwiper = new Swiper(".more-case-studies .swiper", {
  modules: [Navigation, Pagination, Autoplay],
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
  },
  slidesPerView: "auto",
  spaceBetween: 20,
  loop: true,
  navigation: {
    nextEl: ".more-case-studies .next",
    prevEl: ".more-case-studies .prev",
  },
});

document.addEventListener("DOMContentLoaded", () => {
  const accordionItems = document.querySelectorAll(".faq-accordion__item");

  accordionItems.forEach((item) => {
    const header = item.querySelector(".faq-accordion__header");
    const body = item.querySelector(".faq-accordion__body");

    header.addEventListener("click", () => {
      // Close any currently active accordion item
      const activeItem = document.querySelector(".faq-accordion__item.active");
      if (activeItem && activeItem !== item) {
        activeItem.classList.remove("active");
        activeItem.querySelector(".faq-accordion__body").style.maxHeight = null;
      }

      // Toggle the clicked accordion item
      if (item.classList.contains("active")) {
        item.classList.remove("active");
        body.style.maxHeight = null; // Collapse
      } else {
        item.classList.add("active");
        body.style.maxHeight = body.scrollHeight + "px"; // Expand
      }
    });
  });
});

$(document).ready(function () {
  $(".youtube-popup").magnificPopup({
    type: "iframe",
    iframe: {
      patterns: {
        youtube: {
          index: "youtube.com/",
          id: function (url) {
            var match = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
            return match && match[1] ? match[1] : null;
          },
          src: "https://www.youtube.com/embed/%id%?autoplay=1&mute=1&rel=0&showinfo=0",
        },
      },
    },
  });

  // Ensure link doesn't navigate
  $(".youtube-popup").on("click", function (e) {
    e.preventDefault();
    console.log("Clicked");
  });
});

// Mobile Menu
const burgerMenu = document.querySelector(".burger-menu"); // Burger menu button
const mobileMenu = document.querySelector("#mobile-menu"); // Mobile menu container
const closeMenu = document.querySelector(".close-menu"); // Close menu button

// GSAP initial state for the mobile menu
gsap.set(mobileMenu, { x: "100%", opacity: 0, pointerEvents: "none" });

// Open menu
burgerMenu.addEventListener("click", () => {
  if (!mobileMenu.classList.contains("open")) {
    mobileMenu.classList.add("open"); // Add the open class
    gsap.to(mobileMenu, {
      x: 0,
      opacity: 1,
      pointerEvents: "auto",
      duration: 0.5,
      ease: "power4.out",
    });

    // mobile-menu-nav ul li a stagger animation
    gsap.fromTo(
      mobileMenu.querySelectorAll(".mobile-menu-nav ul li a"),
      {
        opacity: 0,
        y: 20,
      },
      {
        opacity: 1,
        y: 0,
        duration: 0.5,
        ease: "power4.out",
        stagger: 0.1,
        delay: 0.3,
      }
    );
  }
});

// Close menu
closeMenu.addEventListener("click", () => {
  if (mobileMenu.classList.contains("open")) {
    mobileMenu.classList.remove("open"); // Remove the open class
    gsap.to(mobileMenu, {
      x: "100%",
      opacity: 0,
      pointerEvents: "none",
      duration: 0.5,
      ease: "power4.in",
    });
  }
});

// $(window).on("load", function () {
//   // Wait for 2 seconds, then trigger the animation
//   setTimeout(() => {
//     // Ensure main content stays hidden during the preloader
//     $("#main-content").addClass("hidden");

//     // Use GSAP timeline for the preloader animation
//     const timeline = gsap.timeline({
//       onComplete: () => {
//         // Smoothly fade in the main content after preloader animation completes
//         gsap.to("#main-content", {
//           opacity: 1, // Set opacity to fully visible
//           duration: 1, // Smooth fade-in duration
//           ease: "power2.out", // Smooth easing
//           onStart: () => $("#main-content").removeClass("hidden"), // Remove hidden class at the start of the fade-in
//         });
//         $("#loading").remove(); // Remove the preloader from the DOM
//       },
//     });

//     // Rolling gradient effect (one cycle)
//     timeline.to("#loading", {
//       background: "linear-gradient(180deg, #13161DDB 20%, #d16eff 100%)",
//       backgroundSize: "200% 100%", // Make the gradient scrollable
//       duration: 1.8, // Duration for the rolling effect
//       ease: "power1.in",
//     });

//     // Fade-out effect (immediately after rolling effect)
//     timeline.to("#loading", {
//       opacity: 0, // Fade out the preloader
//       duration: 0.5, // Smooth fade-out duration
//       ease: "power1.out", // Smooth easing
//     });

//     // cursor opacity 1
//     timeline.to(".cursor", {
//       opacity: 1,
//       duration: 0.5,
//       ease: "power1.out",
//     });
//   }, 300); // Delay for 1 second
// });

gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", () => {
  const cursor = document.querySelector(".cursor"); // Ensure you have a cursor element in your HTML

  // Check if the cursor element exists
  if (!cursor) {
    console.error("Cursor element not found in the HTML");
    return;
  }

  // Initial position of the cursor
  let posX = window.innerWidth / 2;
  let posY = window.innerHeight / 2;

  // Target position of the cursor
  let mouseX = posX;
  let mouseY = posY;

  // Speed factor for the smoothness
  const speed = 1; // Lower value for smoother, slower movement

  // Update the target position on mouse move
  document.addEventListener("mousemove", (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
  });

  // Animate the cursor to smoothly follow the target position
  function animate() {
    posX += (mouseX - posX) * speed;
    posY += (mouseY - posY) * speed;

    gsap.set(cursor, {
      x: posX,
      y: posY,
    });

    requestAnimationFrame(animate);
  }

  animate();

  // Enlarge cursor when hovering over anchor tags or buttons
  const interactiveElements = document.querySelectorAll(
    "a, button, img, .service-item, .cards .card-item"
  );

  interactiveElements.forEach((element) => {
    element.addEventListener("mouseenter", () => {
      gsap.to(cursor, {
        scale: 2,
        duration: 0.3,
        backgroundColor: "#f39c12", // Optional: Change cursor color
        ease: "power1.out",
        zIndex: -1,
      });
    });

    element.addEventListener("mouseleave", () => {
      gsap.to(cursor, {
        scale: 1,
        duration: 0.3,
        backgroundColor: "#000", // Reset cursor color
        ease: "power1.out",
        zIndex: 0,
      });
    });
  });

  // Services Timeline Animation
  const serviceWrapper = document.querySelector(".service-item-wrapper");
  const serviceItems = document.querySelectorAll(".service-item");

  if (serviceWrapper && serviceItems.length > 0) {
    const firstItem = serviceItems[0];
    const lastItem = serviceItems[serviceItems.length - 1];

    // Simplify tracking to cover full wrapper height
    const dotOffset = 0;

    // 1. Progress Line & Dot Sync (Single Source of Truth)
    const updateActiveState = (index) => {
      serviceItems.forEach((item, idx) => {
        item.classList.remove("active", "completed");
        if (idx < index) {
          item.classList.add("completed");
        } else if (idx === index) {
          item.classList.add("active");
        }
      });
    };

    gsap.to(serviceWrapper, {
      scrollTrigger: {
        trigger: serviceWrapper,
        // Start when the top of the container hits 70% viewport
        start: `top 70%`,
        // End when the bottom hits 70% viewport
        end: `bottom 70%`,
        scrub: true,
        onUpdate: (self) => {
          // 1. Update progress variable (0 to 100)
          serviceWrapper.style.setProperty('--progress', `${self.progress * 100}`);

          // 2. Determine active dot based on literal viewport position
          let activeIndex = -1;
          const triggerPoint = window.innerHeight * 0.7;

          serviceItems.forEach((item, idx) => {
            const dotRect = item.getBoundingClientRect();
            // The dot center is at top of card + its CSS offset
            const dotCenter = dotRect.top + dotOffset;

            if (dotCenter <= triggerPoint + 1) {
              activeIndex = idx;
            }
          });

          updateActiveState(activeIndex);
        },
      },
    });
  }
});


jQuery(document).ready(function ($) {
  // Event listener for filter buttons
  $(".filter button").on("click", function () {
    // Remove active class from all buttons and add it to the clicked button
    $(".filter button").removeClass("active");
    $(this).addClass("active");

    // Get the category slug from the clicked button
    const category = $(this).data("filter");

    // Send AJAX request
    $.ajax({
      url: scaletopia_ajax_object.ajax_url, // AJAX URL from wp_localize_script
      type: "POST",
      data: {
        action: "filter_case_studies",
        category: category.replace(".", ""), // Remove the dot from the slug
        nonce: scaletopia_ajax_object.nonce,
      },
      beforeSend: function () {
        // Optional: Add a loading indicator (if needed)
        $(".case-studies-wrapper").html(
          "<p class='text-center'>Loading...</p>"
        );
      },
      success: function (response) {
        console.log(response);
        if (response.success) {
          // Update the case studies wrapper with new content
          $(".case-studies-wrapper").html(response.data.html);
        } else {
          console.error(response.message);
        }
      },
      error: function (xhr, status, error) {
        console.error("AJAX Error:", error);
      },
    });
  });
});

$(document).ready(function () {
  // Open modal on form submit
  $("#roi-form").submit(function (e) {
    e.preventDefault();

    // Get form values
    const packageValue = parseInt(
      $(".options button.selected").text().replace("$", "").trim()
    );
    const closingRate = parseFloat($("#closing-rate").val()) / 100; // Convert percentage to decimal
    const retainerFee = parseFloat($("#retainer-fee").val()); // Retainer fee input
    const months = parseInt($("#month").val()); // Selected months (3 or 6)

    let upperValue = 0;
    let lowerValue = 0;

    // Determine Upper side and Lower side values based on Monthly Package
    if (packageValue === 3200) {
      upperValue = 12;
      lowerValue = 10;
    } else if (packageValue === 4000) {
      upperValue = 15;
      lowerValue = 12;
    } else if (packageValue === 5000) {
      upperValue = 25;
      lowerValue = 20;
    } else if (packageValue === 6000) {
      upperValue = 35;
      lowerValue = 25;
    }

    // Calculate Expected Deals Closed Per Month
    const upperExpectedDeals = (closingRate * upperValue).toFixed(2);
    const lowerExpectedDeals = (closingRate * lowerValue).toFixed(2);

    // Calculate Retainer Revenue
    const upperRetainerRevenue = (retainerFee * upperExpectedDeals).toFixed(2);
    const lowerRetainerRevenue = (retainerFee * lowerExpectedDeals).toFixed(2);

    // Calculate Cost Per Acquisition (CPA)
    const upperCPA = (upperRetainerRevenue / upperExpectedDeals).toFixed(2);
    const lowerCPA = (lowerRetainerRevenue / lowerExpectedDeals).toFixed(2);

    // Calculate ROI (3 Months/6 Months)
    const upperROI = (upperRetainerRevenue * months).toFixed(2);
    const lowerROI = (lowerRetainerRevenue * months).toFixed(2);

    // Calculate ROI % (3 Months/6 Months)
    const upperROIPercentage = (upperROI / packageValue).toFixed(2);
    const lowerROIPercentage = (lowerROI / packageValue).toFixed(2);

    // Populate modal dynamically with calculated values
    const outputHTML = `
      <tr><td>Meetings Per Month</td><td>${upperValue}</td><td>${lowerValue}</td></tr>
      <tr><td>Expected Deals Closed Per Month</td><td>${upperExpectedDeals}</td><td>${lowerExpectedDeals}</td></tr>
      <tr><td>Retainer Revenue</td><td>$${upperRetainerRevenue}</td><td>$${lowerRetainerRevenue}</td></tr>
      <tr><td>Cost Per Acquisition (CPA)</td><td>$${upperCPA}</td><td>$${lowerCPA}</td></tr>
      <tr><td>ROI (3 Months/6 Months)</td><td>$${upperROI}</td><td>$${lowerROI}</td></tr>
      <tr><td>ROI % (3 Months/6 Months)</td><td>${upperROIPercentage}%</td><td>${lowerROIPercentage}%</td></tr>
    `;

    $("#output-data").html(outputHTML);

    // Show modal and disable scrolling
    $("#modal").fadeIn();
    $("body").css("overflow", "hidden"); // Stop scrolling when modal opens
  });

  // Close modal
  $("#close-modal").click(function () {
    $("#modal").fadeOut();
    $("body").css("overflow", "auto"); // Enable scrolling when modal closes
  });

  // Close modal on outside click
  $(window).click(function (event) {
    if ($(event.target).is("#modal")) {
      $("#modal").fadeOut();
      $("body").css("overflow", "auto"); // Enable scrolling when modal closes
    }
  });

  // Button selection logic for the package
  $(".options button").click(function () {
    $(".options button").removeClass("selected");
    $(this).addClass("selected");
  });
});
