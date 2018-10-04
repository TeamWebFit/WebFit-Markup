<div class="container">
  <div class="row">
    <div class="col-12  col-md">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card">
              <div class="card-body"></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <div class="card-body"></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <div class="card-body"></div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!--<div class="card">
        <div class="card-body"></div>
      </div>-->
    </div>
    <div class="col">
      <!-- Kalender-Dateien einbinden -->
      <table id='calendar'>
        <tr style='visibility:collapse;' hidden>
          <td colspan=7 id='date_memory'>---</td>
        </tr>
        <tr>
          <td class='calendar_head'><a class='calendar_link' href='javascript:prevMonth()'> &laquo;</a></td>
          <td colspan=5 class='calendar_head_month' id='calendar_month'>---</td>
          <td class='calendar_head'><a class='calendar_link' href='javascript:nextMonth()'> &raquo;</a></td>
        </tr>
        <tr>
          <td class="calendar_day">Mo</td>
          <td class='calendar_day'>Di</td>
          <td class='calendar_day'>Mi</td>
          <td class='calendar_day'>Do</td>
          <td class='calendar_day'>Fr</td>
          <td class='calendar_day'>Sa</td>
          <td class='calendar_day'>So</td>
        </tr>
        <tr>
          <td class='calendar_entry' id='calendar_entry_1'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_2'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_3'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_4'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_5'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_6'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_7'>-x-</td>
        </tr>
        <tr>
          <td class='calendar_entry' id='calendar_entry_8'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_9'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_10'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_11'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_12'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_13'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_14'>-x-</td>
        </tr>
        <tr>
          <td class='calendar_entry' id='calendar_entry_15'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_16'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_17'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_18'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_19'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_20'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_21'>-x-</td>
        </tr>
        <tr>
          <td class='calendar_entry' id='calendar_entry_22'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_23'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_24'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_25'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_26'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_27'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_28'>-x-</td>
        </tr>
        <tr>
          <td class='calendar_entry' id='calendar_entry_29'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_30'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_31'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_32'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_33'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_34'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_35'>-x-</td>
        </tr>
        <tr>
          <td class='calendar_entry' id='calendar_entry_36'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_37'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_38'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_39'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_40'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_41'>-x-</td>
          <td class='calendar_entry' id='calendar_entry_42'>-x-</td>
        </tr>
      </table>

      <script type='text/javascript'>
        iniCalendar();

        /*0 = wie bisher, Datum wird in die Box geschrieben*/
        setReturnModus(1);
        /*1 = neu, Eventtext wird in die Box geschrieben
        Das event muss in der calendar.js in der Function
        getEventtext definiert werden.*/
        //setReturnModus(1);
      </script>
      <br />
      <br />
</div>
    </div>
    <div class="row rmobile">
      <br />
      <br />
      <br />
      <div class="col kSquare">
        <div class="kachelnSquare">
          <img src="/img/ActivityCard.png" width="20%" height="auto" alt="Card image">
          <img src="/img/ActivityCard.png" width="20%" height="auto" alt="Card image">
          <img src="/img/ActivityCard.png" width="20%" height="auto" alt="Card image">
          <img src="/img/ActivityCard.png" width="20%" height="auto" alt="Card image">
    </div>
        </div>
        <div class="kacheln">

            <img src="/img/Group2.png" width="35%" height="auto" alt="Card image">
            <img src="/img/Group2.png" width="35%" height="auto" alt="Card image">
            <img src="/img/Group2.png" width="35%" height="auto" alt="Card image">
            <img src="/img/Group2.png" width="35%" height="auto" alt="Card image">

            </div>
            <br />
            <br />

<div class="col">
  <form class="calendar_form" id="myform">
    <p>
      <button type="button" class="btn_calendar" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    <i class="fa fa-plus-circle addWorkout"></i>
  </button>
    </p>
    

    <output id="datum" size=30 />
  </form>

</div>

</div>
</div>
</div>
</div>
