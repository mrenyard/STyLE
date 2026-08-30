<?php
/**
 * STyLE - A Semantically Themed & Layered Element based CSS Framework
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
 ?>
      <fieldset>
        <div class="rate range field<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="Expanded description of expected field&nbsp;content">
          <label for="comprehensive:<?=$_GET['state']; ?>:star">Rating</label>
          <input id="comprehensive:<?=$_GET['state']; ?>:star" name="comprehensive:<?=$_GET['state']; ?>:star" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" type="range" min="1" max="10"step="1"<?=($_GET['state'] !== 'new') ? ' value="' . ($_GET['state'] !== 'error' ? '2' : '') . '"' : ''; ?>>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:star:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:star:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:star:ind">&cross; Error! Correct format is</span>
          <span class="hint">a number from 1 to 10.</span>
<?php } ?>
        </div>
        <div class="harts rate range field<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="Expanded description of expected field&nbsp;content">
          <label for="comprehensive:<?=$_GET['state']; ?>:harts">Rating</label>
          <input id="comprehensive:<?=$_GET['state']; ?>:harts" name="comprehensive:<?=$_GET['state']; ?>:harts" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" type="range" min="1" max="10"step="1"<?=($_GET['state'] !== 'new') ? ' value="' . ($_GET['state'] !== 'error' ? '2' : '') . '"' : ''; ?>>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:hart:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:hart:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:hart:ind">&cross; Error! Correct format is</span>
          <span class="hint">a number from 1 to 10.</span>
<?php } ?>
        </div>
      </fieldset>
