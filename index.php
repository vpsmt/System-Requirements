<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VPSMT System Requirements v1.0</title>

    <!-- Bootstrap -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        h1 {
          margin-bottom: 50px;
        }
        div.alert {
          display: none;
        }
        table td {
          font-weight: bold;
        }
        table td > span {
          padding-left: 10px;
          font-weight: normal;
        }

        #results {
          display: none;
        }

    </style>
  </head>
  <noscript>
      <style type="text/css">
          body {display:none;}
      </style>
      <div>
        Please make sure Javascript is enabled
      </div>
  </noscript>

  <body>
    <div class="container" role="main">
      <h1>VPS-MT System Requirements</h1>

      <div id='results'>

      <div class="alert alert-danger"></div>
      <div class="alert alert-success"></div>
      <table class="table table-hover">
        <thead>
          <th>Requirements</th>
          <th>Status</th>
        </thead>
        <tbody>
          <tr id='php'>
            <td>PHP 5.3.8+<span></span>
            </td>
            <td></td>
          </tr>
          <tr id='mysql'>
            <td>MySQL<span></span></td>
            <td></td>
          </tr>
          <tr id='pdo'>
            <td>MySQL PDO<span></span></td>
            <td></td>
          </tr>
          <tr id='fsockopen'>
            <td>fsockopen<span></span></td>
            <td></td>
          </tr>
          <tr id='ioncube'>
            <td>Ioncube Loader 4.4+<span></span></td>
            <td></td>
          </tr>
          <tr id='mcrypt'>
            <td>mcrypt extension<span></span></td>
            <td></td>
          </tr>
          <tr id='curl'>
            <td>cURL extension<span></span></td>
            <td></td>
          </tr>
        </tbody>
      </table>
      </div><!-- results -->
      <div class="progress progress-striped active">
        <div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
        checking...
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="js/requirement.js"></script>
  </body>
</html>