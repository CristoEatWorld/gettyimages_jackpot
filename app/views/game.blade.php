<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>GettyImages Jackpot</title>
    <meta name="description" content="" />
    {{HTML::script('js/swfobject.js')}}
    
    <script>
        var flashvars = {
        };
        var params = {
            menu: "false",
            
            allowFullscreen: "true",
            allowScriptAccess: "always",
            bgcolor: "",
            wmode: "direct" // can cause issues with FP settings & webcam
        };
        var attributes = {
            id:"main"
        };
        swfobject.embedSWF(
            "{{ URL::asset('swf/main.swf') }}", 
            "altContent", "100%", "100%", "10.0.0", 
            "{{ URL::asset('swf/expressInstall.swf') }}", 
            flashvars, params, attributes);
    </script>
    <style>
        html, body { height:100%; overflow:hidden; }
        body { margin:0; }
    </style>
</head>
<body>
    <div id="altContent">
        <h1>GettyImages Jackpot</h1>
        <p><a href="http://www.adobe.com/go/getflashplayer">Get Adobe Flash player</a></p>
    </div>
</body>
</html>