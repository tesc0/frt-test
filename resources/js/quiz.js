(function() {

    if (document.getElementById('start-quiz') !== null) {
        document.getElementById('start-quiz').addEventListener('click', function(e) {

            let type = document.querySelector('input[name="toggle-quiz-type"]:checked').value;

            let data = new FormData();
            data.append('type', type);
            data.append('_token', document.getElementById('csrf_token').value);
            data.append('lastname', document.getElementById('lastname').value);
            data.append('name', document.getElementById('name').value);
            data.append('email', document.getElementById('email').value);

            fetch('/start-quiz', {
                method: 'POST',
                body: data
            }).then(response => response.json()).then(json => {
                console.log(json);
                if (json.success == "1") {

                    let input_type = 'radio';
                    if (type != "binary") {
                        input_type = 'checkbox';
                    } 

                    let html = '';
                    html += "<span id='quiz_countdown' class='font-bold text-xl fixed top-50 right-3'></span>";
                    for (let i = 0; i < json.questions.length; i++) {
                        html += "<div>";
                        html += "<p class='font-bold'>" + json.questions[i].question + "</p>";
                        
                        for (let j = 0; j < json.questions[i].answers.length; j++) {

                            let input_name = "answer[" + json.questions[i].id + "][]";
                            let input_value = json.questions[i].answers[j].id;

                            html += "<label><input class='m-3' type='" + input_type + "' name='" + input_name + "' value='" + input_value + "'>" + json.questions[i].answers[j].answer + "</label><br>";
                        }

                        html += "</div>";
                    }
                    html += "<br>";
                    html += "<input type='hidden' id='quiztime_left' value=''>";
                    html += "<input type='hidden' id='quiz_id' value='" + json.quizId + "'>";
                    html += "<button id='submit-quiz' class='rounded-xl border-green-600 border-2 border-solid px-3 py-2 mb-6 text-green-600 hover:text-white hover:bg-green-600'>Submit quiz</button>";
                    
                    var quiz_time = 60 * 5;
                    var quiz_timer = setInterval(function(){
                        quiz_time--;
                        let formatted_quiztime = new Date(quiz_time * 1000).toISOString().substring(14, 19);
                        document.getElementById("quiz_countdown").textContent = formatted_quiztime;
                        document.getElementById("quiztime_left").value = quiz_time;
                        if (quiz_time <= 0) {
                            clearInterval(quiz_timer);
                            document.getElementById('submit-quiz').click();
                        }
                    }, 1000);

                    document.getElementById("quiz-content").innerHTML = html;
                }
            });
        });
    }


    if (document.getElementById('admin-login') !== null) {
        document.getElementById('admin-login').addEventListener('click', function() {

            let data = new FormData();
            data.append('email', document.getElementById('email').value);
            data.append('password', document.getElementById('password').value);
            data.append('_token', document.getElementById('csrf_token').value );

            fetch('/login', {
                method: 'POST',
                body: data
            }).then(response => response.json()).then(json => {
                console.log(json);
                if (json.success == "1") {
                    window.location.href = "/admin-landing";
                }
            });
        });
    }

    if (document.getElementById('save-question') !== null) {
        document.getElementById('save-question').addEventListener('click', function() {

            let data = new FormData();
            data.append('type', document.querySelector('input[name="question-type"]:checked').value);
            data.append('question', document.getElementById('question').value);
            data.append('_token', document.getElementById('csrf_token').value);
            if (document.getElementById('question_id') !== null) {
                data.append('question_id', document.getElementById('question_id').value);
            }

            fetch('/save-question', {
                method: 'POST',
                body: data
            }).then(response => response.json()).then(json => {
                console.log(json);
                if (json.success == "1") {
                    window.location.href = "/admin-questions";
                }
            });
        });
    }

    if (document.getElementById('save-answer') !== null) {
        document.getElementById('save-answer').addEventListener('click', function(e) {

            let question_id = document.getElementById('question_id').value;

            let data = new FormData();
            data.append('answer', document.getElementById('new_answer').value);
            data.append('correct', e.target.previousElementSibling.checked ? 1 : 0);
            data.append('question_id', question_id);
            data.append('_token', document.getElementById('csrf_token').value );

            fetch('/save-answer', {
                method: 'POST',
                body: data
            }).then(response => response.json()).then(json => {
                console.log(json);
                if (json.success == "1") {
                    window.location.href = "/admin-question/" + question_id;
                }
            });
        });
    }
    
    let update_buttons = document.querySelectorAll('.update-answer');
    for (let i = 0; i < update_buttons.length; i++) {
        update_buttons[i].addEventListener('click', function(e) {
            let question_id = document.getElementById('question_id').value;

            let data = new FormData();
            console.log(e);
            data.append('answer', e.target.previousElementSibling.previousElementSibling.value);
            data.append('correct', e.target.previousElementSibling.checked ? 1 : 0);
            data.append('answer_id', this.dataset.answer);
            data.append('question_id', question_id);
            data.append('_token', document.getElementById('csrf_token').value );

            fetch('/save-answer', {
                method: 'POST',
                body: data
            }).then(response => response.json()).then(json => {
                console.log(json);
                if (json.success == "1") {
                    window.location.href = "/admin-question/" + question_id;
                }
            });
        });
    }

    document.addEventListener('click', function(event) {
        console.log(event);
        if (event.target.id == "submit-quiz") {            
            let data = new FormData();

            let inputs = document.querySelectorAll('#quiz-content input:checked');
            for (let k = 0; k < inputs.length; k++) {
                data.append(inputs[k].name, inputs[k].value);
            }

            let time_left = document.getElementById('quiztime_left').value;

            data.append('quiz_id', document.getElementById('quiz_id').value);
            data.append('time_left', time_left);
            data.append('_token', document.getElementById('csrf_token').value );

            fetch('/submit-quiz', {
                method: 'POST',
                body: data
            }).then(response => response.json()).then(json => {
                console.log(json);
                if (json.success == "1") {
                    if (time_left > 0) {
                        window.location.href = "/scoreboard";
                    } else {
                        window.location.href = "/stats";
                    }
                }
            });
        }
    });

})();