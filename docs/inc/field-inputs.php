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
      <fieldset id="comprehensive:<?=$_GET['state']; ?>">
        <legend><?=strtoupper($_GET['state']); ?></legend>
        <div class="color input field<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="Secondary thematic colour of presentation.">
          <label for="comprehensive:<?=$_GET['state']; ?>:color">Colour</label>
          <input id="comprehensive:<?=$_GET['state']; ?>:color" name="comprehensive:<?=$_GET['state']; ?>:color" type="color" tabindex="<?=($_GET['state'] === 'error') ? '1" autofocus' : '0"'; ?><?=($_GET['state'] !== 'new') ? ' value="' . ($_GET['state'] !== 'error' ? '#1A5FB4' : '') . '"' : ''; ?>>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:color:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:color:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:color:ind">&cross; Error! Correct format is</span>
          <span class="hint">a hash followed by three pairs of hexadecimal (0 through 9 to F) representing the luminescent gradiant of red, green and blue, character string with a character length of exactly 7.<em> Previous value was: #666666.</em></span>
<?php } ?>
        </div>
        <div class="text input field required<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="The name by which you are refered to; in Western culture usually your first name.">
          <label for="comprehensive:<?=$_GET['state']; ?>:given-name">Given Name</label>
          <input id="comprehensive:<?=$_GET['state']; ?>:given-name" name="comprehensive:<?=$_GET['state']; ?>:given-name" type="text" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" placeholder="e.g. John" required pattern="([A-Za-z\-]*){0,20}" maxlength="20"<?=($_GET['state'] !== 'new') ? ' value="' . ($_GET['state'] !== 'error' ? 'John' : '') . '"' : ''; ?>>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:given-name:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:given-name:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:given-name:ind">&cross; Error! Correct format is</span>
          <span class="hint">single latin alphabetical word string with a maximum character length of 20. <em>Previous value was: Matt.</em></span>
<?php } ?>
        </div>
        <div class="tel input field<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="The number used to contact (call or text) said particular persons mobile&nbsp;device.">
          <label for="comprehensive:<?=$_GET['state']; ?>:mobile">Mobile</label>
          <input id="comprehensive:<?=$_GET['state']; ?>:mobile" name="comprehensive:<?=$_GET['state']; ?>:mobile" type="tel" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" placeholder="e.g. 07744 123456" pattern="(?:\+[1-9]{1,3} ?\(0\)|\+[1-9]{1,3} ?|0)[0-9\- ]{8,12}" maxlength="20"<?=($_GET['state'] !== 'new') ? ' value="' . ($_GET['state'] !== 'error' ? '+44 7744 123456' : '') . '"' : ''; ?>>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:mobile:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:mobile:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:mobile:ind">&cross; Error! Correct format is</span>
          <span class="hint">valid telephone number string with a maximum character length of 20. <em>Previous value was: 07744 123123.</em></span>
<?php } ?>
        </div>
        <div class="email input field required<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="A uniquely identified electronic mailbox at which you receive written&nbsp;messages.">
          <label for="comprehensive:<?=$_GET['state']; ?>:email">Email</label>
          <input id="comprehensive:<?=$_GET['state']; ?>:email" name="comprehensive:<?=$_GET['state']; ?>:email" type="text" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" placeholder="e.g. jsmith@domain.com" required maxlength="150"<?=($_GET['state'] !== 'new') ? ' value="' . ($_GET['state'] !== 'error' ? 'jsmith@domain.com' : '') . '"' : ''; ?>>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:email:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:email:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:email:ind">&cross; Error! Correct format is</span>
          <span class="hint">validly formatted email address string with a maximum character length of 150. <em>Previous value was: renyard.m@gmail.com.</em></span>
