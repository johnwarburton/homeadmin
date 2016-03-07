<?php
$ini_array = parse_ini_file("/Users/minecraft/minecraft-pe/server.properties");
#print_r($ini_array);
file_put_contents("/Users/minecraft/minecraft-pe/server.properties.help", serialize($ini_array));

# http://minecraft.gamepedia.com/Server.properties
# http://pocketmine-mp.readthedocs.org/en/latest/configuration.html
$help = array(
    'server-name' => 'The name of the server: displayed in the server list and when someone is joining the server',
    'server-port' => 'the port the server is hosting (listening) on. Must be between 1025 and 65534',
    'memory-limit' => 'Maximum memory to allocate to the serve rin Megabytes',
    'gamemode' => 'Mode of gameplay: Survival/Creative/Adventure/Spectator',
    'max-players' => 'Maximum number of players',
    'spawn-protection' => '***Remove***',
    'white-list' => '1',
    'enable-query' => '1',
    'enable-rcon' => '1',
    'rcon.password' => '/bi11vMuA7',
    'motd' => 'Message displayed when people join the server',
    'announce-player-achievements' => 'Allows server to announce when a player gets an achievement',
    'allow-flight' => 'Allows users to use flight on your server while in Survival mode, if they have a mod that provides flight installed',
    'spawn-animals' => 'Determines if animals will be able to spawn',
    'spawn-mobs' => '1',
    'force-gamemode' => 'Force players to join in the default game mode',
    'hardcore' => 'If set to true, players will be permanently banned if they die',
    'pvp' => 'Enable PvP on the server. Players will be able to kill each other',
    'difficulty' => 'Difficulty of Server: 
    0 - Peaceful
    1 - Easy
    2 - Normal
    3 - Hard',
    'generator-settings' => '**do not use**',
    'level-name' => 'Saved game folder name',
    'level-seed' => 'A seed for your world',
    'level-type' => 'Determines the type of map that is generated.
    DEFAULT - Standard world with hills, valleys, water, etc.
    FLAT - A flat world with no features, meant for building.
    LARGEBIOMES - Same as default but all biomes are larger.
    AMPLIFIED - Same as default but world-generation height limit is increased.
    CUSTOMIZED - Same as default unless generator-settings is set to a preset.',
    'auto-save' => 'Always save changes to your world',
);
#print_r($help);

?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result='<div class="alert alert-success">Form submitted</div>';

    #echo "yayayyaa";
    #print_r($_POST);

    foreach ($ini_array as $key => $val) {
        if ($_POST[$key] != "") {
            echo "$key: val: $val, pos val: *$_POST[$key]*\n";
        }
    }
}
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
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container bs-docs-container"> <div class=row> <div class=col-md-9 role=main> <div class=bs-docs-section>
            <h1>Edit Minecraft PE server.properties file</h1>
            <form class="form-horizontal" role="form" method="post" action="parse_props.php">
                <?php foreach ($ini_array as $key => $val): ?>
                    <div class="form-group form-group-sm">
                        <label for="<?php echo $key ?>" class="col-sm-2 control-label"><a href=# data-toggle=tooltip title="<?php echo $help[$key] ?>"><?php echo $key ?></a></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control input-sm" id="<?php echo $key ?>" name="<?php echo $key ?>" placeholder="<?php echo $val ?>">
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="form-group form-group-sm">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>

                <div class="form-group form-group-sm">
                    <div class="col-sm-10 col-sm-offset-2">
                        <?php echo $result; ?>	
                    </div>
                </div>
            </form>

        </div> </div> </div>

    </body>
</html>
