@extends('layouts.main_layout')

@section('content')
    @include('partials.header')
    <div class="toppanel">
    @include('partials.test_top', ['chapter' => $test->chapter])
    </div>

<head>
<style>
    .toppanel {
        background-color: #f5f5f5;
        color: #fff;
        padding-top: 3%;
        padding-bottom: 2%;
        padding-left: 15%;
        padding-right: 15%;
    }

    h1 {
        font-size: 32px;
        font-weight: bold;
        text-align: center;
        margin-top: 50px;
    }

    h3 {
        color: black;
    }

    .theform {
        color: #f5f5f5;
        background: #f5f5f5;
        margin-top: 50px;
        padding: 20px;
        border: 2px solid #e8e8e8;
        border-radius: 10px;
        box-shadow: 0px 3px 5px rgba(0,0,0,0.1);
        margin-left: 20%;
        margin-right: 20%;
    }

    form {
        margin-top: 50px;
        padding: 20px;
        border: 2px solid #ccc;
        border-radius: 10px;
    }

    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    li {
        margin-bottom: 10px;
        color: black;
        display: flex;
        align-items: center;
    }

    label {
        display: inline-block;
        vertical-align: middle;
        margin-left: 10px;
        font-size: 18px;
        color: black;
    }

    button[type="submit"] {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #4a4a4a;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        box-shadow: 0px 3px 5px rgba(0,0,0,0.3);
    }

    button[type="submit"]:hover {
        background-color: #3a3a3a;
        box-shadow: 0px 3px 10px rgba(0,0,0,0.5);
    }
</style>



<h1>Тест</h1>
<div class="theform">
    <form method="post" action="{{ url('/test/check') }}" onsubmit="return validateForm();">
        {{ csrf_field() }}
        <input type="hidden" name="test" value="{{ json_encode($test) }}">
        <?php $questionNumber = 1; ?>
        @foreach ($questionDataList as $key => $question)
            <input type="hidden" name="question{{ $key }}" value="{{ json_encode($question) }}">
            <h3>{{ $questionNumber }}. {{ $question['question'] }}</h3>
            @if ($question['image'] != "")
            <img style="margin: 5px 0 20px 0; width:300px; height:300px" class="fit-picture"
            src="{{ asset('images/' . ($question['image'])) }}"
            alt="Grapefruit slice atop a pile of other slices">
            @endif


            <ul>
                <?php $answerNumber = 1; ?>
                @foreach ($question['answers'] as $answer)
                    @if ($answer === 'Свободный ответ')
                        <li>
                            <input type="text" class="form-control" id="answer{{ $key }}{{ $answerNumber }}" name="answer{{ $key }}[]" placeholder="Введите свой ответ">
                        </li>
                    @else
                        <li>
                            <input type="checkbox" id="answer{{ $key }}{{ $answerNumber }}" name="answer{{ $key }}[]" value="{{ $answerNumber }}">
                            <label for="answer{{ $key }}{{ $answerNumber }}">{{ $answer }}</label>
                        </li>
                    @endif
                    <?php $answerNumber++; ?>
                @endforeach
            </ul>
            <?php $questionNumber++; ?>
        @endforeach
        <button type="submit">Завершить тест</button>
    </form>
</div>


<script>
    function validateForm() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    var textInputs = document.querySelectorAll('input[type="text"]');
    
    // Проверяем, что все чекбоксы выбраны
    for (var i = 0; i < checkboxes.length; i++) {
        if (!checkboxes[i].checked) {
            alert('Пожалуйста, ответьте на все вопросы перед завершением теста.');
            return false;
        }
    }
    
    // Проверяем, что все текстовые поля заполнены
    for (var j = 0; j < textInputs.length; j++) {
        if (textInputs[j].value.trim() === '') {
            alert('Пожалуйста, ответьте на все вопросы перед завершением теста.');
            return false;
        }
    }
    
    return true;
}

</script>
<script>
    function validateFor1m() {

        return true;
    }
</script>

@include('partials.footer')
@endsection

