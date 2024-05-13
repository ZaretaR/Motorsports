<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <header>
        <div class="container-nav">
            @include('includes/nav')
        </div>
    </header>

    <div class=”row justify-content-center”>
        <div class=”col-md-8″>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" id="searchInput" class="form-control" placeholder="Zoek evenement">
                        <div class="input-group">
                            <button type="button" id="searchButton" class="btn btn-primary">Zoek</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=”card”>
                <div class=”card-header”>
                    <div class=”card-title”>My Calendar</div>
                </div>
                <div class=”card-body”>
                    <div id=’calendar’></div>
                </div>

            </div>
        </div>
    </div>

    @include('includes/footer')

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var calendarEl = document.getElementById('calendar');
        var events = [];
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            initialView: 'dayGridMonth',
            timeZone: 'UTC',
            events: '/events',
            editable: true,

            //Verwijderen
            eventcontent: function(info) {
                var eventName = description.event.name;
                var eventElement = document.createElement('div');
                eventElement.innerHTML = '<span>Verwijderen</span>' + eventName;

                eventElement.querySelector('span').addEventListener('click', function() {
                    if (confirm('Weet u zeker dat u ' + eventName + ' wilt verwijderen?')) {
                        var eventId = description.event.id;
                        $.ajax({
                            method: 'DELETE',
                            url: '/events/' + eventId,
                            success: function(response) {
                                console.log('Event verwijderd');
                                calendar.refetchEvents();
                            },
                            error: function(error) {
                                console.log('Error deleting event: ' + error);
                            }
                        });
                    }
                });
                return {
                    domNodes: [eventElement]
                };
            },

            //verplaatsen

            eventDrop: function(info) {
                var eventId = description.event.id;
                var newStartDate = description.event.start;
                var newEndDate = description.event.end || newStartDate;
                var newStartDateUTC = newStartDate.toISOString().slice(0, 10);
                var newEndDateUTC = newEndDate.toISOString().slice(0, 10);

                $.ajax({
                    method: 'PUT',
                    url: '/events/' + eventId,
                    date: {
                        start_date: newStartDateUTC,
                        end_date: newEndDateUTC
                    },
                    succes: function() {
                        console.log('Event verplaatst');
                    },
                    error: function(error) {
                        console.log('Error updating event: ' + error);
                    }
                });
            },

            //lengte aanpassen
            eventResize: function(description) {
                var eventId = description.event.id;
                var newEndDate = description.event.end;
                var newEndDateUTC = newEndDate.toISOString().slice(0, 10);

                $.ajax({
                    method: 'PUT',
                    url: '/events/' + eventId + '/resize',
                    date: {
                        end_date: newEndDateUTC
                    },
                    success: function() {
                        console.log('Event lengte aangepast');
                    },
                    error: function() {
                        console.log('Error lengte aanpassing: ' + error);
                    }
                });
            },
        });
        calendar.render();

        document.getElementById('searchButton').addEventListener('click', function() {
            var searchText = document.getElementById('searchInput').value.toLowerCase();
            filterAndDisplayEvents(searchText);
        });

        function filterAndDisplayEvents(searchText) {
            $.ajax({
                method: 'GET',
                url: '/events/search?name=' + searchText,
                success: function(response) {
                    calendar.removeAllEvents();
                    calendar.addEventSource(response);
                },
                error: function(error) {
                    console.log('Error zoeken van evenement: ' + error);
                }
            });
        }
    </script>
</body>

</html>
