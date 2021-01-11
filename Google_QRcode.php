<title>PHP使用Google API產生QR code並使用PHP下載</title>
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script>
    $(function () {
        $("#qrcreate").click(function(){
            createqrcode();
        });
        $("#range").change(function (){
            createqrcode();
        });
        function createqrcode(){
            var input_text = $("input_text").val();
            var width = $("#range").val();
            var rectangle = width + "x" + width;
            var url ="https://chart.googleapis.com/chart?chs=" + rectangle + "&cht=qr&chl=" + input_text + "&choe=UTF-8&chld=M|2";
            var qr_code = "<img alt='Your QRcode' src'" + url + "' />";
            
            $('#qrcode').html(qr_code);
            $('#range_value').html(width);
        }

        $('#down_img_btn').click(function(){
            var input_text = $("#input_text").val();
            var range = $("#range").val();
            $.ajax({
                url: "down_img.php",
                data:"&input_text=" +input_text + "&range=" +range,
                type:"POST",
                dataType:'text',
                success: function(message){
                    document.getElementById("message").innerHTML=message;
                },
                error: function(jqXHR, textStatus, errorThrown){
                    document.getElementById("message").innerHTML=errorThrown;
                }
            });
        });
    });
</script>

資料內容：
<input id="input_text" name="input_text" type="text" />
<input id="qrcreate" type="button" value="建立QRcode" />
<br />
QR code大小：
<input id="range" name="range" max="300" min="50" step="10" type="range" value="170" />
Range Value:
<label id="range_value">170</label><br />
<input id="down_img_btn" name="down_img" type="button" value="下載圖片" />
<div id="message"></div>
<div id="qrcode"></div>