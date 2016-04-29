<?php
?>
<html>
<head>
    <title>Exercise 7</title>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"
            integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
</head>
<body>
    <button id="toggle-data">Toggle Data</button>
    <div id="test-div"></div>

<script type="text/javascript">
    $('#toggle-data').on('click', function(){
        console.log(document.getElementById("test-div").innerHTML);
        if(document.getElementById("test-div").innerHTML == ""){
            $.post("../ajax/getData.php", {file: "file1.txt"}, function(data){
                console.log(data);
                document.getElementById("test-div").innerHTML = data;
            })
        }
    })
</script>
</body>
</html>