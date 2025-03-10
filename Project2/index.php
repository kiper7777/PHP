<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare - Pet Care Platform</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- <header>
        <div class="container">
            <h1><a href="index.php">PetCare</a></h1>
            <nav>
                <ul>
                    <li><a href="#contact">Search Sitters</a></li>
                    <li><a href="#about">Become a Sitter</a></li>
                    <li><a href="#services">Our Services</a></li>
                </ul>
            </nav>
            <div class="auth_buttons">
                <button type="button" class="signup" id="signupButton"><a href="signup.php">Sign Up</a></button>
                <button type="button" class="signin" id="signinButton"><a href="signin.php">Sign In</a></button>
            </div>
        </div>
    </header> -->

    <?php include "header.php" ; 
    ?>

    <section class="her">
        <!-- <div class="hero_container">
            <h2>Find a reliable assistant for your pet in your area</h2>

            <form id="search-form">
                <input type="text" id="search-input" placeholder="Enter your city">
                <button type="submit">Find</button>
            </form>
        </div> -->

        <div class="search-box">
            <div class="search-box_header">
                <h2>I'm looking for a service for my:</h2>
                <div class="pet-selection">
                    <label><input type="checkbox" id="dog" checked> Dog</label>
                    <label><input type="checkbox" id="cat"> Cat</label>
                </div>
            </div>

            <div class="service-options_block">
                <div class="service-options_for">
                    <h3>For When You're Away</h3>
                    <div class="service-options">
                        <button class="service-btn active">Boarding</button>
                        <button class="service-btn">House Sitting</button>
                        <button class="service-btn">Drop-In Visits</button>
                    </div>
                </div>

                <div class="service-options_for">
                    <h3>For When You're at Work</h3>
                    <div class="service-options">
                        <button class="service-btn">Doggy Day Care</button>
                        <button class="service-btn">Dog Walking</button>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="block_address">
                    <label>Boarding near</label>
                    <input type="text" placeholder="Postcode or Address">
                </div>

                <div class="block_date">
                    <label>For these days</label>
                    <div class="block_date-input">
                        <input type="date" placeholder="Drop off">
                        <span>→</span>
                        <input type="date" placeholder="Pick up">
                    </div>
                </div>
            </div>

            <h3>My Dog’s Size</h3>
            <div class="size-options">
                <button class="size-btn active">Small<br>0 – 7 kg</button>
                <button class="size-btn">Medium<br>7 – 18 kg</button>
                <button class="size-btn">Large<br>18 – 45 kg</button>
                <button class="size-btn">Giant<br>45+ kg</button>
                <button id="searchButton" onclick="submit()" class="search-btn">Search</button>
            </div>

        </div>


    </section>

    <section id="services">
        <div class="container">
            <h2>Our services</h2>
            <div class="services-grid">
                <div class="service">
                    <h3>Dog walking</h3>
                    <p>Find trusted dog walkers for your pet.</p>
                </div>
                <div class="service">
                    <h3>Cat sitting</h3>
                    <p>Trust your cat to experienced sitters.</p>
                </div>
                <div class="service">
                    <h3>Animal care</h3>
                    <p>A full range of services for the care of your pet.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>PetCare - is a platform that helps pet owners find reliable people to walk, care for and babysit their
                pets.</p>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contacts</h2>
            <p>Please contact us if you have any questions or suggestions.</p>
            <form id="contact-form">
                <input type="text" id="name" placeholder="Your name">
                <input type="email" id="email" placeholder="Your email">
                <textarea id="message" placeholder="Your message"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
    </section>

    <!-- <footer>
        <div class="container">
            <p>&copy; 2023 PetCare. All rights reserved.</p>
        </div>
    </footer> -->

    <?php include "footer.php" ; 
    ?>

    <script src="script.js"></script>
</body>

</html>