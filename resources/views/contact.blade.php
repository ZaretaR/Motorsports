<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <div class="container-nav">
            @include('includes/nav')
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
            @include('includes/contact-form')
        </div>
    </section>

    @include('includes/footer')

</body>

</html>
