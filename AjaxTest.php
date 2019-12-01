<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Ajax Test</title>
<link rel="stylesheet" type="text/css" href="my.css">
<script src="ajax.js"></script>
<script>
    function AjaxRequest()
    {
        var user = document.getElementById('user').value;
        var site = "<?=$_SERVER['PHP_SELF']?>";
        var url = "ResponseAjax.php?opcion=AjaxTest&ajax=2&site="+site;
        url = url + "&dummy=" + new Date().getTime();

        request.open("POST", url, true);
        request.onreadystatechange = AjaxUpdatePage;
        request.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        request.send("usuario=" + escape(user) + "&url=" + escape(site));
    }                                

    function AjaxUpdatePage()
    {
        if (request.readyState == 4) {
            if (request.status == 200) {
                var data = request.responseText;
                //alert(data);                                                                                              


                var divTest = document.getElementById('divtest').innerHTML = data;
            } else {
                var message = request.getResponseHeader("Status");
                if ((message.length == null) || (message.length <= 0)) {
                    alert("Error! Request status is " + request.status);
                } else {
                    alert(message);
                }
            }
        }
    }
</script>
</head>
<body>
    <div id="divtest"> Ajax Test </div>  
    <input type="text" id="user" value="">
    <input type="button" onclick="AjaxRequest()" value="EnviarAjax">
</body>
</html>

