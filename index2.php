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



<form method="POST" action="index3.php?nro=1">
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

          <h4>Responda alguns dos seus dados:</h4>
        </div>
        <table width="100%" align="left">
          <tr>
            <td width="100%" colspan="2">
            <br>
            </td>
          </tr>

          <tr>
            <td>
              <div class="form-group">
                <label for="email">Sexo : </label>
              </div>
            </td>
            <td>
              <div class="form-group">
                <select class="form-control" id="sexo" name="sexo">
                  <option value="X">...</option>
                  <option value="M">Masculino</option>
                  <option value="F">Femenino</option>
                  </select>
              </div>
            </td>
          </tr>
          <tr>
            <td width="100%" colspan="2">
            <br>
            </td>
          </tr>
          <tr>
            <td width="100%" colspan="2">
            <br>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="email">Idade: </label>
              </div>
            </td>
            <td>
              <div class="form-group">
                <select class="form-control" id="sexo" name="sexo">
                  <option value="X">...</option>
                  <option value="X">18-20</option>
                  <option value="M">21-30</option>
                  <option value="F">31-40</option>
                  <option value="F">41-mais</option>
                  </select>
              </div>
            </td>
          </tr>
          <tr>
            <td width="100%" colspan="2">
            <br>
            </td>
          </tr>

          <tr>
            <td width="100%" colspan="2">
            <br>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="email">Estado: </label>
              </div>
            </td>
            <td>
              <div class="form-group">
                <select class="form-control" id="sexo" name="sexo">
                  <option value="X">...</option>
                  <option value="X">Sao Paulo</option>
                  <option value="M">Minas Gerias</option>
                  <option value="F">Mato Groso de Sul</option>
                  <option value="F">Florianopolis</option>
                  </select>
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

          <tr>
            <td colspan="2">
              <button type="submit" class="btn btn-success btn-block btn-lg">Responder Questionário</button>
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
