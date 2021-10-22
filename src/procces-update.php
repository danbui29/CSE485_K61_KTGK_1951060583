
    <?php
    $id = $_GET['id'];

    $conn = mysqli_connect('localhost', 'root', '', 'exam');
    if (!$conn) {
        die('Không thể kết nối');
    }

    $id = $_POST['id_e'];
    $exam_title = $_POST['exam-tittle_e'];
    $exam_datetime = $_POST['exam_datetime_e'];
    $duration = $_POST['duration_e'];
    $total_question = $_POST['total_question_e'];
    $marks_per_right_answer = $_POST['marks_per_right_answer_e'];
    $created_on= $_POST['created_on_e'];
    $status_exams = $_POST['status_exams_e'];
    $exam_code = $_POST['exam_code_e'];

    if(isset($_POST['btns'])) {


        echo $id."<br>";
        echo $exam_title."<br>";
        echo $exam_datetime."<br>";
        echo $duration."<br>";
        echo $total_question."<br>";
        echo $marks_per_right_answer."<br>";
        echo $created_on."<br>";
        echo $status_exams."<br>";
        echo $exam_code."<br>";
       
        $sql = "UPDATE exams SET id = '$id', exam_title = '$exam_title', exam_datetime = '$exam_datetime', duration = '$duration', total_question = '$total_question', 
        marks_per_right_answer = '$marks_per_right_answer',created_on = '$created_on',status_exams = '$status_exams',status_exams = '$exam_code' WHERE id = '$id'";
        $result = mysqli_query($con, $sql);

        if($result) {
            header("Location:index.php");
        } else {
            echo 'Lỗi.';
        }
    }

    mysqli_close($con);
?>