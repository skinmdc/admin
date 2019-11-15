<link href='fullcalendar/core/main.css' rel='stylesheet' />
    <link href='fullcalendar/daygrid/main.css' rel='stylesheet' />

    <script src='fullcalendar/core/main.js'></script>
    <script src='fullcalendar/interaction/main.js'></script>
    <script src='fullcalendar/daygrid/main.js'></script>

    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'interaction','dayGrid' ],
          events: 'fullcalendar/events.php',
          selectable: true,
          eventClick: function(info) {
            Runner.displayPopup( {
              url: "scheduled_edit.php?editid1="+info.event.id,
              width: 700,
              height: 700,
              header: 'Edit Appointment Details'
            });
            console.log(info);
          },
          dateClick: function(info) {
            Runner.displayPopup( {
              url: "appointments_add.php?page=add1&menuItemId=6",
              width: 700,
              height: 700,
              header: 'Add new Appointment'
            });
          }
        });

        calendar.render();
      });

    </script>

<div id='calendar'></div>
