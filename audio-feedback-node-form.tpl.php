<?php drupal_add_css(drupal_get_path('module','moderation_panel').'/css/response-form.css', array('group'=> CSS_DEFAULT, 'type' => 'file')); ?>
<?php drupal_add_js(drupal_get_path('module','moderation_panel').'/js/response-form.js'); ?>
<?php if(in_array('editor/moderator', array_values($user->roles))==TRUE): ?>
<div id="form-admin-wrap">
<?php print render($name); ?>
<?php print render($length); ?>
<?php print render($lang); ?>
<?php print render($role); ?>
<?php print render($en_comp); ?>
<?php print render($es_comp); ?>
<?php endif; ?>
<div id="response-form-1" class="response-form"> 
  <p class="instruction">Please enter your name. If you wish to remain anonymous please enter 'Anon.'</p>
  <?php print render($name_input); ?>
  <p id="location-instruction" class="instruction">Please type in your postcode or area so that we can map where the responses are coming from.</p>
  <?php print render($location); ?>
  <?php print render($email); ?>
  <div id="form-next-btn" class="form-next"><img src="sites/all/themes/quipu_theme_1/images/icons/next_bt-03.png" class="next-arrow" /></div>
</div>
<div id="response-form-2" class="response-form">
  <?php print render($recorder); ?>
  <div id="form-finish">
    <div class="important-instruction" id="playback-reminder"><div class="important-icon important">!</div><div class="important-text important">Your message is now ready to <strong>go live</strong>. Please make sure you have listened to it back before saving your recording.</div></div>
    <?php echo drupal_render_children($form); ?>
  </div>
</div>
<div id="tutorial-wrapper">
  <img id="tutorial-arrow" class="tutorial-content" src="../sites/all/themes/quipu_theme_1/images/icons/arrow_tour-06.png" />
  <div id="tutorial-box">
    <div id="tutorial-title">1. Microphone Access</div>
    <div id="tutorial-text">Make sure you have allowed Quipu project to access your microphone. This is usually at the top of your browser.</div>
    <div id="tutorial-controls">
      <div id="tutorial-prev"><</div>
      <div id="tutorial-steps-cont">
        <div class="tutorial-step"></div>
        <div class="tutorial-step"></div>
        <div class="tutorial-step"></div>
        <div class="tutorial-step"></div>
      </div>
    <div id="tutorial-next">></div>
  </div>
</div>
<?php if(in_array('editor/moderator', array_values($user->roles))==TRUE): ?>
</div>
<?php endif; ?>