<?php
    $id = $_POST['id_e'];
    $exam_title = $_POST['exam-tittle_e'];
    $exam_datetime = $_POST['exam_datetime_e'];
    $duration = $_POST['duration_e'];
    $total_question = $_POST['total_question_e'];
    $marks_per_right_answer = $_POST['marks_per_right_answer_e'];
    $created_on= $_POST['created_on_e'];
    $status_exams = $_POST['status_exams_e'];
    $exam_code = $_POST['exam_code_e'];
?>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'exam');
    if (!$conn) {
        die('Không thể kết nối');
    }
    ?>z
<?php
    $sql = "INSERT INTO exams (id, exam_title, exam_datetime, duration, total_question,
    marks_per_right_answer, created_on, status_exams, exam_code)
    VALUES ('$id','$exam_title', '$exam_datetime', '$duration', '$total_question',
    '$marks_per_right_answer', '$created_on', '$status_exams', '$exam_code')";

    $result = mysqli_query($conn, $sql);
    if ($result == true) {
        header("Location:index.php");
    } else {
        echo "Lỗi!";
    }

    mysqli_close($conn);
?>