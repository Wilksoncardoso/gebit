<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home, Seja Bem Vindo ! </title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/home.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link href="css/bootstrap-datepicker.css" rel="stylesheet"/>
    <script src="js/bootstrap-datepicker.min.js"></script> 
    <script src="js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>

    <title>Seja Bem vindo ! </title>
  </head>
  <body>

    <div class="topo"></div><br><br><br>
    <div class="container"> 


    <div class="row">
    <div class="col-4">
    <h6>Cadastro de Viagem</h6>
    </div>

    <div class="col-4">
    <h6>Calendário</h6>
    
    </div>
     <div class="col-4">
     

    </div>
    </div>  

    <div class="row">
    <div class="col-4">
     <form class="form-horizontal">
         <div class="form-group">
          
          <div class="col-sm-2">
            <div class="input-group date">
              <input type="text" class="form-control" id="exemplo" >
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>

          </div>
          </div>
          
      </form>

  
    </div>

    <div class="col-6">
    <h6>Calendário</h6>
    </div>

    </div>






    </div>   
    



    <!-- Optional JavaScript -->
    <script type="text/javascript">
      $('#exemplo').datepicker({  
        format: "dd/mm/yyyy", 
        language: "pt-BR",
        startDate: '+0d',
      });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>