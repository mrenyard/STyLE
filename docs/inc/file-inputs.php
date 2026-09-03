<?php
/**
 * STyLE - A Semantic Templates with Layered Elements based CSS Framework
 * 
 * Inspired by RAMP's semantic HTML Template patterns as its base, STyLE works from the premise
 * that semantic web documents and application have all the necessary elements (hooks) for a
 * fully fledged CSS framework.
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the
 * GNU General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program; if
 * not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 *
 * @author Matt Renyard (renyard.m@gmail.com)
 * @package STyLE
 * @version 0.0.9;
 */
$class = '';
switch ($_GET['state']) {
  case 'new':
    $buttonTxt = 'Upload';
    break;
  case 'verified':
    $class = ' verified';
  case 'existing':
    $buttonTxt = 'Update';
    break;
  case 'verifying':
    $class = ' verifying';
    $buttonTxt = 'Uploading&hellip;';
    break;
  case 'error':
    $class = ' error';
    $buttonTxt = '&hellip;try again!';
    break;
}
?>
      <fieldset id="file:<?=$_GET['state']; ?>">
        <legend>FILE MANAGMENT (<?=$_GET['state']; ?>)</legend>
        <fieldset class="file<?=$class; ?> required" title="Short video clip (15 seconds to 2 minutes) to introduce&nbsp;yourself"<?=($_GET['state'] === 'new') ? ' tabindex="-1"' : '';?>>
          <legend data-label-active="Choose" data-label-error="ERROR with"><?=($_GET['state'] === 'error') ? 'ERROR with ' : ''; ?>Profile Video</legend>
<?php if ($_GET['state'] === 'existing' || $_GET['state'] === 'verified') { ?>
          <a class="preview-link" href="inc/movie.ogg" title="Link to current file">my-very-long-profile-video-name.odt</a>
<?php } ?>
          <label for="file:<?=$_GET['state']; ?>:video" data-button-uploading="Uploading&hellip;"<?=($_GET['state'] === 'existing' || $_GET['state'] === 'verified') ? ' title="' . $buttonTxt . ' file"' : ''; ?>><?=$buttonTxt; ?></label>
          <input type="file" id="file:<?=$_GET['state']; ?>:video" name="file:<?=$_GET['state']; ?>:video" capture="user" accept="video/ogg, video/mp4, video/3gpp, video/quicktime, video/x-msvideo, video/x-ms-wmv"<?=($_GET['state'] === 'verifying') ? ' disabled' : ''; ?>>
<?php if ($_GET['state'] === 'error') { ?>
          <span class="hint">Valid videos include: your mobile camara video, open-source&nbsp;(.ogg) MPEG-4&nbsp;(.mp4), QuickTime&nbsp;(.qt), MS&nbsp;Video&nbsp;(.avi) &amp; Windows&nbsp;Media&nbsp;Video&nbsp;(.wmv).</span>
<?php } ?>
        </fieldset>
        <fieldset class="file<?=$class; ?> required" title="Small image (headshot, caricature&hellip;) that you wish to represents you on this&nbsp;websites"<?=($_GET['state'] === 'new') ? ' tabindex="-1"' : '';?>>
          <legend data-label-active="Choose" data-label-error="ERROR with"><?=($_GET['state'] === 'error') ? 'ERROR with ' : ''; ?>Profile Picture</legend>
<?php if ($_GET['state'] === 'existing' || $_GET['state'] === 'verified') { ?>
          <a class="preview-link" href="inc/movie.ogg" title="Link to current file">my-very-long-profile-pic-name.odt</a>
<?php } ?>
          <label for="file:<?=$_GET['state']; ?>:profile-pic" data-button-uploading="Uploading&hellip;"<?=($_GET['state'] === 'existing' || $_GET['state'] === 'verified') ? ' title="' . $buttonTxt . ' file"' : ''; ?>><?=$buttonTxt; ?></label>
          <input type="file" id="file:<?=$_GET['state']; ?>:profile-pic" name="file:<?=$_GET['state']; ?>:profile-pic" capture="user" accept="image/png, image/jpeg"<?=($_GET['state'] === 'verifying') ? ' disabled' : ''; ?>>
