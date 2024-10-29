<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package housmanSEO
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <style>
    .mySlides {
      position: absolute;
      opacity: 0;
      transform: translateX(100%);
      transition: transform 0.8s ease-in-out, opacity 0.4s ease-in-out;
      width: 100%;
      /* Ensure full width */
      height: 100%;
      /* Ensure full height */
      top: 0;
      /* Position at the top */
      left: 0;
      /* Position at the left */
      z-index: 1;
      /* Ensure it sits on top of the previous slide */
      background-color: black;
      /* Set a background color to avoid white */
    }

    .mySlides img {
      height: 100%;
      width: 100%;
      object-fit: cover;
      /* Maintain the cover behaviour */
    }

    .mySlides.active {
      opacity: 1;
      transform: translateX(0);
    }

    .mySlides.exit {
      transform: translateX(-100%);
      transition-delay: 1s;
    }

    .slideshow-container {
      position: relative;
      max-width: 100%;
      height: 100vh;
      overflow: hidden;
      background-color: black;
      /* Set background color for the slideshow */
    }

    .text-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(0, 0, 0, 0.5);
      padding: 10px 20px;
      color: white;
      text-align: center;
      font-size: 1.5rem;
      z-index: 2;
      /* Ensure text is above the slides */
    }
  </style>


  <section class="section_splash">

    <div class="relative w-full h-[600px] overflow-hidden max-w-4xl mx-auto slideshow-container">
      <div class="mySlides active">
        <img src="https://images.pexels.com/photos/87651/earth-blue-planet-globe-planet-87651.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Earth" class="w-full h-full object-cover">
        <div class="text-container">French Alps</div>
      </div>

      <div class="mySlides">
        <img src="https://images.pexels.com/photos/886521/pexels-photo-886521.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Northern Lights" class="w-full h-full object-cover">
        <div class="text-container">Northern Lights</div>
      </div>

      <div class="mySlides">
        <img src="https://images.pexels.com/photos/325944/pexels-photo-325944.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Mountains" class="w-full h-full object-cover">
        <div class="text-container">Beautiful Mountains</div>
      </div>

      <!-- Navigation Arrows -->
      <button class="left-8 absolute top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-white border-none p-2 z-30" onclick="plusSlides(-1)">&#10094;</button>
      <button class="right-8 absolute top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-white border-none p-2 z-30" onclick="plusSlides(1)">&#10095;</button>
    </div>

    <script>
      let slideIndex = 0;
      const slides = document.querySelectorAll('.mySlides');

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function showSlides(n) {
        if (n >= slides.length) {
          slideIndex = 0;
        }
        if (n < 0) {
          slideIndex = slides.length - 1;
        }

        slides.forEach((slide, i) => {
          slide.classList.remove('active', 'exit');

          if (i === slideIndex) {
            slide.classList.add('active');
          } else if (slide.classList.contains('active')) {
            slide.classList.add('exit');
          }
        });
      }

      setInterval(() => {
        plusSlides(1);
      }, 15000);
    </script>

  </section>


  <section class="section_one bg-yellow-500 min-h-[80vh]">

  </section>

  <section class="section_two bg-red-500 min-h-[80vh]">

  </section>
  <section class="section_three bg-blue-500 min-h-[80vh]">

  </section>

  <section class="section_four bg-indigo-600 min-h-[80vh]">

  </section>

</article>