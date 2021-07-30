<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin</title>

    <link rel="stylesheet" href="/admin/plugins/fullcalendar/main.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/images/logo.png" alt="Logo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/admin/index" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="https://instagram.com/reza_pradito" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/admin/index" class="brand-link">
                <img src="/../images/logo.png" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="/admin/index" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Forms
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/add_futsal" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Futsal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/add_basket" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Basket</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/add_badmin" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Badminton</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/add_gym" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Gym</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/futsal" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Futsal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/basket" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Basket</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/badmin" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Badminton</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/gym" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Gym</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/fb" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Feedback</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="/logout" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt" style="color:red;"></i>
                                <p style="color:red;">
                                    Logout
                                </p>
                            </a>
                        </li>

                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->
            <?= $this->renderSection('content'); ?>

            <footer class="main-footer">
                <strong>Copyright &copy; 2021 <a href="https://instagram.com/reza_pradito">Admin.ZNV</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> xixixi
                </div>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="/admin/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="/admin/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="/admin/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="/admin/plugins/moment/moment.min.js"></script>
        <script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/admin/dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="/admin/dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="/admin/dist/js/pages/dashboard.js"></script>
        <script>
            function previewImg() {
                const sampul = document.querySelector('#gambar');
                const sampulLabel = document.querySelector('.gambar');
                const imgPreview = document.querySelector('.img-preview');

                sampulLabel.textContent = gambar.files[0].name;

                const fileSampul = new FileReader();
                fileSampul.readAsDataURL(gambar.files[0]);

                fileSampul.onload = function(e) {
                    imgPreview.src = e.target.result;
                }
            }

            function previewImg1() {
                const sampul1 = document.querySelector('#slide_1');
                const sampulLabel1 = document.querySelector('.slide_1');
                const imgPreview1 = document.querySelector('.img-preview1');

                sampulLabel1.textContent = slide_1.files[0].name;

                const fileSampul1 = new FileReader();
                fileSampul1.readAsDataURL(slide_1.files[0]);

                fileSampul1.onload = function(e) {
                    imgPreview1.src = e.target.result;
                }
            }

            function previewImg2() {
                const sampul2 = document.querySelector('#slide_2');
                const sampulLabel = document.querySelector('.slide_2');
                const imgPreview2 = document.querySelector('.img-preview2');

                sampulLabel.textContent = slide_2.files[0].name;

                const fileSampul2 = new FileReader();
                fileSampul2.readAsDataURL(slide_2.files[0]);

                fileSampul2.onload = function(e) {
                    imgPreview2.src = e.target.result;
                }
            }

            function previewImg3() {
                const sampul3 = document.querySelector('#slide_3');
                const sampulLabel = document.querySelector('.slide_3');
                const imgPreview3 = document.querySelector('.img-preview3');

                sampulLabel.textContent = slide_3.files[0].name;

                const fileSampul3 = new FileReader();
                fileSampul3.readAsDataURL(slide_3.files[0]);

                fileSampul3.onload = function(e) {
                    imgPreview3.src = e.target.result;
                }
            }
        </script>   
        <script>
            $(function() {

                /* initialize the external events
                 -----------------------------------------------------------------*/
                function ini_events(ele) {
                    ele.each(function() {

                        // create an Event Object (https://fullcalendar.io/docs/event-object)
                        // it doesn't need to have a start or end
                        var eventObject = {
                            title: $.trim($(this).text()) // use the element's text as the event title
                        }

                        // store the Event Object in the DOM element so we can get to it later
                        $(this).data('eventObject', eventObject)

                        // make the event draggable using jQuery UI
                        $(this).draggable({
                            zIndex: 1070,
                            revert: true, // will cause the event to go back to its
                            revertDuration: 0 //  original position after the drag
                        })

                    })
                }

                ini_events($('#external-events div.external-event'))

                /* initialize the calendar
                 -----------------------------------------------------------------*/
                //Date for the calendar events (dummy data)
                var date = new Date()
                var d = date.getDate(),
                    m = date.getMonth(),
                    y = date.getFullYear()

                var Calendar = FullCalendar.Calendar;
                var Draggable = FullCalendar.Draggable;

                var containerEl = document.getElementById('external-events');
                var checkbox = document.getElementById('drop-remove');
                var calendarEl = document.getElementById('calendar');

                // initialize the external events
                // -----------------------------------------------------------------

                new Draggable(containerEl, {
                    itemSelector: '.external-event',
                    eventData: function(eventEl) {
                        return {
                            title: eventEl.innerText,
                            backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                            borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                            textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
                        };
                    }
                });

                var calendar = new Calendar(calendarEl, {
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    themeSystem: 'bootstrap',
                    //Random default events
                    events: [{
                            title: 'All Day Event',
                            start: new Date(y, m, 1),
                            backgroundColor: '#f56954', //red
                            borderColor: '#f56954', //red
                            allDay: true
                        },
                        {
                            title: 'Long Event',
                            start: new Date(y, m, d - 5),
                            end: new Date(y, m, d - 2),
                            backgroundColor: '#f39c12', //yellow
                            borderColor: '#f39c12' //yellow
                        },
                        {
                            title: 'Meeting',
                            start: new Date(y, m, d, 10, 30),
                            allDay: false,
                            backgroundColor: '#0073b7', //Blue
                            borderColor: '#0073b7' //Blue
                        },
                        {
                            title: 'Lunch',
                            start: new Date(y, m, d, 12, 0),
                            end: new Date(y, m, d, 14, 0),
                            allDay: false,
                            backgroundColor: '#00c0ef', //Info (aqua)
                            borderColor: '#00c0ef' //Info (aqua)
                        },
                        {
                            title: 'Birthday Party',
                            start: new Date(y, m, d + 1, 19, 0),
                            end: new Date(y, m, d + 1, 22, 30),
                            allDay: false,
                            backgroundColor: '#00a65a', //Success (green)
                            borderColor: '#00a65a' //Success (green)
                        },
                        {
                            title: 'Click for Google',
                            start: new Date(y, m, 28),
                            end: new Date(y, m, 29),
                            url: 'https://www.google.com/',
                            backgroundColor: '#3c8dbc', //Primary (light-blue)
                            borderColor: '#3c8dbc' //Primary (light-blue)
                        }
                    ],
                    editable: true,
                    droppable: true, // this allows things to be dropped onto the calendar !!!
                    drop: function(info) {
                        // is the "remove after drop" checkbox checked?
                        if (checkbox.checked) {
                            // if so, remove the element from the "Draggable Events" list
                            info.draggedEl.parentNode.removeChild(info.draggedEl);
                        }
                    }
                });

                calendar.render();
                // $('#calendar').fullCalendar()

                /* ADDING EVENTS */
                var currColor = '#3c8dbc' //Red by default
                // Color chooser button
                $('#color-chooser > li > a').click(function(e) {
                    e.preventDefault()
                    // Save color
                    currColor = $(this).css('color')
                    // Add color effect to button
                    $('#add-new-event').css({
                        'background-color': currColor,
                        'border-color': currColor
                    })
                })
                $('#add-new-event').click(function(e) {
                    e.preventDefault()
                    // Get value and make sure it is not null
                    var val = $('#new-event').val()
                    if (val.length == 0) {
                        return
                    }

                    // Create events
                    var event = $('<div />')
                    event.css({
                        'background-color': currColor,
                        'border-color': currColor,
                        'color': '#fff'
                    }).addClass('external-event')
                    event.text(val)
                    $('#external-events').prepend(event)

                    // Add draggable funtionality
                    ini_events(event)

                    // Remove event from text input
                    $('#new-event').val('')
                })
            })
        </script>
</body>

</html>