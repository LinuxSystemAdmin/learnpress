<?php
/**
 * Template for displaying the content of current question
 *
 * @author  ThimPress
 * @package LearnPress
 * @version 1.0
 */

if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $quiz;

if( ! $quiz ){
	return;
}
if ( !$quiz->has( 'questions' ) ) {
	return;
}
$user = learn_press_get_current_user();
?>
<div class="quiz-question-content">
	<form method="post" id="learn-press-quiz-question" name="learn-press-quiz-question" action="">
		<?php do_action( 'learn_press_before_display_quiz_question', $quiz->current_question, $quiz, $user ); ?>
		<?php
		if ( $quiz->current_question ):
			$question_answers = $user->get_question_answers( $quiz->id, $quiz->current_question->id );
			$quiz->current_question->render( array( 'answered' => $question_answers ) );
		endif;
		?>
		<?php do_action( 'learn_press_after_display_quiz_question', $quiz->current_question, $quiz, $user ); ?>
	</form>
</div>