<?php } ?>
        </div>
        <div class="password input field<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="The secret word or phrase that you wish to used to confirm your identity and gain&nbsp;access.">
          <label for="comprehensive:<?=$_GET['state']; ?>:password">Password</label>
          <input id="comprehensive:<?=$_GET['state']; ?>:password" name="comprehensive:<?=$_GET['state']; ?>:password" type="password" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" placeholder="e.g. N0t-Pa55w0rd!" pattern="[a-zA-Z0-9!#$%&\(\)+,-\.:;?\[\]\^*_\{\|\}\{~@ ]{8,35}" maxlength="35"<?=($_GET['state'] !== 'new') ? ' value="' . ($_GET['state'] !== 'error' ? 'N0t-Pa55w0rd!' : '') . '"' : ''; ?>>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:password:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:password:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:password:ind">&cross; Error! Correct format is</span>
          <span class="hint">8 character minimum alphanumeric and special characters (!#$%&+,-.:;?[]^*_{|}{~@') string with a maximum character length of 35.</span>
<?php } ?>
        </div>
        <div class="number input field<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="The non fractional number related to this&nbsp;query">
          <label for="comprehensive:<?=$_GET['state']; ?>:whole-number">Number</label>
          <input id="comprehensive:<?=$_GET['state']; ?>:whole-number" name="comprehensive:<?=$_GET['state']; ?>:whole-number" type="number" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" placeholder="e.g. 42" min="-32768" max="32767" step="1"<?=($_GET['state'] !== 'new') ? ' value="' . ($_GET['state'] !== 'error' ? '42' : '') . '"' : ''; ?>>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:whole-number:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:whole-number:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:whole-number:ind">&cross; Error! Correct format is</span>
          <span class="hint">whole number from -32768 to 32767.</span>
<?php } ?>
        </div>
        <div class="number input field<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="The ammount of money in UK pounds and pence that you have access&nbsp;to.">
          <label for="comprehensive:<?=$_GET['state']; ?>:currency">Currency</label>
          <input id="comprehensive:<?=$_GET['state']; ?>:currency" name="comprehensive:<?=$_GET['state']; ?>:currency" type="number" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" placeholder="e.g. 10.50" min="0" max="999.99" step="0.01"<?=($_GET['state'] !== 'new') ? ' value="' . ($_GET['state'] !== 'error' ? '10.50' : '') . '"' : ''; ?>>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:currency:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:currency:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:currency:ind">&cross; Error! Correct format is</span>
          <span class="hint">2 place decimal point number.</span>
<?php } ?>
        </div>
        <div class="week input field required<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="Expanded description of expected field&nbsp;content">
          <label for="comprehensive:<?=$_GET['state']; ?>:week">Week</label>
          <input id="comprehensive:<?=$_GET['state']; ?>:week" name="comprehensive:<?=$_GET['state']; ?>:week" type="week" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" required min="2022-W01" max="2024-W52" step="any"<?=($_GET['state'] !== 'new') ? ' value="' . ($_GET['state'] !== 'error' ? '2023-W25' : '') . '"' : ''; ?>>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:week:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:week:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:week:ind">&cross; Error! Correct format is</span>
          <span class="hint">valid week formatted (yyyy-W00) from 2022-W01 to 2024-W52 total characters: 8. <em>Previous value was: 2022-W15.</em></span>
<?php } ?>
        </div>
        <div class="month input field required<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="Expanded description of expected field&nbsp;content">
          <label for="comprehensive:<?=$_GET['state']; ?>:month">Month</label>
          <input id="comprehensive:<?=$_GET['state']; ?>:month" name="comprehensive:<?=$_GET['state']; ?>:month" type="month" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" required min="2024-01" max="2024-12" step="1"<?=($_GET['state'] !== 'new') ? ' value="' . ($_GET['state'] !== 'error' ? '2024-06' : '') . '"' : ''; ?>>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:month:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:month:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:month:ind">&cross; Error! Correct format is</span>
          <span class="hint">valid month formatted (yyyy-mm) from 2024-01 to 2024-12 total characters: 7. <em>Previous value was: 2024-03.</em></span>
