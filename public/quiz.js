/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/quiz.js ***!
  \******************************/
(function () {
  document.getElementById('start-quiz').addEventListener('click', function (e) {
    var data = new FormData();
    data.append('type', document.querySelector('input[name="toggle-quiz-type"]:checked').value);
    fetch('/start-quiz', {
      method: 'POST',
      body: data
    }).then(function (response) {
      return response.json();
    }).then(function (json) {
      console.log(json);
    });
  });
})();
/******/ })()
;