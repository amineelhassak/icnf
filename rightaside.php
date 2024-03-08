<!--Right side sponsors and partners-->
<aside class="sponsors-partners">
  <h2>Sponsors and Partners</h2>
  <div class="sponsor-section">
    <h3>Our Official Sponsors</h3>
    <div class="sponsor-grid">
      <!-- Add sponsor images here -->
      <img class="im" src="./assets/img11.jpg" alt="Sponsor 1"><br>
      <img class="im" src="./assets/img12.png" alt="Sponsor 2"><br>
      <img class="im" src="./assets/img13.png" alt="Sponsor 3">
      <!-- Add more sponsors as needed -->
    </div>
  </div>
  <div class="partner-section">
    <h3>Partners</h3>
    <div class="partner-grid">
      <!-- Add partner images here -->
      <img class="im" src="./assets/img11.jpg" alt="Partner 1"><br>
      <img class="im" src="./assets/img12.png" alt="Partner 2"><br>
      <img class="im" src="./assets/img13.png" alt="Partner 3">
      <!-- Add more partners as needed -->
    </div>
  </div>
</aside>
<style>
  /* CSS for right side sponsors and partners aside */
  aside {
    background: transparent url(./shadows/fade-right-column-ra.png) 15% 15% no-repeat;
    background-size: 233px 100%;
  }

  .sponsors-partners {
    background-color: white;
    border-radius: 10px;
  }

  .sponsors-partners h2 {
    color: black;
    margin-bottom: 10px;
  }

  .sponsor-section,
  .partner-section {
    margin-bottom: 20px;
  }

  .sponsor-section h3,
  .partner-section h3 {
    color: black;
    margin-bottom: 10px;
  }

  .sponsor-grid,
  .partner-grid {
    grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
    grid-gap: 10px;
  }

  .im {
    max-width: 120px;
    height: 120px;
  }

  @media screen and (max-width : 900px) {
    .sponsors-partners {
      display: none;
    }
  }
</style>