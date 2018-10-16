<?php
  $nro=$_GET["nro"];
  require_once("perguntas.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta charset="ISO-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Vamos???</title>


<!-- Bootstrap -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/bootstrap-notifications.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>






<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6">

      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div  align="center">
            <a href="index.php"><img src="img/logo.jpeg"></a>
          </div>
        <div class="alert alert-success" align="center">

          <table width="100%" align="center">
            <tr>
              <td width="10%" colspan="2">
                <img width="50" rotate="180" src="img/flechader.png"/>
              </td>
              <td width="80%" align="center">
                <h4>Questao <?php echo $nro ?></h4>
              </td>
              <td width="10%" colspan="2">
                <img width="50" src="img/flechader.png"/>
              </td>
            </tr>
          </table>


        </div>
        <table width="100%" align="center">
          <tr>
            <td width="100%" colspan="2">
              <h3><?php echo $pergunta[$nro]?>
              </h3>
            </td>
          </tr>




          <tr>
            <td width="10%"></td>
            <td>
              <div class="radio">
                  <label><input type="radio" name="optradio">Concordo totalmente!</label>
              </div>
            </td>
          </tr>
          <tr>
            <td width="10%"></td>
            <td>
              <div class="radio">
                  <label><input type="radio" name="optradio" >Concordo Parcialmente</label>
              </div>
            </td>
          </tr>
          <tr>
            <td width="10%"></td>
            <td>
              <div class="radio">
                  <label><input type="radio" name="optradio" checked>Neutro</label>
              </div>
            </td>
          </tr>
          <tr>
            <td width="10%"></td>
            <td>
              <div class="radio">
                  <label><input type="radio" name="optradio" >Discordo parcialmente</label>
              </div>
            </td>
          </tr>
          <tr>
            <td width="10%"></td>
            <td>
              <div class="radio">
                  <label><input type="radio" name="optradio" >Discordo totalmente</label>
              </div>
            </td>
          </tr>

          <tr>
            <td width="100%" colspan="2">
            <br>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="btn-group btn-group-justified btn-xs">
              <a href="#" class="btn btn-success">Nada Importante</a>
              <a href="#" class="btn btn-success">Pouco Importante</a>
              <a href="#" class="btn btn-success">Muito Importante</a>
            </div>
            </td>
          </tr>

          <tr>
            <td>
            <br>
            </td>
            <td>

            </td>
          </tr>
          <tr>
            <td width="100%" colspan="2">
            <br>
            </td>
          </tr>


        </table>
        <table>
          <tr>
            <td width="50%">
              <?php
              if ($nro<10)
              {
                ?>
              <form method="POST" action="index3.php?nro=<?php echo ($nro+1) ?>">
              <?php } else
              {
                ?>
              <form method="POST" action="index4.php? ?>">
              <?php }
              ?>
              <button type="submit" class="btn btn-success btn-block btn-lg">Próxima Questao</button>
              </form>
            </td>
            <td width="50%">
              <button type="submit" class="btn btn-success btn-block btn-lg">Salvar Respostas</button>
            </td>
          </tr>
        </table>


      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
       </div>

    </div>
  </div>
</section>





<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © MyCompany. (IHC) All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>



</body>
</html>
