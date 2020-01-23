<!DOCTYPE html>
<html>
<!--
Developed By: DANIEL NG`ANDU
Contact Me: 0975517084/daniel_ngandu@outlook.com
 -->
<?php

 include "connection.php";
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = clean_input($_POST["first_name"]);
    $last_name = clean_input($_POST["last_name"]);
    $email = clean_input($_POST["email"]);
    $phone_number = clean_input($_POST["phone_number"]);
    $event_title = clean_input($_POST["event_title"]);
    $event_desc = clean_input($_POST["event_desc"]);
    $event_ticket_prices = clean_input($_POST["event_ticket_prices"]);
    $event_venue = clean_input($_POST["event_venue"]);
}

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<head>
  <meta charset='utf-8' />
  <link href='packages/core/main.css' rel='stylesheet' />
  <link href='packages/daygrid/main.css' rel='stylesheet' />
  <link href='packages/timegrid/main.css' rel='stylesheet' />
  <link href='packages/list/main.css' rel='stylesheet' />

    <!--
    Developed By: DANIEL NG`ANDU
    Contact Me: 0975517084/daniel_ngandu@outlook.com
     -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <script src='packages/core/main.js'></script>
  <script src='packages/interaction/main.js'></script>
  <script src='packages/daygrid/main.js'></script>
  <script src='packages/timegrid/main.js'></script>
  <script src='packages/list/main.js'></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script>
      var curday = function(sp) {
          today = new Date();
          var dd = today.getDate();
          var mm = today.getMonth() + 1; //As January is 0.
          var yyyy = today.getFullYear();

          if (dd < 10) dd = '0' + dd;
          if (mm < 10) mm = '0' + mm;
          return (yyyy + sp + mm + sp + dd);
      };
    document.addEventListener('DOMContentLoaded', function () {
      var calendarEl = document.getElementById('calendar');
      var currentdate = curday('-');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['interaction', 'dayGrid', 'timeGrid', 'list'],
          selectable: true,
          selectHelper:true,
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        defaultDate: currentdate,
        editable: true,
        navLinks: true, // can click day/week names to navigate views
        eventLimit: true, // allow "more" link when too many events
        events: {
          url: 'get_json_events.php',
          failure: function () {
            document.getElementById('script-warning').style.display = 'block'
          }
        },
        loading: function (bool) {
          document.getElementById('loading').style.display =
            bool ? 'block' : 'none';

        },
          eventClick: function(info) {
              //alert('Event: ' + info.event.title);

              $('#AddEvent-modalTitle').html(info.event.title +" "+  info.startStr + ' to ' + info.endStr  );
              $('#AddEvent-modalBody').html(info.event.extendedProps.description);
              $('#ViewEvent').modal('show');
              // change the border color just for fun
              info.el.style.borderColor = 'red';
          },
          dateClick: function(info) {
              //alert('Clicked on: ' + info.dateStr);
             // alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
              //alert('Current view: ' + info.view.type);
              // change the day's background color just for fun
              // info.dayEl.style.backgroundColor = 'red';

              $('#AddEvent-modalTitle').text("Add Event For "+ info.dateStr);
              $('#add-event').modal('show');
          },
          select: function(info) {
              //alert('selected ' + info.startStr + ' to ' + info.endStr );

          }
      });

      calendar.render();
    });
  </script>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
      font-size: 14px;
    }

    #script-warning {
      display: none;
      background: #eee;
      border-bottom: 1px solid #ddd;
      padding: 0 10px;
      line-height: 40px;
      text-align: center;
      font-weight: bold;
      font-size: 12px;
      color: red;
    }

    #loading {
      display: none;
      position: absolute;
      top: 10px;
      right: 10px;
    }

    #calendar {
      max-width: 900px;
      margin: 40px auto;
      padding: 0 10px;
    }



  </style>
</head>

