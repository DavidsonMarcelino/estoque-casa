<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estoque</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="row m-3 justify-content-left" id="content"></div>
    </body>
    <script>
        var lastRun = null;
        run();

        setInterval(() => {
           run();
        }, 1000);

        function run(){
            $.get('{{env("APP_URL")}}/api/v1/estoques', function(response){
                let html = "";
                
                if(lastRun != 'updated')
                {

                    for(i = 0 ; i < response.data.length ; i++)
                    {
                
                        html += '<div class="col-3 ml-2 px-1" style="border: 1px solid black; height:45vh; border-radius: 8px;">\
                            <div class="row justify-content-center">\
                                <div class="col-8 mt-1 text-center">\
                                    <img src="' + response.data[i].icone + '" style="max-width: 100%;">\
                                    <br><b>' + response.data[i].nome + '</b><br><br>\
                                    <button class="btn btn-danger float-start" onclick="retira(' + response.data[i].id + ')">-</button>\
                                    <span style="font-size: 18pt;">' + response.data[i].quantidade + '</span>\
                                    <button class="btn btn-success float-end" onclick="adiciona(' + response.data[i].id + ')">+</button>\
                                </div>\
                            </div>\
                        </div>';
                    }
                    
                    $('#content').html(html);
                }

                lastRun = 'updated';
            });
        };

        function adiciona(id){
            $.post('{{env("APP_URL")}}/api/v1/adiciona/' + id);
            lastRun = "not updated";
        }

        function retira(id){
            $.post('{{env("APP_URL")}}/api/v1/retira/' + id);
            lastRun = "not updated";
        }
    </script>
</html>