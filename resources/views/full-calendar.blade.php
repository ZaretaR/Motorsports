<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRT Motorsports</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>

<body>
    @include('includes/nav')

    <div class="container">
        <div id="calendar"></div>
    </div>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var calendar = $('#calendar').fullCalendar({
                editable: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events: '/full-calendar',
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    var title = prompt("Evenement title:");

                    if (title) {
                        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                        $.ajax({
                            url: "/full-calendar/action",
                            type: "POST",
                            data: {
                                title: title,
                                start: start,
                                end: end,
                                type: 'toevoegen'
                            },
                            success: function(data) {
                                calendar.fullCalendar('refetchEvents');
                                alert("Evenement toegevoegd");
                            }
                        })
                    }
                },
                editable: true,
                eventResize: function(event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    var title = event.title;
                    var id = event.id;
                    $.ajax({
                        url: "/full-calendar/action",
                        type: "POST",
                        data: {
                            title: title,
                            start: start,
                            end: end,
                            id: id,
                            type: 'bijwerken'
                        },
                        success: function(response) {
                            calendar.fullCalendar('refetchEvents');
                            alert("Evenement bijgewerkt");
                        }
                    })
                },
                eventDrop: function(event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    var title = event.title;
                    var id = event.id;
                    $.ajax({
                        url: "/full-calendar/action",
                        type: "POST",
                        data: {
                            title: title,
                            start: start,
                            end: end,
                            id: id,
                            type: 'bijwerken'
                        },
                        success: function(response) {
                            calendar.fullCalendar('refetchEvents');
                            alert("Evenement bijgewerkt");
                        }
                    })
                },
                eventClick: function(event) {
                    if (confirm("Ben je zeker dat je dit evenement wilt verwijderen?")) {
                        var id = event.id;
                        $.ajax({
                            url: "/full-calendar/action",
                            type: "POST",
                            data: {
                                id: id,
                                type: 'verwijderen'
                            },
                            success: function(response) {
                                calendar.fullCalendar('refetchEvents');
                                alert("Evenement verwijderd");
                            }
                        })
                    }
                }
            });
        });
    </script>

    @include('includes/footer')
</body>

</html>
