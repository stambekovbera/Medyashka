const data = [
    {
        question: "Родина - мать,", answers: [{
            id: '1', value: "Умей за нее постоять", correct: true,
        }, {
            id: '2', value: "Умей ее защищать", correct: false,
        }, {
            id: '3', value: "Умей за нее полежать", correct: false,
        },]
    },
    {
        question: "Человек без Родины,", answers: [{
            id: '4', value: "Что птица без крыльев", correct: false,
        }, {
            id: '5', value: "Что соловей без песни", correct: true,
        }, {
            id: '6', value: "Что ворона без сыра", correct: false,
        },]
    },
    {
        question: "Где кто родится,", answers: [{
            id: '7', value: "Там и не годится", correct: false,
        }, {
            id: '8', value: "Там и живет", correct: false,
        }, {
            id: '9', value: "Там и пригодится", correct: true,
        },]
    },
    {
        question: "В родном краю сокол,", answers: [{
            id: '7', value: "В ином - воробей", correct: false,
        }, {
            id: '8', value: "В другом - человек", correct: false,
        }, {
            id: '9', value: "В чужом - ворона", correct: true,
        },]
    },
    {
        question: "За морем светло,", answers: [{
            id: '7', value: "А у нас светлее", correct: true,
        }, {
            id: '8', value: "А у моря тепло", correct: false,
        }, {
            id: '9', value: "А в море темно", correct: false,
        },]
    },
    {
        question: "Много стран прошел,", answers: [{
            id: '7', value: "А так и не дошел", correct: false,
        }, {
            id: '8', value: "А добро лишь на Родине нашел", correct: true,
        }, {
            id: '9', value: "А добра и не нашел", correct: false,
        },]
    },
    {
        question: "Глупа та птица,", answers: [{
            id: '7', value: "Которой гнездо свое не мило", correct: true,
        }, {
            id: '8', value: "Которой птенцы свои не милы", correct: false,
        }, {
            id: '9', value: "Которая гнездо свое рушит", correct: false,
        },]
    },
    {
        question: "В своем болоте и лягушка поет,", answers: [{
            id: '7', value: "И играет, и живет", correct: false,
        }, {
            id: '8', value: "А на чужбине он молчит", correct: false,
        }, {
            id: '9', value: "А на чужбине и соловей молчит", correct: true,
        },]
    },
    {
        question: "Одна у человека родная мать,", answers: [{
            id: '7', value: "Один у него и Отец", correct: false,
        }, {
            id: '8', value: "Одна у него и Родина", correct: true,
        }, {
            id: '9', value: "Умей за нее постоять", correct: false,
        },]
    },
]

let results = {};

const quiz = document.getElementById('quiz');
const indicator = document.getElementById('indicator');
const questions = document.getElementById('questions');
const result = document.getElementById('result');
const btnPrev = document.getElementById('button-prev');
const btnNext = document.getElementById('button-next');
const controls = document.getElementById('controls');

const renderQuestions = index => {
    renderIndicator(index + 1);

    questions.dataset.currentStep = index;

    const renderAnswers = () => data[index].answers
        .map(answer => `
            <li>
                <label>
                    <input class="answer-input" type="radio" name="${index}" value="${answer.id}">
                    <p>${answer.value}</p>
                </label>
            </li>
        `).join('');

    questions.innerHTML = `
        <div class="quiz-questions-item">
            <div class="quiz-questions-item__question">Составь пословицу</div>
            <div class="quiz-questions-item__ask">${data[index].question}</div>
            <ul class="quiz-questions-item__answers">${renderAnswers()}</ul>
        </div>
    `
};

const renderResults = () => {

    const getCount = () => {
        let count = 0;
        data.map((question, index) => {
            question.answers.map(answer => {
                if (answer.correct && answer.id === results[index]) {
                    count++;
                }
            })
        })

        return count;
    }

    const getAnswers = () => {
        return data.map((question, index) => {
            return `
                <div class="quiz-results-answers-answer">
                  <p class="quiz-results-answers-question">${question.question}</p>
                  <div class="quiz-results-answers-values">
                    ${question.answers.map(answer => answer.correct ? `
                                <p class="correct">${answer.value}</p>
                            ` : `<p class="incorrect">${answer.value}</p>`).join('')}
                    <div class="quiz-results-answers-correct">
                        <h2>Ваш ответ:</h2>
                        ${question.answers.map(answer => {
                if (answer.correct && answer.id === results[index]) {
                    return `<p class="correct">${answer.value}</p>`;
                } else if (answer.correct !== true && answer.id === results[index]) {
                    return `<p class="incorrect">${answer.value}</p>`;
                } else {
                    return '';
                }
            }).join('')}
                    </div>
                  </div>
                </div>
            `
        }).join('');
    }

    result.innerHTML = `
        <div class="quiz-results-info">
                    <div class="quiz-results__title">
                    Твои результаты:
                </div>
                <div class="quiz-results__answers">
                     ${getCount()} из ${data.length}
                </div>
                ${getCount() === data.length ? `<div class="quiz-results__nav goodResult">
                <p>Все ответы правильные! Ты умница!</p>
                <a class="quiz-results__link" href="../../../cabinet.php">Перейти в профиль</a>
            </div>` : `<div class="quiz-results__nav badResult">
                <p>Ты большой молодец! Но попробуй еще раз...</p>
                <button class="quiz-results__btnRestart" id="button-restart">Начать заново</button>
            </div>`}
        </div>
        <div class="quiz-results-answers">
            <h2>Ответы:</h2>
            ${getAnswers()}
        </div>
    `
};

const renderIndicator = (currentStep) => {
    indicator.innerHTML = `${currentStep} / ${data.length}`;
};

quiz.addEventListener('change', event => {
    if (event.target.classList.contains('answer-input')) {
        results[event.target.name] = event.target.value;
        btnNext.disabled = false;
        btnNext.classList.add('activeBtn');
    }
});

quiz.addEventListener('click', event => {
    if (event.target.classList.contains('quiz-controls-next')) {
        const nextQuestionIndex = Number(questions.dataset.currentStep) + 1;

        if (data.length === nextQuestionIndex) {
            questions.classList.add('hide');
            indicator.classList.add('hide');
            controls.classList.add('hide');

            result.classList.add('activeResult');

            renderResults();
        } else {
            if (nextQuestionIndex > 0) {
                btnPrev.disabled = false;
                btnPrev.classList.add("activeBtn");
            }

            renderQuestions(nextQuestionIndex);
        }

        btnNext.disabled = true;
        btnNext.classList.remove('activeBtn');
    }

    if (event.target.classList.contains('quiz-controls-prev')) {
        const nextQuestionIndex = Number(questions.dataset.currentStep) - 1;

        if (nextQuestionIndex === 0) {
            btnPrev.disabled = true;
            btnPrev.classList.remove("activeBtn");
        }

        renderQuestions(nextQuestionIndex);

        btnNext.disabled = true;
        btnNext.classList.remove('activeBtn');
    }

    if (event.target.classList.contains('quiz-results__btnRestart')) {
        result.innerHTML = '';
        results = {};

        btnPrev.disabled = true;
        btnPrev.classList.remove("activeBtn");

        questions.classList.remove('hide');
        indicator.classList.remove('hide');
        controls.classList.remove('hide');

        result.classList.remove('activeResult');

        renderQuestions(0);
    }
});

renderQuestions(0);