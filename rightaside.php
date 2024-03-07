<!--Right side sponsors and partners-->
<aside class="sponsors-partners">
  <h2>Sponsors and Partners</h2>
  <div class="sponsor-section">
    <h3>Our Official Sponsors</h3>
    <div class="sponsor-grid">
      <!-- Add sponsor images here -->
      <img src="" alt="Sponsor 1">
      <img src="" alt="Sponsor 2"><br>
      <img src="" alt="Sponsor 3">
      <img src="" alt="Sponsor 4">
      <!-- Add more sponsors as needed -->
    </div>
  </div>
  <div class="partner-section">
    <h3>Partners</h3>
    <div class="partner-grid">
      <!-- Add partner images here -->
      <img src="" alt="Partner 1">
      <img src="" alt="Partner 2"><br>
      <img src="" alt="Partner 3">
      <img src="" alt="Partner 4">
      <!-- Add more partners as needed -->
    </div>
  </div>
</aside>
<style>/* CSS for right side sponsors and partners aside */
aside {
  margin-right:5%;
  background: transparent url(./shadows/fade-right-column-ra.png) 15% 15% no-repeat;
  background-size: 233px 100%;
}
.sponsors-partners {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    margin-left: 80%; /* Adjust margin-left as needed */
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
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
    grid-gap: 10px;
}

.sponsor-grid img,
.partner-grid img {
    max-width: 100%;
    height: auto;
}
</style>