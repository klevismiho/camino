<?php

function camino_statistics($attributes) {

    $posts = get_posts(array(
        'posts_per_page' => 3,
        'post_type' => 'statistics'
    ));

	$content = '
    <section class="section-statistics">
        <div class="container">
            <div class="first item">
                <h2>' . $attributes['title'] . '</h2>
                <p>' . $attributes['content'] . '</p>
                <a href="' . $attributes['link'] . '" target="_blank" class="dark secondary button with-icon" aria-label="Find out more about Camino by the Numbers">' . $attributes['linklabel'] . '</a>
            </div>
            <div class="item" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($posts[0]) ) . ');">
                <div class="item-content">
                    <div class="number">+<span id="number-1" data-number="' . get_field( 'statistics_number', $posts[0]) . '">1</span></div>
                    <h3>' . get_the_title($posts[0]) . '</h3>
                </div>
            </div>
            <div class="item" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($posts[1]) ) . ');">
                <div class="item-content">
                    <div class="number">+<span id="number-2" data-number="' . get_field( 'statistics_number', $posts[1]) . '">1</span></div>
                    <h3>' . get_the_title($posts[1]) . '</h3>
                </div>
            </div>
            <div class="item" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($posts[2]) ) . ');">
                <div class="item-content">
                    <div class="item-content">
                        <div class="number">+<span id="number-3"  data-number="' . get_field( 'statistics_number', $posts[2]) . '">1</span></div>
                        <h3>' . get_the_title($posts[2]) . '</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>';

    $content .= '<script>

    function breakpoint(size, callback) {
        var smallSize = 800; // Set your small size value here
      
        if (size === "small-only") {
          if (window.matchMedia("(max-width: " + smallSize + "px)").matches) {
            callback();
          }
        } else if (size === "small") {
          if (window.matchMedia("(min-width: " + smallSize + "px)").matches) {
            callback();
          }
        }
      }
      
    function animateNumber(element, duration) {
        var startNumber = parseInt(element.innerText);
        var endNumber = parseInt(element.dataset.number);
        var range = endNumber - startNumber;
        var currentNumber = startNumber;
        var increment = Math.ceil(range / (duration / 16)); // 16ms is roughly equivalent to 1 frame in 60 fps animation
      
        var timer = setInterval(function() {
          currentNumber += increment;
      
          if (currentNumber >= endNumber) {
            clearInterval(timer);
            currentNumber = endNumber;
          }
      
          element.innerText = currentNumber;
        }, 16);
      }

      breakpoint("small", function() {
        var section = document.querySelector("section.section-statistics");
        var items = section.querySelectorAll(".item");
        items.forEach(function(item) {
          var element = item.querySelector("[data-number]");
          var duration = 1000;
          var interval;
      
          item.addEventListener("mouseenter", function() {
            animateNumber(element, duration);
            interval = setInterval(function() {
              animateNumber(element, duration);
            }, duration);
          });
      
          item.addEventListener("mouseleave", function() {
            clearInterval(interval);
            element.innerText = parseInt(element.dataset.number);
          });
        });
      });
      
      
      breakpoint("small-only", function() {
        var section = document.querySelector("section.section-statistics");
        var items = section.querySelectorAll(".item");
        items.forEach(function(item) {
          var element = item.querySelector("[data-number]");
          if (element) {
            var elementValue = element.getAttribute("data-number");
            element.innerText = elementValue;
          }
        });
      });
    </script>';

	return $content;
}