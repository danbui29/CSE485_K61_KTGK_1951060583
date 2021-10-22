<?php
$conn = mysqli_connect('localhost', 'root', '', 'exam');
if (!$conn) {
    die('Không thể kết nối');
}
?>

<main class="container">
    <div class="bg-gray-light ">
        <h4 class="px-5 mx-4 fw-bolder d-flex justify-content-center ">
            HỆ THỐNG QUẢN LÝ BÀI KIỂM TRA
        </h4>
    </div>
    <form action="process-add.php" method="post">
        <div class="form-group row">
            <label for="id_e" class="col-sm-2 col-form-label">Mã bài thi: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id_e" name="id_e" placeholder="1234">
            </div>
        </div>
        <div class="form-group row">
            <label for="exam-tittle_e" class="col-sm-2 col-form-label">Tên bài thi: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="exam-tittle_e" name="exam-tittle_e" placeholder="Công nghệ web">
            </div>
        </div>
        <div class="form-group row">
            <label for="exam_datetime_e" class="col-sm-2 col-form-label">Ngày thi: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="exam_datetime_e" name="exam_datetime_e" placeholder="2021-10-10">
            </div>
        </div>
        <div class="form-group row">
            <label for="duration_e" class="col-sm-2 col-form-label">Thời gian làm bài: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="duration_e" name="duration_e" placeholder="45">
            </div>
        </div>
        <div class="form-group row">
            <label for="total_question_e" class="col-sm-2 col-form-label">Số câu hỏi:</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="total_quetion_e" name="total_question_e" placeholder="50">
        </div>
        <div class="form-group row">
            <label for="marks_per_right_answer_e" class="col-sm-2 col-form-label">Điểm cho mỗi câu trả lời đúng:</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="marks_per_right_answer_e" name="marks_per_right_answer_e" placeholder="1">
            </div>
        </div>
        <div class="form-group row">
            <label for="created_on_e" class="col-sm-2 col-form-label">Ngày tạo bài thi:</label>
            <div class="col-sm-10">
                <input type="Date" class="form-control" id="created_on_e" name="created_on_e">
            </div>
        </div>
        <div class="form-group row">
            <label for="status_exams_e" class="col-sm-2 col-form-label">Trạng thái:</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="status_exams_e" name="status_exams_e" placeholder="Pending">
            </div>
        </div>
        <div class="form-group row">
            <label for="exam_code_e" class="col-sm-2 col-form-label">Mã truy cập bài thi:</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="exam_code_e" name="exam_code_e" placeholder="1234">
            </div>
        </div>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-success" name ="btns">Lưu lại</button>
        </div>
        </div>
    </form>
</main>
