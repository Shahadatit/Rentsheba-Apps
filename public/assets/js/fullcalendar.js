document.addEventListener('DOMContentLoaded', function () {
  var calendarEl = document.getElementById('calendar1');
  //rtl 
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
       right: 'dayGridMonth,dayGridWeek,dayGridDay'
    },
    initialDate: '2022-02-04',
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    dayMaxEvents: true, // allow "more" link when too many events
    events: [
      {
        title: 'All Day Event',
        start: '2022-02-01'
      },
      {
        title: 'Long Event',
        start: '2022-02-07',
        end: '2022-02-10'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2022-02-09T16:00:00'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2022-02-16T16:00:00'
      },
      {
        title: 'Conference',
        start: '2022-02-11',
        end: '2022-02-13'
      },
      {
        title: 'Meeting',
        start: '2022-02-12T10:30:00',
        end: '2022-02-12T12:30:00'
      },
      {
        title: 'Lunch',
        start: '2022-02-12T12:00:00'
      },
      {
        title: 'Meeting',
        start: '2022-02-12T14:30:00'
      },
      {
        title: 'Happy Hour',
        start: '2022-02-12T17:30:00'
      },
      {
        title: 'Dinner',
        start: '2022-2-4T20:00:00'
      },
      {
        title: 'Birthday Party',
        start: '2022-02-23T07:00:00'
      },
      {
        title: 'Click for Google',
        url: 'http://google.com/',
        start: '2022-02-28'
      }
    ]
  });
  //ltr 
  var calendar1 = new FullCalendar1.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
       right: 'dayGridMonth,dayGridWeek,dayGridDay'
    },
    initialDate: '2022-02-04',
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    dayMaxEvents: true, // allow "more" link when too many events
    events: [
      {
        title: 'All Day Event',
        start: '2022-02-01'
      },
      {
        title: 'Long Event',
        start: '2022-02-04',
        end: '2022-02-10'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2022-02-04T16:00:00'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2022-02-16T16:00:00'
      },
      {
        title: 'Conference',
        start: '2022-02-11',
        end: '2022-02-13'
      },
      {
        title: 'Meeting',
        start: '2022-02-12T10:30:00',
        end: '2022-02-12T12:30:00'
      },
      {
        title: 'Lunch',
        start: '2022-02-12T12:00:00'
      },
      {
        title: 'Meeting',
        start: '2022-02-12T14:30:00'
      },
      {
        title: 'Happy Hour',
        start: '2022-02-12T17:30:00'
      },
      {
        title: 'Dinner',
        start: '2022-2-4T20:00:00'
      },
      {
        title: 'Birthday Party',
        start: '2022-02-23T07:00:00'
      },
      {
        title: 'Click for Google',
        url: 'http://google.com/',
        start: '2022-02-28'
      }
    ]
  });
  var calendarEl2 = document.getElementById('calendar');
  //rtl 
  var calendar2 = new FullCalendar.Calendar(calendarEl2, {
    initialView: 'listWeek',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'listDay,listWeek,listMonth'
    },

    // customize the button names,
    // otherwise they'd all just say "list"
    views: {
      listDay: { buttonText: 'list day' },
      listWeek: { buttonText: 'list week' }
    },
    events: [
      {
        title: 'All Day Event',
        start: '2022-02-01'
      },
      {
        title: 'Long Event',
        start: '2022-02-07',
        end: '2018-03-10'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2022-02-09T16:00:00'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2022-02-16T16:00:00'
      },
      {
        title: 'Conference',
        start: '2022-02-11',
        end: '2022-02-13'
      },
      {
        title: 'Meeting',
        start: '2022-02-12T10:30:00',
        end: '2022-02-12T12:30:00'
      },
      {
        title: 'Lunch',
        start: '2022-02-12T12:00:00'
      },
      {
        title: 'Meeting',
        start: '2022-02-12T14:30:00'
      },
      {
        title: 'Happy Hour',
        start: '2022-02-12T17:30:00'
      },
      {
        title: 'Dinner',
        start: '2022-02-12T20:00:00'
      },
      {
        title: 'Birthday Party',
        start: '2022-02-23T19:00:00'
      },
      {
        title: 'Click for Google',
        url: 'http://google.com/',
        start: '2022-02-28'
      }
    ]
  });
  //ltr 
  var calendar3 = new FullCalendar1.Calendar(calendarEl2, {
    initialView: 'listWeek',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'listDay,listWeek,listMonth'
    },

    // customize the button names,
    // otherwise they'd all just say "list"
    views: {
      listDay: { buttonText: 'list day' },
      listWeek: { buttonText: 'list week' }
    },
    events: [
      {
        title: 'All Day Event',
        start: '2022-02-01'
      },
      {
        title: 'Long Event',
        start: '2022-02-07',
        end: '2018-03-10'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2022-02-09T16:00:00'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2022-02-16T16:00:00'
      },
      {
        title: 'Conference',
        start: '2022-02-11',
        end: '2022-02-13'
      },
      {
        title: 'Meeting',
        start: '2022-02-12T10:30:00',
        end: '2022-02-12T12:30:00'
      },
      {
        title: 'Lunch',
        start: '2022-02-12T12:00:00'
      },
      {
        title: 'Meeting',
        start: '2022-02-12T14:30:00'
      },
      {
        title: 'Happy Hour',
        start: '2022-02-12T17:30:00'
      },
      {
        title: 'Dinner',
        start: '2022-02-12T20:00:00'
      },
      {
        title: 'Birthday Party',
        start: '2022-02-23T19:00:00'
      },
      {
        title: 'Click for Google',
        url: 'http://google.com/',
        start: '2022-02-28'
      }
    ]
  });

  (function checkRtl() {
    let bodyRtl = $('body').hasClass('rtl');
    if (bodyRtl) {
      calendar.render();
      calendar2.render();
    }
    else {
      calendar1.render();
      calendar3.render();

    }
  })();

})

