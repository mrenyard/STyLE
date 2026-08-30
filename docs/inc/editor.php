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
      <div class="editor">
        <fieldset class="toolbar">
          <legend>Editor Toolbar (editor):</legend>
          <div class="icon button field" title="Emphasize text [italic](*)">
            <button id="person:new:blog:italic" type="button"></button>
            <label for="person:new:blog:italic">Italic</label>
          </div>
          <div class="icon button field" title="Strongly emphasize text [bold](**)">
            <button id="person:new:blog:bold" type="button"></button>
            <label for="person:new:blog:bold">Bold</label>
          </div>
          <div class="icon button field" title="Strike through text (~~)">
            <button id="person:new:blog:s" type="button"></button>
            <label for="person:new:blog:s">Strike</label>
          </div>
          <div class="icon button field" title='Mark as quote (")'>
            <button id="person:new:blog:q" type="button"></button>
            <label for="person:new:blog:q">Quote</label>
          </div>
          <div class="icon button field" title="Make text superscrip">
            <button id="person:new:blog:sup" type="button"></button>
            <label for="person:new:blog:sup">Sup</label>
          </div>
          <div class="icon button field" title="Make text subscrip">
            <button id="person:new:blog:sub" type="button"></button>
            <label for="person:new:blog:sub">Sub</label>
          </div>
          <div class="icon button field" title="Mark as abbreviation or acronym [ABBR](*[)">
            <button id="person:new:blog:abbr" type="button"></button>
            <label for="person:new:blog:abbr">ABBR</label>
          </div>
          <div class="icon button field" title="Mark as code [inline](`)">
            <button id="person:new:blog:code" type="button"></button>
            <label for="person:new:blog:code">code</label>
            <!-- select from: code:data-lang=, kbd or samp -->
          </div>
          <div class="icon button field" title="Unordered list of items [bullet](- or * )">
            <button id="person:new:blog:list-unordered" type="button"></button>
            <label for="person:new:blog:list-unordered">-List</label>
          </div>
          <div class="icon button field" title="Ordered list of items [numbered](1.)">
            <button id="person:new:blog:list-ordered" type="button"></button>
            <label for="person:new:blog:list-ordered">#List</label>
          </div>
          <div class="icon button field" title="Footnote (mark and add)">
            <button id="person:new:blog:footnote" type="button"></button>
            <label for="person:new:blog:footnote">Note</label>
          </div>
          <div class="icon button field" title="Add hyperlink [URL]([...]()">
            <button id="person:new:blog:link" type="button"></button>
            <label for="person:new:blog:link">Link</label>
          </div>
          <div class="icon button field" title="Add media (image, video, audio) (![)">
            <button id="person:new:blog:figure" type="button"></button>
            <label for="person:new:blog:figure">Media</label>
          </div>
          <div class="select field">
            <select id="person:new:blog:level">
              <option value="p" selected>Paragraph (normal)</option>
              <optgroup label="Headings">
                <option value="h2"># Heading</option>
                <option value="h3">## Sub Heading</option>
                <option value="h4">### Sub sub Heading</option>
              </optgroup>
              <optgroup label="Lists">
                <option value="ul-li">Unordered List [Bullet](- or * )</option>
                <option value="ol-li">Ordered List [Numbered](1.)</option>
              </optgroup>
              <optgroup label="Feature">
                <option value="blockquote">Blockquote (>)</option>
                <option value="table">Tabular Data (|\n|)</option>
                <option value="pre-code">Specially Formatted Text [code](```)</option>
              </optgroup>
            </select>    
            <label for="person:new:blog:level">Level</label>
          </div>
        </fieldset>
        <textarea spellcheck="true"></textarea>
        <output contenteditable="true" spellcheck="true">
          <p>Some text here!</p>
          <ul>
            <li>...</li>
          </ul>
        </output>
      </div>
