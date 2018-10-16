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
          <table width="100%" align="center">
            <tr>
              <td width="10%" colspan="2">
                <img width="50" rotate="180" src="img/flechader.png"/>
              </td>
              <td width="80%" align="center">
                <h4>Revisar questao <?php echo $nro ?></h4>
              </td>
              <td width="10%" colspan="2">
                </td>
            </tr>
          </table>
        <table width="100%" align="left">
          <tr>
            <td colspan="2" align="center">
              <div class="form-group">
                <label for="email">
                  <h3>
                    Pronta para ver os candidatos?
                  </h3>
                  <br><br>
                  </label>
              </div>
            </td>

          </tr>

          <tr>
            <td colspan="2" align="center">
              <div class="form-group">
                <label for="email">
                  <h4>
                    A fim de nao viciar a análise, você não poderá
                    voltar ao Questionário após gerar os resultados.
                  </h4>
                  <br>
                  <br>
                  </label>
              </div>
            </td>

          </tr>

          <tr>
            <td colspan="2" align="center">
              <div class="form-group">
                <label for="email">
                  <h4>
                    Você pode recomeçar de zero siempre que desejar.

                  </h4>
                  <br>
                  <br>
                  </label>
              </div>
            </td>

          </tr>





        </table>
        <table>
          <tr>
            <td width="50%">

              <form method="POST" action="index5.php">
              <button type="submit" class="btn btn-success btn-block btn-lg">Ver Resultados</button>
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
</form>

<br>
<br>


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