var calendarEl = document.getElementById('calendar1');
function rtlcalendar() {
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
       right: 'dayGridMonth,dayGridWeek,dayGridDay'
    },
    initialDate: '2022-02-04',
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    dayMaxEvents: true, // allow "more" link when too many events
    events: [
      {
        title: 'All Day Event',
        start: '2022-02-01'
      },
      {
        title: 'Long Event',
        start: '2022-02-07',
        end: '2022-02-10'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2022-02-09T16:00:00'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2022-02-16T16:00:00'
      },
      {
        title: 'Conference',
        start: '2022-02-11',
        end: '2022-02-13'
      },
      {
        title: 'Meeting',
        start: '2022-02-12T10:30:00',
        end: '2022-02-12T12:30:00'
      },
      {
        title: 'Lunch',
        start: '2022-02-12T12:00:00'
      },
      {
        title: 'Meeting',
        start: '2022-02-12T14:30:00'
      },
      {
        title: 'Happy Hour',
        start: '2022-02-12T17:30:00'
      },
      {
        title: 'Dinner',
        start: '2022-2-4T20:00:00'
      },
      {
        title: 'Birthday Party',
        start: '2022-02-23T07:00:00'
      },
      {
        title: 'Click for Google',
        url: 'http://google.com/',
        start: '2022-02-28'
      }
    ]
  });
  calendar.render()
}
function ltrcalendar() {
  var calendar1 = new FullCalendar1.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
       right: 'dayGridMonth,dayGridWeek,dayGridDay'
    },
    initialDate: '2022-02-04',
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    dayMaxEvents: true, // allow "more" link when too many events
    events: [
      {
        title: 'All Day Event',
        start: '2022-02-01'
      },
      {
        title: 'Long Event',
        start: '2022-02-07',
        end: '2022-02-10'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2022-02-09T16:00:00'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2022-02-16T16:00:00'
      },
      {
        title: 'Conference',
        start: '2022-02-11',
        end: '2022-02-13'
      },
      {
        title: 'Meeting',
        start: '2022-02-12T10:30:00',
        end: '2022-02-12T12:30:00'
      },
      {
        title: 'Lunch',
        start: '2022-02-12T12:00:00'
      },
      {
        title: 'Meeting',
        start: '2022-02-12T14:30:00'
      },
      {
        title: 'Happy Hour',
        start: '2022-02-12T17:30:00'
      },
      {
        title: 'Dinner',
        start: '2022-2-4T20:00:00'
      },
      {
        title: 'Birthday Party',
        start: '2022-02-23T07:00:00'
      },
      {
        title: 'Click for Google',
        url: 'http://google.com/',
        start: '2022-02-28'
      }
    ]
  });
  calendar1.render()
  
}

