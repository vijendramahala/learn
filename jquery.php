<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <style>
        .pubg {
            margin: 0px;
            padding: 0px;
            height: 0px;
            width: 0px;
        }
        #mini {
            margin: 2px;
            padding: 2px;
            height: 1%;
            width: 3%;
        }
    </style>

<p class = "pubg">❌</p> <br><br>

<button id = "mini">￣</button>
<!-- use mouseenter & dblclick -->
<script>
        $(document).ready(function() {
            $(".pubg").mouseenter(function() {
                alert("Double click to exit the game");
            });
            $(".pubg").dblclick(function() {
                $(this).hide();
            });

            $("#mini").hover(function() {
                alert("Are you Minimize this tab");
            },
            function(){
                $(this).hide();
            }
        );


        });
</script>

    
</body>
</html>