<?php } ?>
        </div>
        <div class="time input field required<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="Expanded description of expected field&nbsp;content">
          <label for="comprehensive:<?=$_GET['state']; ?>:time">Time</label>
          <input id="comprehensive:<?=$_GET['state']; ?>:time" name="comprehensive:<?=$_GET['state']; ?>:time" type="time" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" required min="08:30" max="17:30" step="1800"<?=($_GET['state'] !== 'new') ? ' value="' . ($_GET['state'] !== 'error' ? '12:00' : '') . '"' : ''; ?>>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:time:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:time:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:time:ind">&cross; Error! Correct format is</span>
          <span class="hint">an appointment slot available ever 30min from 08:30 to 17:30 valid time formatted (hh:mm[:ss]).</span>
<?php } ?>
        </div>
        <div class="date input field required<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="Expanded description of expected field&nbsp;content">
          <label for="comprehensive:<?=$_GET['state']; ?>:date">Date</label>
          <input id="comprehensive:<?=$_GET['state']; ?>:date" name="comprehensive:<?=$_GET['state']; ?>:date" type="date" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" required min="1900-01-01" max="2023-12-31" step="1"<?=($_GET['state'] !== 'new') ? ' value="' . ($_GET['state'] !== 'error' ? '2023-06-15' : '') . '"' : ''; ?>>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:date:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:date:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:date:ind">&cross; Error! Correct format is</span>
          <span class="hint">date of birth from  from 1900-01-01 to 2023-12-31 valid date formatted (yyyy-mm-dd). <em>Previous value was: 2023-06-21.</em></span>
<?php } ?>
        </div>
        <div class="datetime-local input field required<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="Expanded description of expected field&nbsp;content">
          <label for="comprehensive:<?=$_GET['state']; ?>:datetime">Datetime</label>
          <input id="comprehensive:<?=$_GET['state']; ?>:datetime" name="comprehensive:<?=$_GET['state']; ?>:datetime" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" type="datetime-local" required min="2024-03-05T00:00" max="2025-09-30T00:00" step="60"<?=($_GET['state'] !== 'new') ? ' value="' . ($_GET['state'] !== 'error' ? '2024-06-15T12:00' : '') . '"' : ''; ?>>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:datetime:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:datetime:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:datetime:ind">&cross; Error! Correct format is</span>
          <span class="hint">start date and time of your event within the next 18 months from 2024-03-05T00:00 to 2025-09-30T00:00 valid date time formatted (yyyy-mm-ddThh:mm:ss).</span>
<?php } ?>
        </div>
        <div class="select field required<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="Expanded description of expected field&nbsp;content">
          <label for="comprehensive:<?=$_GET['state']; ?>:select-one">Select One</label>
          <select id="comprehensive:<?=$_GET['state']; ?>:select-one" name="comprehensive:<?=$_GET['state']; ?>:select-one" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" required>
            <option value="" selected disabled> -- select an item</option>
            <option value="1">Item one</option>
            <option value="2" <?=($_GET['state'] !== 'new' && $_GET['state'] !== 'error') ? ' selected' : ''; ?>>Item two</option>
            <option value="3" >Item three of three long form</option>
          </select>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:select-one:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:select-one:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:select-one:ind">&cross; Error! Correct format is</span>
          <span class="hint">a value from the list of available options.</span>
<?php } ?>
        </div>
        <fieldset class="checkbox select-many field required compact<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="Expanded description of expected field&nbsp;content" tabindex="-1">
          <legend>Select Many</legend>
          <ul data-placeholder="Select from available" data-placeholder-selected="See selected">
            <li>
              <input id="comprehensive:<?=$_GET['state']; ?>:select-many:item1" name="comprehensive:<?=$_GET['state']; ?>:select-many:item1" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" type="checkbox">
              <label for="comprehensive:<?=$_GET['state']; ?>:select-many:item1">Item one</label>
            </li>
            <li>
              <input id="comprehensive:<?=$_GET['state']; ?>:select-many:item2" name="comprehensive:<?=$_GET['state']; ?>:select-many:item2" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" type="checkbox"<?=($_GET['state'] == 'new' || $_GET['state'] === 'error') ? '' : ' checked'; ?>>
              <label for="comprehensive:<?=$_GET['state']; ?>:select-many:item2">Item two</label>
            </li>
            <li>
              <input id="comprehensive:<?=$_GET['state']; ?>:select-many:item3" name="comprehensive:<?=$_GET['state']; ?>:select-many:item3" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" type="checkbox">
              <label for="comprehensive:<?=$_GET['state']; ?>:select-many:item3">Item three of three in a long format</label>
            </li>
          </ul>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:select-many:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:select-many:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:select-many:ind">&cross; Error! Correct format is</span>
          <span class="hint">at least one item from the list.</span>
