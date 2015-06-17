<?php drupal_add_css(drupal_get_path('module','moderation_panel').'/css/moderation.css', array('group'=> CSS_DEFAULT, 'type' => 'file')); ?>
<?php drupal_add_css(drupal_get_path('theme','quipu_theme_1').'/css/archive.css', array('group'=> CSS_DEFAULT, 'type' => 'file')); ?>
<?php drupal_add_js(drupal_get_path('module', 'moderation_panel').'/js/control_panel.js'); ?>
<table class="publish_controls">
  <tr>
    <td>
      <?php print render($publish); ?>
    </td>
    <td>
      <?php print render($contentious); ?>
    </td>
    <td>
      <?php print render($donotpublish); ?>
    </td>
    <td>
      <?php print render($to_edit); ?>
    </td>
  </tr>
</table>
<div id="audio_story_edit_header">
<!--  <div id="progress_container">
    <div id="moderation" class="progress_light <?php print $moderation; ?>">1</div>
    <div id="subtitle-sent" class="progress_light <?php print $subs_sent; ?>">S</div>
    <div id="subtitles-es" class="progress_light <?php print $subs_es; ?>">ES</div>
    <div id="subtitles-en" class="progress_light <?php print $subs_en; ?>">EN</div>
    <div id="phoneline_on" class="progress_light large <?php print $phoneline; ?>"><br />Phoneline</div>
    <div id="internet_on" class="progress_light large <?php print $internet; ?>"><br />Internet</div>
  </div> -->
  <div id="audio-player-wrapper">
    <div id="subtitle-container"></div>
    <div id="player-close-btn"></div>
    <div id="src-icon"></div>
    <canvas id="player-sound-vis" width="740" height="306"></canvas>
    <div id="progress-bar"><div id="progress"></div></div>
    <div id="player-controls-wrap">
      <div id="play-pause-btn" class="player-controls"></div>
      <div id="volume-btn" class="player-controls"></div>
      <div id="lang-select" class="player-controls"></div>
      <div id="player-info-wrap" class="player-controls">
        <div id="player-name" class="player-text"></div>
      	<div id="player-date" class="player-text"></div>
      	<div id="player-time" class="player-text"></div>
      </div>
      <div id="player-next-thread" class="player-controls">>>Next Story: Herbalinda Quinde Garcia</div>
    </div>
    <div id="volume-container"><input type="range" id="volume" min="0" max="100" step="1" value="1"/></div>
    <div id="lang-container"><div id="es-button" class="lang-button">Espanol</div><div id="en-button" class="lang-button">English</div></div>
  </div>
<!--  <div id="audio_nid"><?php echo $form['#node']->nid; ?></div>
  <div id="name"><?php print render($form['#node']->field_name['und'][0]['value']); ?></div>
  <div id="length"><?php print render($form['#node']->field_length['und'][0]['value']); ?></div>
  <div id="input_method"><?php echo $form['#node']->name; ?></div> -->
  <div id="submitted_date"><?php echo $form['#node']->date; ?></div>
  <div id="audio_link"><a type="audio/mpeg" onClick="MyWindow=window.open('<?php print render($form['#node']->field_audio_link['und'][0]['value']); ?>','MyWindow','width=600,height=300'); return false;" href="#">PLAY ORIGINAL AUDIO</a></div>

</div>
<!-- <div id="panel_right">
  <div class="publish_controls">
    <?php 
      print render($publish);
      print render($contentious);
      print render($donotpublish);
      print render($to_edit);
    ?>
  </div>
  <div class="select_input">
    <?php
      print render($lang);
      print render($role);
      print render($gender);
      print render($location);
    ?>
  </div> 
</div> -->
<div class="text_input">
  <?php
    print render($title);
    print render($name);
  ?>
  <table>
    <tr>
      <td>
        <?php print render($lang); ?>
      </td>
      <td>
        <?php print render($role); ?>
      </td>
    </tr>
    <tr>
      <td>
        <?php print render($gender); ?>
      </td>
      <td>
        <?php print render($location); ?>
      </td>
    </tr>
  </table>
</div>
<div id="testimony-controls">
  <table>
    <tr>
      <td>
        <div id="refresh-link" class="action-button">Refresh Amara Link</div>
      </td>
      <td>
        <div id="pull-es" class="action-button">Download New ES Subs</div>
      </td>
      <td>
        <div id="pull-en" class="action-button">Download New EN Subs</div>
      </td>
    </tr>
    <tr>
      <td>
        <div id="preview" class="action-button">Preview Testimony</div>
      </td>
      <td>
        <div id="remove" class="action-button">Remove From Amara</div>
      </td>
      <td>
        <div id="unpublish" class="action-button emergency-button">UNPUBLISH</div>
      </td>
    </tr>
  </table>
</div>
<div class="file_uploads">
  <?php
    print render($basic_edit);
    print render($knots_file);
  ?>
</div>
<div class="notes">
  <?php print render($notes); ?>
</div>
<!-- <div class="section_complete">
  <?php print render($moderated_btn); ?>
</div> -->
<div class="save">
  <?php print render($buttons); ?>
</div>
<div class='extra'>
  <?php 
    echo drupal_render_children($form); 
  ?>
</div>
<div id="pop-up"></div>