<?php if ($_GET['state'] === 'error') { ?>
          <span class="hint">Valid images include: direct from mobile camara photos, PNG&nbsp;(.png) or JPEG&nbsp;(.jpg).</span>
<?php } ?>
        </fieldset>
        <fieldset class="file<?=$class; ?>" title="Recorded spoken voice file that you wish to send perspective&nbsp;contacts"<?=($_GET['state'] === 'new') ? ' tabindex="-1"' : '';?>>
          <legend data-label-active="Choose" data-label-error="ERROR with"><?=($_GET['state'] === 'error') ? 'ERROR with ' : ''; ?>Audio Message</legend>
<?php if ($_GET['state'] === 'existing' || $_GET['state'] === 'verified') { ?>
          <a class="preview-link" href="inc/movie.ogg" title="Link to current file">my-very-long-audio-message-name.odt</a>
<?php } ?>
          <label for="file:<?=$_GET['state']; ?>:audio-message" data-button-uploading="Uploading&hellip;"<?=($_GET['state'] === 'existing' || $_GET['state'] === 'verified') ? ' title="' . $buttonTxt . ' file"' : ''; ?>><?=$buttonTxt; ?></label>
          <input type="file" id="file:<?=$_GET['state']; ?>:audio-message" name="file:<?=$_GET['state']; ?>:audio-message" capture="user" accept="audio/ogg, audio/3gpp, audio/aac, audio/midi, audio/x-midi, audio/mp4, audio/mpeg, audio/wav"<?=($_GET['state'] === 'verifying') ? ' disabled' : ''; ?>>
<?php if ($_GET['state'] === 'error') { ?>
          <span class="hint">Valid audio includes: open-source&nbsp;(.ogg) &nbsp;(.aac) &nbsp;(.mid, .midi) &nbsp;(.mp4/3) &nbsp;(.wav)</span>
<?php } ?>
        </fieldset>
        <fieldset class="file<?=$class; ?> required" title="Written summary of your career, educational background, and&nbsp;qualification"<?=($_GET['state'] === 'new') ? ' tabindex="-1"' : '';?>>
          <legend data-label-active="Choose" data-label-error="ERROR with"><?=($_GET['state'] === 'error') ? 'ERROR with ' : ''; ?>Curriculum Vitae</legend>
<?php if ($_GET['state'] === 'existing' || $_GET['state'] === 'verified') { ?>
          <a class="preview-link" href="inc/movie.ogg" title="Link to current file">my-very-long-curriculum-vitae-name.odt</a>
<?php } ?>
          <label for="file:<?=$_GET['state']; ?>:cv" data-button-uploading="Uploading&hellip;"<?=($_GET['state'] === 'existing' || $_GET['state'] === 'verified') ? ' title="' . $buttonTxt . ' file"' : ''; ?>><?=$buttonTxt; ?></label>
          <input type="file" id="file:<?=$_GET['state']; ?>:cv" name="file:<?=$_GET['state']; ?>:cv" accept="application/pdf, application/vnd.oasis.opendocument.text, application/vnd.openxmlformats, application/msword"<?=($_GET['state'] === 'verifying') ? ' disabled' : ''; ?>>
<?php if ($_GET['state'] === 'error') { ?>
          <span class="hint">Valid documents include: PDF&nbsp;(.pdf), OpenDocument&nbsp;Text&nbsp;(.odt) or MS&nbsp;Word&nbsp;(.doc,&nbsp;.docx).</span>
<?php } ?>
        </fieldset>
      </fieldset>
      <script defer>
var fileUploaders = document.getElementsByClassName('file');
for (let i=0, j=fileUploaders.length; i < j; i++) { let o = fileUploaders[i];
  o.addEventListener('change', (e) => {
    let t = e.target; t.parentElement.classList.add('verifying');
    let l = t.labels[0]; l.textContent = l.dataset.buttonUploading;
  });
}
      </script>
