<?php drupal_add_css(drupal_get_path('module','moderation_panel').'/css/moderation.css', array('group'=> CSS_DEFAULT, 'type' => 'file')); ?>
<div id="audio_story_edit_header">
  <div id="progress_container">
    <div id="moderation" class="progress_light <?php print $moderation; ?>">1</div>
    <div id="subtitle-sent" class="progress_light <?php print $subs_sent; ?>">S</div>
    <div id="subtitles-es" class="progress_light <?php print $subs_es; ?>">ES</div>
    <div id="subtitles-en" class="progress_light <?php print $subs_en; ?>">EN</div>
    <div id="phoneline_on" class="progress_light large <?php print $phoneline; ?>"><br />Phoneline</div>
    <div id="internet_on" class="progress_light large <?php print $internet; ?>"><br />Internet</div>
  </div>
  <div id="audio_nid"><?php echo $form['#node']->nid; ?></div>
  <div id="name"><?php print render($form['#node']->field_name['und'][0]['value']); ?></div>
  <div id="length"><?php print render($form['#node']->field_length['und'][0]['value']); ?></div>
  <div id="input_method"><?php echo $form['#node']->name; ?></div>
  <div id="submitted_date"><?php echo $form['#node']->date; ?></div>
  <div id="audio_link"><a type="audio/mpeg" onClick="MyWindow=window.open('<?php print render($form['#node']->field_audio_link['und'][0]['value']); ?>','MyWindow','width=600,height=300'); return false;" href="#"><?php print render($form['#node']->field_audio_link['und'][0]['value']); ?></a></div>

</div>
<div id="panel_right">
  <div class="publish_controls">
    <?php 
      print render($publish);
      print render($sticky);
    ?>
  </div>
  <div class="select_input">
    <?php
      print render($lang);
      print render($role);
    ?>
  </div>
</div>
<div class="text_input">
  <?php
    print render($title);
    print render($name);
  ?>
</div>
<div class="notes">
  <?php print render($notes); ?>
</div>
<div class="section_complete">
  <?php print render($moderated_btn); ?>
</div>
<div class="save">
  <?php print render($buttons); ?>
</div>
<?php 
  echo drupal_render_children($form); 
?>