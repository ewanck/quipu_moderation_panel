<?php drupal_add_css(drupal_get_path('module','moderation_panel').'/css/moderation.css', array('group'=> CSS_DEFAULT, 'type' => 'file')); ?>
<?php drupal_add_css(drupal_get_path('theme','quipu_theme_1').'/css/archive.css', array('group'=> CSS_DEFAULT, 'type' => 'file')); ?>
<?php drupal_add_js(drupal_get_path('module', 'moderation_panel').'/js/hotkeys.js'); ?>
<?php drupal_add_js(drupal_get_path('module', 'moderation_panel').'/js/control_panel.js'); ?>
<?php drupal_add_js(drupal_get_path('module', 'moderation_panel').'/js/audio-player.js'); ?>
<?php drupal_add_js(array('moderation_panel' => array('NID' => $form['#node']->nid)), 'setting'); ?>
<div id="panel-left">
  <div id="status-bar" class='<?php echo $readyclass; ?>'>
    <strong><?php echo $readystate; ?></strong>
  </div>
  <div id="audio-player-wrapper" class="individual">
    <div id="subtitle-container"></div>
    <div id="player-close-btn"><?php echo $form['#node']->nid; ?></div>
    <div id="src-icon"></div>
    <canvas id="player-sound-vis" width="600" height="256"></canvas>
    <div id="progress-bar"><div id="progress"></div></div>
    <div id="player-controls-wrap">
      <div id="play-pause-btn" class="player-controls"></div>
      <div id="volume-btn" class="player-controls"></div>
      <div id="lang-select" class="player-controls"></div>
      <div id="player-info-wrap" class="player-controls">
        <div id="player-time" class="player-text"><?php print render($form['#node']->field_length['und'][0]['value']); ?></div>
        <div id="player-name" class="player-text"><?php echo $form['#node']->name; ?></div>
      	<div id="player-date" class="player-text"><?php echo $form['#node']->date; ?></div>      	
      </div>
    </div>
    <div id="volume-container"><input type="range" id="volume" min="0" max="100" step="1" value="1"/></div>
    <div id="lang-container"><div id="es-button" class="lang-button">Espanol</div><div id="en-button" class="lang-button">English</div></div>
    <audio id="player-source">
      <source src="<?php echo file_create_url($form['#node']->field_audio_file['und'][0]['uri']); ?>" type="audio/mpeg" />
    </audio>
  </div>
  <div id="audio_link"><a type="audio/mpeg" onClick="MyWindow=window.open('<?php print render($form['#node']->field_audio_link['und'][0]['value']); ?>','MyWindow','width=600,height=300'); return false;" href="#">Player not working? Click here to use old version.</a></div> 
  <div id="testimony-controls">
    <div id="controls-tabs">
      <div id="general-tab" class="tab-btn active">General</div>
      <div id="subtitles-tab" class="tab-btn">Subtitles></div>
    </div>
    <table id="general-panel">
      <tr>
        <td><a href="<?php print file_create_url($form['#node']->field_audio_file['und'][0]['uri']); ?>" download ><div class="action-button">Download Original Audio</div></a></td>
        <td><div id="preview" class="action-button">Preview Testimony</div></td>
        <td><div id="unpublish" class="action-button emergency-button">UNPUBLISH</div></td>
      </tr>
    </table>
    <table id="subtitle-panel">
      <tr>
        <td>
	  <div class="action-button">View ES Srt</div>
	</td>
	<td>
	  <div class="action-button">Download ES Srt</div>
	</td>
	<td>
	  <div id="pull-es" class="action-button">Refresh ES Subs</div>
	</td>
      </tr>
      <tr>
        <td>
          <div class="action-button">View EN Srt</div>
        </td>
        <td>
          <div class="action-button">Download EN Srt</div>
        </td>
        <td>
          <div id="pull-en" class="action-button">Download New EN Subs</div>
        </td>
      </tr>
      <tr>
        <td>
          <div id="refresh-link" class="action-button">Refresh Amara Link</div>
        </td>
        <td>
          <div id="remove" class="action-button">Remove From Amara</div>
        </td>
        <td>
        </td>
      </tr>
    </table>
  </div>
</div>
<div id="panel_right">
  <div class="language-select section">
    <div class="step"><strong>1.Language</strong></div>
    <?php print render($lang); ?>
  </div>
  <div class="section"><table class="publish_controls">
    <tr>
      <td colspan="3"><div class="step"><strong>2.Moderation</strong></div></td>
    </tr>
    <tr>
      <td class="single-option">
        <?php print render($publish); ?>
      </td>
      <td class="single-option">
        <?php print render($contentious); ?>
      </td>
      <td class="single-option">
        <?php print render($donotpublish); ?>
      </td>
    </tr>
    <tr>
      <td colspan="3"><div class="instruction">Please select one of the above options. All decisions should be in reference to the <a href="#">Publishing Guidlines</a> and if you are unsure, or unable to apply the guidelines you can send the testimony for review. <strong>NB: If a public official is directly accused of any act of crime or wrongdoing the testimony must be sent for review. <a href="#">See x.x for examples</a></strong></div></td>
    </tr>
    <tr>
      <td colspan="3">
        <?php print render($to_edit); ?>
      </td>
    </tr>
    <tr>
      <td colspan="3"><div class="instruction"><strong> NB: If a testimony can be published but needs to be edited first (specifically if the testimony contains <a href="#">sensitive information</a>) do not choose any of the publishing options above - simply select 'To Edit' and continue.</strong> You can select both 'Publish' and 'To Edit' but the audio will be published now, and replaced with the edited version later, as is the case for only minor quality adjustments.</div></td>
    </tr>
  </table>
  <div class="notes">
    <?php print render($notes); ?>
  </div></div>
  <div class="text_input section">
    <div class="step"><strong>3.Name</strong></div>
    <?php print render($title); ?>
    <div class="instruction">This is the unique name which will be used for <strong>internal reference</strong>. Please add the name used below to the unique number provided <strong>(<?php echo $form['#node']->nid; ?>)</strong> separated by an underscore. Do not use accents or special characters. eg. <?php echo $form['#node']->nid; ?>_Andrea or <?php echo $form['#node']->nid; ?>_Anonymous</div>
    <?php print render($name); ?>
  </div>
  <div class="section">
    <table>
      <tr>
        <td colspan="3"><div class="step"><strong>4.Categories</strong></div></td>
      </tr>
      <tr>
        <td>
          <?php print render($role); ?>
        </td>
        <td>
          <?php print render($gender); ?>
        </td>
        <td>
          <?php print render($location); ?>
        </td>
      </tr>
    </table>
  </div>
  <div class="file_uploads section">
    <div class="step"><strong>5.Edit</strong></div>
    <?php
      print render($basic_edit);
      print render($knots_file);
    ?>
  </div>
<!-- <div class="section_complete">
     <?php print render($moderated_btn); ?>
  </div> -->
  <div class="save">
    <?php print render($buttons); ?>
  </div>
</div>
<div class='extra'>
  <?php 
    echo drupal_render_children($form); 
  ?>
</div>
<div id="pop-up-container"><div id="pop-up"><div id="pop-up-text"></div><div id="pop-up-close">Ok</div></div></div>