<body>
<div class="container">
  <div id='script-warning'>
    <code>php/get-events.php</code> must be running.
  </div>

  <div id='loading'>loading...</div>
  <p id = "demo"></p>

  <div id='calendar'></div>

  <!--Add Event Modal -->
  <div id="add-event" class="modal fade" role="dialog">
      <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content" id ="createEventModal">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" id="AddEvent-modalTitle">Modal Header</h4>
              </div>
              <div class="modal-body" id="AddEvent-modalBody">
                  <form class="form-sample" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" name="myForm" id="main" method="post">

                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="col-sm-6 col-form-label">First Name<small> (required)</small></label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control" id="first_name" placeholder="Firstname" name="first_name" required="required">
                                  </div>
                                  <div class="col-sm-5 messages"></div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="col-sm-6 col-form-label">Last Name<small> (required)</small></label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control" id="last_name" placeholder="Lastname" name="last_name" required="required">
                                  </div>
                                  <div class="col-sm-5 messages"></div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="col-sm-6 col-form-label">Email<small> (optional)</small></label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control" id="email" placeholder="Email" name="email" required="required">
                                  </div>
                                  <div class="col-sm-5 messages"></div>
                              </div>
                          </div>
                      </div>
                      <div class="row">

                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="col-sm-6 col-form-label">Phone Number<small> (required)</small></label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control" id="phone_number" placeholder="Phone Number" name="phone_number" required="required">
                                  </div>
                                  <div class="col-sm-5 messages"></div>
                              </div>
                          </div>
                      </div>
                      <div class="row">

                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="col-sm-6 col-form-label">Event Title<small> (required)</small></label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control" id="event_title" placeholder="Event Title" name="event_title" required="required">
                                  </div>
                                  <div class="col-sm-5 messages"></div>
                              </div>
                          </div>
                      </div>
                      <div class="row">

                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="col-sm-6 col-form-label">Event Description<small> (required)</small></label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control" id="event_desc" placeholder="Event Description" name="event_desc" required="required">
                                  </div>
                                  <div class="col-sm-5 messages"></div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">

                                  <div class="input-group">
                                      <label for="email">Ticket Type 11 <small> (required)</small>: </label>
                                      <select class="js-example-tags"  style="width: 50%">
                                          <?php
                                          $sql = "SELECT * FROM event_ticket_types ";
                                          if ($result = $conn->query($sql)) {
                                              while ($row = $result->fetch_assoc()) {
                                                  $event_ticket_type_id = $row["event_ticket_type_id"];
                                                  $event_ticket_type = $row["event_ticket_type"];
                                                  echo "<option value=".$event_ticket_type_id.">".$event_ticket_type."</option>";
                                              }
                                          }
                                          ?>
                                      </select>
                                      <div class="input-group-prepend">
                                          <span class="input-group-text" id=""> K </span>
                                      </div>
                                      <input type="text" class="form-control" >

                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">

                                  <div class="input-group">
                                      <label for="email">Ticket Type 2 <small> (Optional)</small>: </label>
                                      <select class="js-example-tags"  style="width: 50%">
                                          <?php
                                          $sql = "SELECT * FROM event_ticket_types ";
                                          if ($result = $conn->query($sql)) {
                                              while ($row = $result->fetch_assoc()) {
                                                  $event_ticket_type_id = $row["event_ticket_type_id"];
                                                  $event_ticket_type = $row["event_ticket_type"];
                                                  echo "<option value=".$event_ticket_type_id.">".$event_ticket_type."</option>";
                                              }
                                          }
                                          ?>
                                      </select>
                                      <div class="input-group-prepend">
                                          <span class="input-group-text" id=""> K </span>
                                      </div>
                                      <input type="text" class="form-control" >

                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">

                                  <div class="input-group">
                                      <label for="email">Ticket Type 3<small> (Optional)</small>: </label>
                                      <select class="js-example-tags"  style="width: 50%">
                                          <?php
                                          $sql = "SELECT * FROM event_ticket_types ";
                                          if ($result = $conn->query($sql)) {
                                              while ($row = $result->fetch_assoc()) {
                                                  $event_ticket_type_id = $row["event_ticket_type_id"];
                                                  $event_ticket_type = $row["event_ticket_type"];
                                                  echo "<option value=".$event_ticket_type_id.">".$event_ticket_type."</option>";
                                              }
                                          }
                                          ?>
                                      </select>
                                      <div class="input-group-prepend">
                                          <span class="input-group-text" id=""> K </span>
                                      </div>
                                      <input type="text" class="form-control" >

                                  </div>
                              </div>
                          </div>
                          <script>
                              // In your Javascript (external .js resource or <script> tag)
                              $(".js-example-tags").select2({
                                  tags: true
                              });
                          </script>
                      </div>
                      <div class="row">

                          <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="col-sm-6 col-form-label">Event Venue/Location<small> (required)</small></label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control" id="event_venue" placeholder="Event Location" name="event_venue" required="required">
                                  </div>
                                  <div class="col-sm-5 messages"></div>
                              </div>
                          </div>
                      </div>
                      <hr>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <div class="col-sm-12">
                                      <button type="submit" class="btn btn-info btn-md" name="add_event_btn">Schedule</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
          </div>

      </div>
  </div>

  <!-- View Event Modal  -->
    <div id="ViewEvent" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" id ="createEventModal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="ViewEvent-modalTitle">Modal Header</h4>
                </div>
                <div class="modal-body" id="ViewEvent-modalBody">
                    <form class="form-sample" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" name="myForm" id="main" method="post">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">lllFirst Name<small> (required)</small></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="first_name" placeholder="Firstname" name="first_name" required="required">
                                    </div>
                                    <div class="col-sm-5 messages"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Last Name<small> (required)</small></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="last_name" placeholder="Lastname" name="last_name" required="required">
                                    </div>
                                    <div class="col-sm-5 messages"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Email<small> (optional)</small></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" placeholder="Email" name="email" required="required">
                                    </div>
                                    <div class="col-sm-5 messages"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Phone Number<small> (required)</small></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="phone_number" placeholder="Phone Number" name="phone_number" required="required">
                                    </div>
                                    <div class="col-sm-5 messages"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Event Title<small> (required)</small></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="event_title" placeholder="Event Title" name="event_title" required="required">
                                    </div>
                                    <div class="col-sm-5 messages"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Event Type<small> (required)</small></label>
                                    <div class="col-sm-9">
                                        <select class="js-example-tags" style="width: 100%;">
                                            <option value="AL">Alabama</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5 messages"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Event Description<small> (required)</small></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="event_desc" placeholder="Event Description" name="event_desc" required="required">
                                    </div>
                                    <div class="col-sm-5 messages"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">

                                    <div class="input-group">
                                        <label for="email">Ticket Type 1 <small> (Required)</small>: </label>

                                        <select class="js-example-tags"  style="width: 100%;">
                                            <?php ?>
                                            <option value="AL">Alabama</option>
                                            <?php ?>
                                        </select>

                                        <input type="text" class="form-control" placeholder="K " value="K">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">

                                    <div class="input-group">
                                        <label for="email">Ticket Type 2 <small> (Optional)</small>: </label>

                                        <select class="js-example-tags" style="width: 100%;">
                                            <option value="AL">Alabama</option>
                                            <option value="WY">Wyoming</option>
                                        </select>

                                        <input type="text" class="form-control" placeholder="K " value="K">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">

                                    <div class="input-group">
                                        <label for="email">Ticket Type 3<small> (Optional)</small>: </label>

                                        <select class="js-example-tags"  style="width: 100%;">
                                            <option value="AL">Alabama</option>
                                            <option value="WY">Wyoming</option>
                                        </select>

                                        <input type="text" placeholder="K " class="form-control" value="K">

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label">Event Venue/Location<small> (required)</small></label>
                                    <div class="col-sm-9">
                                        <select class="js-example-tags"  style="width: 100%;">
                                            <option value="AL">Alabama</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5 messages"></div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-info btn-md" name="add_event_btn">Schedule</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            // In your Javascript (external .js resource or <script> tag)
                            $(".js-example-tags").select2({
                                tags: true
                            });
                        </script>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <?php
//    echo "<h2>Your Input:</h2>";
//    echo $name;
//    echo "<br>";
//    echo $email;
//    echo "<br>";
    ?>
</div>
</body>

</html>