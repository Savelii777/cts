<!DOCTYPE html>
<html>
<head>
    <title>Редактирование теста</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Редактирование теста</h1>
    <form method="post" action="{{ route('questions.update', $question->id) }}">
    @csrf
    @method('PUT')  
    <!--<div class="form-group">
        <label for="course_number">Введите номер курса:</label>
        <input type="text" class="form-control" id="course_number" name="course_number" required>
    </div>-->

    <div class="form-group">
        <label for="chapter_number">Номер главы:</label>
        <input type="text" class="form-control" id="chapter_number" name="chapter_number" value={{$question["test_id"]}} required>
    </div>

            @php
                $data = json_decode($question->data, true);
            @endphp
            

            <div class="question form-group">
    <label for="question_1">Вопрос:</label>
    <input type="text" class="form-control" id="question_1" name="questions[1][question]" value="{{$data[0]['question']}}" required>

    <div class="form-check">
        <input type="radio" class="form-check-input" name="questions[1][correct_answer]" value="1" required @if($data[0]['correct_answer'] == 1) checked @endif>
        <label class="form-check-label" for="answer_1_1">Ответ 1:</label>
        <input type="text" class="form-control" id="answer_1_1" name="questions[1][answers][1]" value={{$data[0]['answers'][0]}} required>
    </div>

    <div class="form-check">
        <input type="radio" class="form-check-input" name="questions[1][correct_answer]" value="2" required @if($data[0]['correct_answer'] == 2) checked @endif>
        <label class="form-check-label" for="answer_1_2">Ответ 2:</label>
        <input type="text" class="form-control" id="answer_1_2" name="questions[1][answers][2]" value={{$data[0]['answers'][1]}} required>
    </div>

    <div class="form-check">
        <input type="radio" class="form-check-input" name="questions[1][correct_answer]" value="3" required @if($data[0]['correct_answer'] == 3) checked @endif>
        <label class="form-check-label" for="answer_1_3">Ответ 3:</label>
        <input type="text" class="form-control" id="answer_1_3" name="questions[1][answers][3]" value={{$data[0]['answers'][2]}} required>
    </div>
</div>


    <br><br>

    <button type="submit" class="btn btn-primary">Сохранить вопрос</button>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>