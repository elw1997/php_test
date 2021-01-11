<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

<script>
        $(function() {
            $('#auto_autocomplete').autocomplete({
                source: "search.php",
                minLength: 1
            });
        });
</script>

請輸入要搜尋的資料(輸入(0 or G)為開頭都會有資料)： 
<input id="auto_autocomplete" type="text" />