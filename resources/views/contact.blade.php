<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <div class="container-nav">
            <nav>
                <ul>
                    <li><a href="Home">Home</a></li>
                    <li><a href="Team">Team</a></li>
                    <li><a href="Contact">Contact</a></li>
                    <!-- Dit krijg je alleen te zien als je ingelogd bent
                    <li><a href="Kalender">Kalender</a></li>
                    <li><a href="Blog">Blog</a></li>
                    -->
                    <li><a href="Profile">Login / Meld aan</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="contact-formulier">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.301105324248!2d5.343541976871397!3d51.04752777171233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c125fad7490129%3A0xf81c9248b0d979cd!2sVijfeindestraat%2030%2C%203530%20Houthalen-Helchteren!5e0!3m2!1snl!2sbe!4v1715072977956!5m2!1snl!2sbe"
                width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="formulier">
            <h3>Contact formulier</h3>
            <form>
                <label for="naam">Naam</label><br>
                <input type="text" name="naam" id="naam" placeholder="Naam"><br>

                <label for="voornaam">Vooraam</label><br>
                <input type="text" name="voornaam" id="voornaam" placeholder="Voornaam"><br>

                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" placeholder="email@adres.com"><br>

                <label for="bericht">Bericht</label><br>
                <textarea name="bericht" id="bericht" cols="30" rows="10"></textarea><br>

                <input type="submit" value="Verzenden" class="verzenden">
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="gegevens-eerste-deel">
                <div class="info">
                    <h5>Adres</h5>
                    <p>Vijfeindestraat 30 <br> 3530 Houthalen Helchteren</p>
                    <h5>Telnr.</h5>
                    <p>+32 (0)495 44 25 45</p>
                    <i class="fa-brands fa-facebook" style="color: #ffc72c;"></i>
                </div>
                <div class="bereikbaarheid">
                    <ul>
                        <li>
                            <h5>We zijn bereikbaar op:</h5>
                        </li>
                        <li>Maandag: 17u00 - 22u00</li>
                        <li>Dinsdag: 17u00 - 22u00</li>
                        <li>Woensdag: 17u00 - 22u00</li>
                        <li>Donderdag: 17u00 - 22u00</li>
                        <li>Vrijdag: 17u00 - 22u00</li>
                        <li>Zaterdag: 17u00 - 22u00</li>
                        <li>Zondag: 17u00 - 22u00</li>
                    </ul>
                </div>
            </div>
            <div class="lijn"></div>
            <div class="gegevens-tweede-deel">
                <img src="images/grt-47.jpg" alt="logo">
                <p>Copyright GRT MOTORSPORT © 2024</p>
            </div>
        </div>
    </footer>

</body>

</html>
