<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<title>Calendario de Entregas</title>
<link href='css/core/main.min.css' rel='stylesheet' />
<link href='css/daygrid/main.min.css' rel='stylesheet' />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="css/style-2.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<script src='js/core/main.min.js'></script>
<script src='js/interaction/main.min.js'></script>
<script src='js/daygrid/main.min.js'></script>
<script src='js/core/locales/pt-br.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
locale: 'pt-br',
      plugins: [ 'interaction', 'dayGrid' ],
      editable:true,
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,listYear'
        
      },

      displayEventTime: false, // don't show the time column in list view

      // THIS KEY WON'T WORK IN PRODUCTION!!!
      // To make your own Google API key, follow the directions here:
      // http://fullcalendar.io/docs/google_calendar/
     
            googleCalendarApiKey: 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',
    
            events:'list_eventos.php',
        extraParams: function(){
            
            return{
                cachebuster:new Date().valueOf()
            };
             },
             
             eventClick:function(info){
                 info.jsEvent.preventDefault();
                 $('#visualizar #id').text(info.event.id);
                 $('#visualizar').modal('show');
             }
             
        });
    calendar.render();
  });

</script>
<style>

  body {
    margin: 0px 0px;
    padding: 0;
    font-size: 14px;
    font-family: sans-serif;
    text-transform: uppercase;
  }

  
  #loading {
    display: none;
    position: absolute;
    top: 10px;
    right: 10px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }
  
  .fc-today{
      color: black;
  }
  
  h2{
    color: white;
  }
  
  span{
      color: white;
  }
  
  .fc-day-number{
      color: white;
  }
  
</style>
</head>
<body>

  <div id='loading'>loading...</div>
  
  <!-- HEADER !-->
  
  <div class="teste"></div>
  
  <div class="header">
        <a href="menu.php"><i class="fas fa-arrow-alt-circle-left" id="size"></i></a>
            <a href="index.php"><h1 class="logo">Entregas</h1></a>
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
                <i class="fas fa-ellipsis-h"></i>
            </label>
    
            <ul class="menu">

            <a href="menu.php" id="letra">Menu</a>    
            <a href="sobrenos2.php" id="letra">Sobre nós</a>
         
            <a href="sair.php" id="letra">Finalizar Sessão</a>
            <label for="chk" class="hide-menu-btn">
            <i class="fas fa-times"></i>
        </label>
        </ul>
        </div>
    
        <br><br>
        

       <!-- CALENDÁRIO !-->
  <div id='calendar'></div>

  
<div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detalhes da Entrega</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <dl class="row">
              <dt class="col-sm-3">Identificação da Entrega:</dt>
              <dd class="col-sm-9" id="id"></dd>
          </dl>
      </div>
      
    </div>
  </div>
</div>

  
</body>
</html>
