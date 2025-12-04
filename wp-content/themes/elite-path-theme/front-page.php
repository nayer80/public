<?php
/* Template Name: Front Page - Rayna Tours Style */
get_header(); ?>

  <!-- HERO BANNER WITH SEARCH -->
  <section class="hero hero-full" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg');">
    <div class="hero-overlay"></div>
    <div class="container hero-inner">
      <div class="hero-left">
        <h1>Travel Curated For You</h1>
        <p>Handcrafted itineraries, local experts, and unforgettable experiences — explore with Elite Path.</p>
        <a class="btn btn-ghost" href="#book">Learn More</a>
      </div>

      <div class="hero-search" id="book">
        <form class="search-form" action="<?php echo esc_url(home_url('/activities/')); ?>" method="get">
          <div class="field"><label>Destination</label><input type="text" name="destination" placeholder="Where do you want to go?"></div>
          <div class="field"><label>Check-in</label><input type="date" name="checkin"></div>
          <div class="field"><label>Guests</label><select name="guests"><option>1</option><option>2</option><option>3</option><option>4</option><option>5+</option></select></div>
          <div class="field field-submit"><button class="btn btn-primary" type="submit">Search Tours</button></div>
        </form>
      </div>
    </div>
  </section>

  <!-- CATEGORY FILTER -->
  <section class="section category-filter">
    <div class="container">
      <div class="category-buttons">
        <a href="<?php echo esc_url(home_url('/activities/')); ?>" class="category-btn">
          <span class="category-icon">📍</span>
          <span class="category-label">Activities</span>
        </a>
        <a href="<?php echo esc_url(home_url('/holidays/')); ?>" class="category-btn">
          <span class="category-icon">🏖️</span>
          <span class="category-label">Holidays</span>
        </a>
        <a href="<?php echo esc_url(home_url('/visas/')); ?>" class="category-btn">
          <span class="category-icon">🛂</span>
          <span class="category-label">Visas</span>
        </a>
        <a href="<?php echo esc_url(home_url('/cruises/')); ?>" class="category-btn">
          <span class="category-icon">🚢</span>
          <span class="category-label">Cruises</span>
        </a>
      </div>
    </div>
  </section>

  <!-- BEST CITIES TO VISIT -->
  <section class="section best-cities">
    <div class="container">
      <h2>Best Cities to Visit</h2>
      <div class="cities-grid">
        <div class="city-card">
          <a href="<?php echo esc_url(home_url('/activities/?city=dubai')); ?>">
            <h3>Things to do in Dubai</h3>
            <p>United Arab Emirates</p>
          </a>
        </div>
        <div class="city-card">
          <a href="<?php echo esc_url(home_url('/activities/?city=abu-dhabi')); ?>">
            <h3>Things to do in Abu Dhabi</h3>
            <p>United Arab Emirates</p>
          </a>
        </div>
        <div class="city-card">
          <a href="<?php echo esc_url(home_url('/activities/?city=ras-al-khaimah')); ?>">
            <h3>Things to do in Ras al Khaimah</h3>
            <p>United Arab Emirates</p>
          </a>
        </div>
        <div class="city-card">
          <a href="<?php echo esc_url(home_url('/activities/?city=singapore')); ?>">
            <h3>Things to do in Singapore</h3>
            <p>Singapore</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- BEST ACTIVITIES IN DUBAI -->
  <section class="section best-activities dubai-activities">
    <div class="container">
      <h2>Best Activities in Dubai</h2>
      <div class="activities-grid">
        <!-- Activity Card 1 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/burj-khalifa.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Burj Khalifa At The Top Tickets</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">4.9 (374 Reviews)</span>
            </div>
            <div class="price">
              <span class="currency">AED</span>
              <span class="amount">189</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 2 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/atlantis.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Atlantis Aquaventure Waterpark</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">4.9 (277 Reviews)</span>
            </div>
            <div class="price">
              <span class="currency">AED</span>
              <span class="amount">330</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 3 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/dhow-cruise.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Dhow Cruise Dinner - Marina</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">4.9 (287 Reviews)</span>
            </div>
            <div class="price">
              <span class="currency">AED</span>
              <span class="amount">155</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 4 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/ski-dubai.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Ski Dubai Tickets</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">4.9 (114 Reviews)</span>
            </div>
            <div class="price">
              <span class="currency">AED</span>
              <span class="amount">250</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 5 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/dubai-city-tour.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Full Day Explore Dubai City Tour</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">4.9 (181 Reviews)</span>
            </div>
            <div class="price">
              <span class="original">AED 225</span>
              <span class="currency">AED</span>
              <span class="amount">175</span>
              <span class="discount">Save 22.2%</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 6 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/burj-sky.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Burj Khalifa Sky Tickets</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">4.9 (97 Reviews)</span>
            </div>
            <div class="price">
              <span class="currency">AED</span>
              <span class="amount">399</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 7 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/dubai-aquarium.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Dubai Aquarium and Underwater Zoo</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">4.9 (105 Reviews)</span>
            </div>
            <div class="price">
              <span class="currency">AED</span>
              <span class="amount">199</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 8 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/kidzania.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Dubai Mall Kidzania</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">4.9 (88 Reviews)</span>
            </div>
            <div class="price">
              <span class="original">AED 90</span>
              <span class="currency">AED</span>
              <span class="amount">69</span>
              <span class="discount">Save 23.3%</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 9 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-worlds.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">IMG Worlds of Adventure</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">4.9 (225 Reviews)</span>
            </div>
            <div class="price">
              <span class="original">AED 365</span>
              <span class="currency">AED</span>
              <span class="amount">255</span>
              <span class="discount">Save 30.1%</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BEST ACTIVITIES IN ABU DHABI -->
  <section class="section best-activities abu-dhabi-activities">
    <div class="container">
      <h2>Best Activities in Abu Dhabi</h2>
      <div class="activities-grid">
        <!-- Activity Card 1 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/al-ain-zoo.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Al Ain Zoo</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">5.0 (12 Reviews)</span>
            </div>
            <div class="price">
              <span class="original">AED 31.5</span>
              <span class="currency">AED</span>
              <span class="amount">29</span>
              <span class="discount">Save 7.9%</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 2 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/emirates-park-zoo.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Emirates Park Zoo</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">5.0 (68 Reviews)</span>
            </div>
            <div class="price">
              <span class="original">AED 52.38</span>
              <span class="currency">AED</span>
              <span class="amount">45</span>
              <span class="discount">Save 14.1%</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 3 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/louvre-abu-dhabi.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Louvre Abu Dhabi</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">5.0 (97 Reviews)</span>
            </div>
            <div class="price">
              <span class="currency">AED</span>
              <span class="amount">63</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 4 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/national-aquarium.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">The National Aquarium Abu Dhabi</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">5.0 (38 Reviews)</span>
            </div>
            <div class="price">
              <span class="original">AED 110</span>
              <span class="currency">AED</span>
              <span class="amount">107</span>
              <span class="discount">Save 2.7%</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 5 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/teamlab.jpg');"></div>
          <div class="activity-body">
            <span class="badge badge-new">New</span>
            <h3><a href="#">TeamLab Phenomena</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">5.0</span>
            </div>
            <div class="price">
              <span class="currency">AED</span>
              <span class="amount">150</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 6 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/desert-safari-ad.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Desert Safari Abu Dhabi</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">4.9 (531 Reviews)</span>
            </div>
            <div class="price">
              <span class="original">AED 300</span>
              <span class="currency">AED</span>
              <span class="amount">190</span>
              <span class="discount">Save 36.7%</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 7 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/yas-island.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Yas Island Theme Park Tickets</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">5.0 (7 Reviews)</span>
            </div>
            <div class="price">
              <span class="currency">AED</span>
              <span class="amount">295</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 8 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/ferrari-park.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Ferrari Theme Park Abu Dhabi</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">5.0 (145 Reviews)</span>
            </div>
            <div class="price">
              <span class="currency">AED</span>
              <span class="amount">345</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 9 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/abu-dhabi-city-tour.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Full Day Abu Dhabi City Tour</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">5.0</span>
            </div>
            <div class="price">
              <span class="currency">AED</span>
              <span class="amount">353.5</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BEST ACTIVITIES IN SINGAPORE -->
  <section class="section best-activities singapore-activities">
    <div class="container">
      <h2>Best activities in Singapore</h2>
      <div class="activities-grid">
        <!-- Activity Card 1 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/night-safari.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Night Safari Singapore</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">4.9 (43 Reviews)</span>
            </div>
            <div class="price">
              <span class="original">AED 87.84</span>
              <span class="currency">AED</span>
              <span class="amount">49.87</span>
              <span class="discount">Save 43.2%</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 2 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/singapore-city-tour.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Singapore City Tour With Guide</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">4.9 (51 Reviews)</span>
            </div>
            <div class="price">
              <span class="original">AED 99.18</span>
              <span class="currency">AED</span>
              <span class="amount">56.67</span>
              <span class="discount">Save 42.9%</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 3 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/sentosa-cable.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Sentosa Cable Car Ride</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">4.9 (48 Reviews)</span>
            </div>
            <div class="price">
              <span class="original">AED 99.18</span>
              <span class="currency">AED</span>
              <span class="amount">82.17</span>
              <span class="discount">Save 17.2%</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 4 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/singapore-flyer.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Singapore Flyer</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">5.0 (14 Reviews)</span>
            </div>
            <div class="price">
              <span class="original">AED 113.34</span>
              <span class="currency">AED</span>
              <span class="amount">110.51</span>
              <span class="discount">Save 2.5%</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 5 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/adventure-cove.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Adventure Cove Water Park</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">5.0 (44 Reviews)</span>
            </div>
            <div class="price">
              <span class="original">AED 113.34</span>
              <span class="currency">AED</span>
              <span class="amount">110.51</span>
              <span class="discount">Save 2.5%</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 6 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/marina-bay-sands.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Marina Bay Sands Sky Park</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">5.0 (14 Reviews)</span>
            </div>
            <div class="price">
              <span class="currency">AED</span>
              <span class="amount">113.34</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 7 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/universal-studios.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Universal Studios Singapore</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">5.0</span>
            </div>
            <div class="price">
              <span class="original">AED 117.34</span>
              <span class="currency">AED</span>
              <span class="amount">113.34</span>
              <span class="discount">Save 3.6%</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 8 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/ifly-singapore.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">iFly Singapore</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">5.0 (35 Reviews)</span>
            </div>
            <div class="price">
              <span class="original">AED 308.86</span>
              <span class="currency">AED</span>
              <span class="amount">268.51</span>
              <span class="discount">Save 13.1%</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 9 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/aj-hackett.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">AJ Hackett Sentosa</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">5.0 (14 Reviews)</span>
            </div>
            <div class="price">
              <span class="original">AED 365.53</span>
              <span class="currency">AED</span>
              <span class="amount">281.09</span>
              <span class="discount">Save 23.1%</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BEST ACTIVITIES IN RAS AL KHAIMAH -->
  <section class="section best-activities ras-al-khaimah-activities">
    <div class="container">
      <h2>Best Activities in Ras al Khaimah</h2>
      <div class="activities-grid">
        <!-- Activity Card 1 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/dubai-fountain-lake.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Dubai Fountain Show Lake ride from Ras Al Khaimah</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">4.9 (87 Reviews)</span>
            </div>
            <div class="price">
              <span class="original">AED 68.25</span>
              <span class="currency">AED</span>
              <span class="amount">68</span>
              <span class="discount">Save 0.4%</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 2 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/yellow-boat.jpg');"></div>
          <div class="activity-body">
            <span class="badge badge-new">New</span>
            <h3><a href="#">Yellow Boat Ras Al Khaimah</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">5.0</span>
            </div>
            <div class="price">
              <span class="currency">AED</span>
              <span class="amount">149</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 3 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/camel-ride.jpg');"></div>
          <div class="activity-body">
            <span class="badge badge-new">New</span>
            <h3><a href="#">Camel Ride In Ras Al Khaimah</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">5.0</span>
            </div>
            <div class="price">
              <span class="original">AED 180</span>
              <span class="currency">AED</span>
              <span class="amount">172.5</span>
              <span class="discount">Save 4.2%</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 4 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/desert-safari-rak.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Desert Safari Ras Al Khaimah</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">4.9 (109 Reviews)</span>
            </div>
            <div class="price">
              <span class="original">AED 280</span>
              <span class="currency">AED</span>
              <span class="amount">250</span>
              <span class="discount">Save 10.7%</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 5 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hot-air-balloon.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Sunrise Hot Air Balloon Ras Al Khaimah</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">5.0</span>
            </div>
            <div class="price">
              <span class="original">AED 222</span>
              <span class="currency">AED</span>
              <span class="amount">175</span>
              <span class="discount">Save 21.7%</span>
            </div>
          </div>
        </div>

        <!-- Activity Card 6 -->
        <div class="activity-card">
          <div class="activity-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/rak-city-tour.jpg');"></div>
          <div class="activity-body">
            <h3><a href="#">Ras Al Khaimah City Tour</a></h3>
            <div class="rating">
              <span class="stars">★★★★★</span>
              <span class="review-count">4.9 (69 Reviews)</span>
            </div>
            <div class="price">
              <span class="currency">AED</span>
              <span class="amount">1049</span>
            </div>
          </div>
        </div>

        <!-- Empty cards for grid completion -->
        <div class="activity-card"></div>
        <div class="activity-card"></div>
        <div class="activity-card"></div>
      </div>
    </div>
  </section>

  <!-- EXPLORE MORE WITH US -->
  <section class="section explore-more">
    <div class="container">
      <h2>Explore more with us</h2>
      <div class="explore-grid">
        <div class="explore-card">
          <a href="<?php echo esc_url(home_url('/attractions/dubai/')); ?>">
            <div class="explore-icon">🏙️</div>
            <h3>Top Attractions in Dubai</h3>
          </a>
        </div>
        <div class="explore-card">
          <a href="<?php echo esc_url(home_url('/attractions/abu-dhabi/')); ?>">
            <div class="explore-icon">🕌</div>
            <h3>Top Attractions in Abu Dhabi</h3>
          </a>
        </div>
        <div class="explore-card">
          <a href="<?php echo esc_url(home_url('/attractions/singapore/')); ?>">
            <div class="explore-icon">🌃</div>
            <h3>Top Attractions in Singapore</h3>
          </a>
        </div>
        <div class="explore-card">
          <a href="<?php echo esc_url(home_url('/categories/theme-parks/')); ?>">
            <div class="explore-icon">🎢</div>
            <h3>Best Theme Parks</h3>
          </a>
        </div>
        <div class="explore-card">
          <a href="<?php echo esc_url(home_url('/categories/desert-safari/')); ?>">
            <div class="explore-icon">🐪</div>
            <h3>Best Desert Safari Dubai</h3>
          </a>
        </div>
        <div class="explore-card">
          <a href="<?php echo esc_url(home_url('/categories/family/')); ?>">
            <div class="explore-icon">👨‍👩‍👧‍👦</div>
            <h3>Family-Friendly Activities</h3>
          </a>
        </div>
        <div class="explore-card">
          <a href="<?php echo esc_url(home_url('/categories/adventure/')); ?>">
            <div class="explore-icon">🧗</div>
            <h3>Adventure & Outdoor Experiences</h3>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
