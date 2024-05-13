<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src=" https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
</head>

<body>
    <header>
        <div class="container-nav">
            @include('includes/nav')
        </div>
    </header>

    <div id="calendar"></div>

    @include('includes/footer')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [
                    FullCalendar.dayGridPlugin
                ],
                initialView: 'dayGridMonth',
                weekends: false,
                events: [{
                    title: 'Meeting',
                    start: new Date()
                }]
            });
            calendar.render();
        });
    </script>

    <script>
        import {
            Calendar
        } from '@fullcalendar/core'
        import dayGridPlugin from '@fullcalendar/daygrid'

        const calendarEl = document.getElementById('calendar')
        const calendar = new Calendar(calendarEl, {
            plugins: [
                dayGridPlugin
                // any other plugins
            ],
            initialView: 'dayGridMonth',
            weekends: false,
            events: [{
                title: 'Meeting',
                start: new Date()
            }]
        })

        calendar.render()
    </script>
</body>

</html>
