<?php
function moofstrap_form_comment_form_alter(&$form, &$form_state) {
  $form['#attributes']['role'][] = "form";
  $form['actions']['submit']['#attributes']['class'][] = "btn btn-primary";
  $form['actions']['preview']['#attributes']['class'][] = "btn btn-warning";
}
