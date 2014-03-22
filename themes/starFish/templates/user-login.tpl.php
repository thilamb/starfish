#<?php
#  /* print the variables if needed to allow for
#  individual field theming or breaking them up. */
#  print '<pre>';
#  print_r($variables);
#  print '</pre>';
#?>


<?php
 /* split the username and password from the submit button
   so we can put in links above */

    print drupal_render($form['name']);
    print drupal_render($form['pass']);
    print drupal_render($form['form_build_id']);
    print drupal_render($form['form_id']);
    print drupal_render($form['actions']);
?>

<div class="login-photo">
    <img src="<?php print base_path() . drupal_get_path('theme', 'starFish') . '/images/bee.jpg'; ?>"
        alt="Login" title="Login" width='327' height='221' />
    <!-- <img src="<?php print base_path() . drupal_get_path('theme', 'starFish') . '/images/bee.jpg'; ?>"
            alt="Login" title="Login" width='327' height='221' /> -->
</div>
