<?php
include 'libs/load.php';
?>
<!doctype html>
<html lang="en">
<?php load_template("_head"); ?>
  <style>

.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;}

.form-signup {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signup .checkbox {
  font-weight: 400;
}

.form-signup .form-floating:focus-within {
  z-index: 2;
}

</style>
</head>
  <body>
<?php load_template("_header"); ?>
<?php load_template("_signup"); ?>
  <script src="/photogram/assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
