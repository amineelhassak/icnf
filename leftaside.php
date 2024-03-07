<!-- left_aside_menu.php -->

<aside>
  <div class= "left_bar">
    <h2>The Conference</h2>
    <div class="menu-container"> <!-- Add a container -->
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php#rabat">Rabat</a></li>
        <li><a href="index.php#contact">Localisation</a></li>
        <li><a href="#">Committees</a></li>
        <li><a href="#">Guidelines</a>
          <ul>
            <li><a href="orale.php">Oral Presentations</a></li>
            <li><a href="poster.php">Poster Guidelines</a></li>
          </ul>
        </li>
        <li><a href="#">ICFN 2024</a>
          <ul>
            <li><a href="#">Presentations</a></li>
            <li><a href="#">Programmes</a></li>
          </ul>
        </li>
        <li><a href="#">Payment Info</a></li>
        <li><a href="accomodation.php">Accommodation Info</a></li>
        <li><a href="index.php#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</aside>

<style>
/* CSS for left aside menu */
aside {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    background: transparent url(./shadows/fade-left-column.png) 0% 0 no-repeat;
    background-size: 233px 100%;
    padding-left:3%;
}

aside h2 {
    margin-top:2%;
    color: black;
    margin-bottom: 10px;
}

aside ul {
    list-style: none;
    padding: 0;
}

aside ul li {
    margin-bottom: 10px;
    position: relative;
    background-color: #ffffff; /* Background color for each option */
    border-radius: 5px;
    margin-right:85%;
}

aside ul li a {
    color: black;
    text-decoration: none;
    display: block;
    padding: 10px; /* Adjust padding as needed */
    transition: color 0.3s;
}

aside ul li:first-child {
    margin-top: 0; /* Remove top margin for the first element */
}

aside ul li:last-child {
    margin-bottom: 0; /* Remove bottom margin for the last element */
}

aside ul li a:hover {
    color: #13A4C7;
}

aside ul li.active::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 5px;
    background-color: #13A4C7;
    border-radius: 0 5px 5px 0;
}

/* Adjust margin for child elements */
aside ul ul {
    margin-left: 20px; /* Adjust as needed */
}
</style>