var calendarEl2 = document.getElementById('calendar');
function rtlcalendar1() {
  var calendar2 = new FullCalendar.Calendar(calendarEl2, {
    initialView: 'listWeek',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'listDay,listWeek,listMonth'
    },

    // customize the button names,
    // otherwise they'd all just say "list"
    views: {
      listDay: { buttonText: 'list day' },
      listWeek: { buttonText: 'list week' }
    },
    events: [
      {
        title: 'All Day Event',
        start: '2022-02-01'
      },
      {
        title: 'Long Event',
        start: '2022-02-07',
        end: '2018-03-10'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2022-02-09T16:00:00'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2022-02-16T16:00:00'
      },
      {
        title: 'Conference',
        start: '2022-02-11',
        end: '2022-02-13'
      },
      {
        title: 'Meeting',
        start: '2022-02-12T10:30:00',
        end: '2022-02-12T12:30:00'
      },
      {
        title: 'Lunch',
        start: '2022-02-12T12:00:00'
      },
      {
        title: 'Meeting',
        start: '2022-02-12T14:30:00'
      },
      {
        title: 'Happy Hour',
        start: '2022-02-12T17:30:00'
      },
      {
        title: 'Dinner',
        start: '2022-02-12T20:00:00'
      },
      {
        title: 'Birthday Party',
        start: '2022-02-23T19:00:00'
      },
      {
        title: 'Click for Google',
        url: 'http://google.com/',
        start: '2022-02-28'
      }
    ]
  });
  calendar2.render()
}
function ltrcalendar1() {
  var calendar3 = new FullCalendar1.Calendar(calendarEl2, {
    initialView: 'listWeek',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'listDay,listWeek,listMonth'
    },

    // customize the button names,
    // otherwise they'd all just say "list"
    views: {
      listDay: { buttonText: 'list day' },
      listWeek: { buttonText: 'list week' }
    },
    events: [
      {
        title: 'All Day Event',
        start: '2022-02-01'
      },
      {
        title: 'Long Event',
        start: '2022-02-07',
        end: '2018-03-10'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2022-02-09T16:00:00'
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: '2022-02-16T16:00:00'
      },
      {
        title: 'Conference',
        start: '2022-02-11',
        end: '2022-02-13'
      },
      {
        title: 'Meeting',
        start: '2022-02-12T10:30:00',
        end: '2022-02-12T12:30:00'
      },
      {
        title: 'Lunch',
        start: '2022-02-12T12:00:00'
      },
      {
        title: 'Meeting',
        start: '2022-02-12T14:30:00'
      },
      {
        title: 'Happy Hour',
        start: '2022-02-12T17:30:00'
      },
      {
        title: 'Dinner',
        start: '2022-02-12T20:00:00'
      },
      {
        title: 'Birthday Party',
        start: '2022-02-23T19:00:00'
      },
      {
        title: 'Click for Google',
        url: 'http://google.com/',
        start: '2022-02-28'
      }
    ]
  });
  calendar3.render()
}

$('#myonoffswitch24').click(function () {
  rtlcalendar();
  rtlcalendar1();
  $(".fc-theme-standard ").addClass("fc-direction-rtl");
  $(".fc-theme-standard ").removeClass("fc-direction-ltr");
});

$('#myonoffswitch23').click(function () {
  ltrcalendar();
  ltrcalendar1();
  $(".fc-theme-standard ").removeClass("fc-direction-rtl");
  $(".fc-theme-standard ").addClass("fc-direction-ltr");
});
