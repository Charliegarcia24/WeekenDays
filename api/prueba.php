<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="jquery-3.3.1.min.js"></script>
</head>
<body>
    
</body>
</html>
<script>
    $('.playersTeam').on( 'click', function () {
        var categoria = $(this).attr("team");
        sendAjax(categoria, cargarJugadores);
    });

    function cargarJugadores(params) {
        console.dir(params);
    }

    function sendAjax(categoria, callback) {
        var url = 'http://172.16.205.6/api/categorias/' + categoria;
        console.log(url);
        $.ajax({
            url: url,
            dataType: "json",
            encoding: "UTF-8",
        })
        .success(function(data) {
            callback(data);
        })
        .error(function(data) {
            console.log("ERROR:" + JSON.stringify(data));
            console.log(data["DATA"]);
            //console.log(data);
            console.log("Ajax terminado desde sendAjax con json ERROR: " + data.statusText + " " + data.responseText);
        });
    }

</script>