<?php } ?>
        </fieldset>
        <div class="rate range field<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="Expanded description of expected field&nbsp;content">
          <label for="comprehensive:<?=$_GET['state']; ?>:default">Rating</label>
          <input id="comprehensive:<?=$_GET['state']; ?>:default" name="comprehensive:<?=$_GET['state']; ?>:default" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" type="range" min="1" max="10" step="1"<?=($_GET['state'] !== 'new') ? ' value="' . ($_GET['state'] !== 'error' ? '2' : '') . '"' : ''; ?>>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:default:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:default:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:default:ind">&cross; Error! Correct format is</span>
          <span class="hint">a number from 1 to 10.</span>
<?php } ?>
        </div>
        <div class="percent range field<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="Expanded description of expected field&nbsp;content">
          <label for="comprehensive:<?=$_GET['state']; ?>:percentage">Percentage range</label>
          <input id="comprehensive:<?=$_GET['state']; ?>:percentage" name="comprehensive:<?=$_GET['state']; ?>:percentage" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" type="range"<?=($_GET['state'] !== 'new') ? ' value="' . ($_GET['state'] !== 'error' ? '50' : '') . '"' : ''; ?>>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:percentage:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:percentage:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:percentage:ind">&cross; Error! Correct format is</span>
          <span class="hint">percentage of the effort (0-100) as a number.</span>
<?php } ?>
        </div>
        <div class="special range field<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="Expanded description of expected field&nbsp;content" data-steps="A B C D E F G H I J K L M N O P Q R S T U V W X Y Z" data-value="M">
          <label for="comprehensive:<?=$_GET['state']; ?>:alphabet">Range special</label>
          <input id="comprehensive:<?=$_GET['state']; ?>:alphabet" name="comprehensive:<?=$_GET['state']; ?>:alphabet" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" type="range"<?=($_GET['state'] !== 'new') ? ' value="' . ($_GET['state'] !== 'error' ? 'M' : '') . '"' : ''; ?>>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:alphabet:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:alphabet:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:alphabet:ind">&cross; Error! Correct format is</span>
          <span class="hint">single character from the A-Z range.</span>
<?php } ?>
        </div>
        <fieldset class="flag field required<?=($_GET['state'] === 'error') ? ' error' : ''; ?>" title="You must agree to terms and conditions to continue to use this&nbsp;site">
          <legend>Terms &amp; conditions (flag)</legend>
          <label for="comprehensive:<?=$_GET['state']; ?>:flag">
            <input id="comprehensive:<?=$_GET['state']; ?>:flag" name="comprehensive:<?=$_GET['state']; ?>:flag:true" tabindex="<?=($_GET['state'] === 'error') ? '1' : '0'; ?>" type="checkbox" required>
            I have read and agree to site terms and&nbsp;conditions.
          </label>
<?php if ($_GET['state'] === 'verifying') { ?>
          <span class="ind verifying" id="comprehensive:<?=$_GET['state']; ?>:flag:ind">&hellip;Verifying</span>
<?php } elseif ($_GET['state'] === 'verified') { ?>
          <span class="ind verified" id="comprehensive:<?=$_GET['state']; ?>:flag:ind">&check; Verified</span>
<?php } elseif ($_GET['state'] === 'error') { ?>
          <span class="ind error" id="comprehensive:<?=$_GET['state']; ?>:flag:ind">&cross; Error! Correct format is</span>
          <span class="hint">to check the box.</span>
<?php } ?>
        </fieldset>
      </fieldset>
