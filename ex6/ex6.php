<?php

if (isset($_GET['course'])) {
    $course = $_GET['course'];
    echo "<p>$course is a course!</p>";
}

?>

<html>
<head>
    <title>Exercise 6</title>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"
            integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>

</head>
<body>
<form onsubmit="return validate()">
    <label for="course">Course: </label>
    <input type="text" name="course" id="course" placeholder="CS1520">
    <input type="submit">
</form>

<script>
    function validate() {
        var course = $("#course").val();
        if (course.substring(0, 2).toUpperCase() != "CS") {
            alert('Incorrect format!');
            return false;
        }
        if (course.charAt(2) > 3) {
            alert('Incorrect format!');
            return false;
        }
        for (var i = 3; i < 6; i++) {
            if(isNaN(course.charAt(i))){
                alert('Incorrect format!');
                return false;
            }
        }

        return true;
    }
</script>
</body>

</html>
