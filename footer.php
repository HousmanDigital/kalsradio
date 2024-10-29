<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package housmanSEO
 */

?>


<footer class="bg-gray-100 text-white py-8">
  <div class="container mx-auto px-16">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

      <!-- Column 1 -->
      <div>
        <h3 class="text-lg font-semibold mb-4">Company</h3>
        <ul>
          <li><a href="#" class="hover:underline hover:text-white text-gray-200 visited:text-gray-200">About Us</a></li>
          <li><a href="#" class="hover:underline hover:text-white text-gray-200 visited:text-gray-200">Careers</a></li>
          <li><a href="#" class="hover:underline hover:text-white text-gray-200 visited:text-gray-200">Press</a></li>
          <li><a href="#" class="hover:underline hover:text-white text-gray-200 visited:text-gray-200">Blog</a></li>
        </ul>
      </div>

      <!-- Column 2 -->
      <div>
        <h3 class="text-lg font-semibold mb-4">Support</h3>
        <ul>
          <li><a href="#" class="hover:underline hover:text-white text-gray-200 visited:text-gray-200">Help Center</a></li>
          <li><a href="#" class="hover:underline hover:text-white text-gray-200 visited:text-gray-200">Contact Us</a></li>
          <li><a href="#" class="hover:underline hover:text-white text-gray-200 visited:text-gray-200">FAQs</a></li>
          <li><a href="#" class="hover:underline hover:text-white text-gray-200 visited:text-gray-200">Live Chat</a></li>
        </ul>
      </div>

      <!-- Column 3 -->
      <div>
        <h3 class="text-lg font-semibold mb-4">Services</h3>
        <ul>
          <li><a href="#" class="hover:underline hover:text-white text-gray-200 visited:text-gray-200">Consulting</a></li>
          <li><a href="#" class="hover:underline hover:text-white text-gray-200 visited:text-gray-200">Development</a></li>
          <li><a href="#" class="hover:underline hover:text-white text-gray-200 visited:text-gray-200">Design</a></li>
          <li><a href="#" class="hover:underline hover:text-white text-gray-200 visited:text-gray-200">Marketing</a></li>
        </ul>
      </div>

      <!-- Column 4 -->
      <div>
        <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
        <ul>
          <li><a href="#" class="hover:underline hover:text-white text-gray-200 visited:text-gray-200">Facebook</a></li>
          <li><a href="#" class="hover:underline hover:text-white text-gray-200 visited:text-gray-200">Twitter</a></li>
          <li><a href="#" class="hover:underline hover:text-white text-gray-200 visited:text-gray-200">Instagram</a></li>
          <li><a href="#" class="hover:underline hover:text-white text-gray-200 visited:text-gray-200">LinkedIn</a></li>
        </ul>
      </div>

    </div>

    <div class="mt-8">
      <ul class="flex justify-between items-center">
        <li>
          <p class="text-sm text-gray-400">&copy; 2024 Your Company. All rights reserved.</p>
        </li>
        <li>
          <a href="https://housman.digital/" class="text-sm hover:underline hover:text-white text-gray-400 visited:text-gray-400">
            Created by Housman.Digital
          </a>
        </li>
      </ul>
    </div>

  </div>
</footer>
</div><!-- #page -->



<?php wp_footer(); ?>

</body>

</html>