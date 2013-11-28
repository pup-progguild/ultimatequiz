/**
 * Created by hoshi~ on 11/29/13.
 */
// Put all your page JS here

$(function () {
    var options = {
        'randomSortQuestions' : true,
        'randomSortAnswers' : true,
        'preventUnanswered' : false,
        'perQuestionResponseMessaging' : false
    };
    $('#slickQuiz').slickQuiz(options);
});
