# https://github.com/bootstrapbay/contact-form/blob/master/index.php
<?php
if (isset($_POST["submit"])) {
    $result='<div class="alert alert-success">Form submitted</div>';
}
?>


<?php
$ini_array = parse_ini_file("/Users/minecraft/minecraft-pe/server.properties");
#print_r($ini_array);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Edit Minecraft PE server.properties file</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    </head>
    <body>
<div class="container bs-docs-container"> <div class=row> <div class=col-md-9 role=main> <div class=bs-docs-section>
<h1>Edit Minecraft PE server.properties file</h1>
<form class="form-horizontal" role="form" method="post" action="parse_props.php">
    <?php foreach ($ini_array as $key => $val): ?>
    <div class="form-group">
        <label for="<?php echo $key ?>" class="col-sm-2 control-label"><?php echo $key ?></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="<?php echo $key ?>" placeholder="<?php echo $val ?>">
        </div>
    </div>
    <?php endforeach; ?>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>

<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
</form>

        </div>
        </div>
    </div>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
