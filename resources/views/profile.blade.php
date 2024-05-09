<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <div class="container-nav">
            @include('includes/nav')
        </div>
    </header>

    <button class="inlog-knop">Inloggen</button>
    <button class="aanmeld-knop">Aanmelden</button>

    @include('profile.inlog-section')
    @include('profile.aanmeld-section')

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            document.querySelector('.inlog-knop').click();
        })

        const aanmeldKnop = document.querySelector('.aanmeld-knop');
        const inlogKnop = document.querySelector('.inlog-knop');
        const aanmeldSection = document.querySelector('.aanmeld-formulier');
        const inlogSection = document.querySelector('.inlog-formulier');

        aanmeldKnop.addEventListener('click', () => {
            aanmeldSection.classList.remove('hidden');
            inlogSection.classList.add('hidden');
        });

        inlogKnop.addEventListener('click', () => {
            aanmeldSection.classList.add('hidden');
            inlogSection.classList.remove('hidden');
        });
    </script>

    @include('includes/footer')
</body>


</html>
