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
?>
    <dialog id="modal"<?=($_GET['open'] === 'true') ? ' open' : ''; ?> data-confirm="Cancel,Confirm" data-submit="Cancel,Submit" data-reload="Wait,Reload"><form method="dialog">
      <header>
        <h1>Available Individual Layered STyLEs</h1>
        <p>The below check boxes allow you to see and select which individual STyLE sheets and modules are include in this current&nbsp;design:</p>
      </header>
      <ol id="css-import">
        <li><label><input type="checkbox" name="import" value="base"> Base (<a href="../import/base.css">base.css</a>)</label></li>
        <li><label><input type="checkbox" name="import" value="base-form"> Base Form (<a href="../import/base-form.css">base-form.css</a>)</label></li>
        <li><s><label><input type="checkbox" name="import" value="base-form-controls"> Base Form Controls (<a href="../import/base-form-controls.css">base-form-controls.css</a>)</label></s></li>
        <li><hr>
          <label><input type="checkbox" name="import" value="element-field"> Element Field (<a href="../import/element-field.css">element-field.css</a>)</label>
        </li>
        <li><label><input type="checkbox" name="import" value="element-listed-selection"> Element Listed Selection (<a href="../import/element-listed-selection.css">element-listed-selection.css</a>)</label></li>
        <li><label><input type="checkbox" name="import" value="element-img-inputs"> Element Image Inputs (<a href="../import/element-img-inputs.css">element-img-inputs.css</a>)</label></li>
        <li><label><input type="checkbox" name="import" value="element-file-upload"> Element File Upload (<a href="../import/element-file-upload.css">element-file-upload.css</a>)</label></li>
        <li><label><input type="checkbox" name="import" value="element-metered"> Element Metered (<a href="../import/element-metered.css">element-metered.css</a>)</label></li>
        <li><label><input type="checkbox" name="import" value="element-editor"> Element Editor (<a href="../import/element-editor.css">element-editor.css</a>)</label></li>
        <li><hr>
          <label><input type="checkbox" name="import" value="layout"> Layout (<a href="../import/layout.css">layout.css</a>)</label>
        </li>
        <li><s><label><input type="checkbox" name="import" value="layout-form-data"> Layout Form Data (<a href="../import/layout-form-data.css">layout-form-data.css</a>)</label></s></li>
        <li><hr>
          <label><input type="checkbox" name="import" value="module-error-tips"> module Form Control Error Tips (<a href="../import/module-error-tips.css">module-error-tips.css</a>)</label>
        </li>
        <li><label><input type="checkbox" name="import" value="module-stickyfoot-footnotes"> Sticky Footer & Popup Footnotes (<a href="../import/module-stickyfoot-footnotes.css">module-stickyfoot-footnotes.css</a>)</label></li>
        <li><label><input type="checkbox" name="import" value="module-article-more-overlay"> Article More Overlay (<a href="../import/module-article-more-overlay.css">module-article-more-overlay.css</a>)</label></li>
        <li><label><input type="checkbox" name="import" value="module-page-nav-search"> In-page Navigation and Site Search (<a href="../import/module-page-nav-search.css">module-page-nav-search.css</a>)</label></li>
        <li><label><input type="checkbox" name="import" value="module-site-navigation"> Main Site Navigation (<a href="../import/module-site-navigation.css">module-site-navigation.css</a>)</label></li>
        <li><hr>
          <label><input type="checkbox" name="import" value="spacing-adaptive"> Spacing (<a href="../import/spacing-adaptive.css">spacing-adaptive.css</a>)</label>
        </li>
        <li><hr>
          <label><input type="checkbox" name="import" value="state"> State (<a href="../import/state.css">state.css</a>)</label>
        </li>
        <li><label><input type="checkbox" name="import" value="state-form-controls"> State Form Controls (<a href="../import/state-form-controls.css">state-form-controls.css</a>)</label></li>
        <li><hr>
          <label><input type="checkbox" name="scratch" value="wireframe"> Wireframe (<a href="../scratch/wireframe.css">wireframe.css</a>)</label>
        </li>
      </ol>
      <footer style="display: flex; justify-content: right;">
        <button formmethod="dialog" autofocus>OK</button>
        <button hidden>Confirm</button>
      </footer>
    </form></dialog>
