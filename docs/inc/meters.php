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
      <fieldset class="list wide">
        <legend>List of metered (GCSE Results)</legend>
        <ol>
          <li>
            <meter id="exam:literature:grade" min="0" max="9" low="3.5" high="6.5" optimum="7" value="8">(Grade 8)</meter>
            <label for="exam:literature:grade">GCSE English Literature</label>
          </li>
          <li>
            <meter id="exam:maths:grade" min="0" max="9" low="3.5" high="6.5" optimum="7" value="7">(Grade 7)</meter>
            <label for="exam:maths:grade">GCSE Mathmatics</label>  
          </li>
          <li>
            <meter id="exam:physics:grade" min="0" max="9" low="3.5" high="6.5" optimum="6" value="7">(Grade 7)</meter>
            <label for="exam:physics:grade">GCSE Physics (Science 1)</label>
          </li>
          <li>
            <meter id="exam:computing:grade" min="0" max="9" low="3.5" high="6.5" optimum="7" value="6">(Grade 6)</meter>
            <label for="exam:computing:grade">GCSE Computing</label>
          </li>
          <li>
            <meter id="exam:art:grade" min="0" max="9" low="3.5" high="6.5" optimum="7" value="5">(Grade 5)</meter>
            <label for="exam:art:grade">GCSE Art and Design</label>
          </li>
          <li>
            <meter id="exam:pe:grade" min="0" max="9" low="3.5" high="6.5" optimum="7" value="2">(Grade 2)</meter>
            <label for="exam:pe:grade">GCSE Physical Education</label>
          </li>
        </ol>
      </fieldset>
      <fieldset id="output:meter-gtb">
        <div class="hearts rate range field" title="Expanded description of expected field content" data-value="7">
          <label for="comprehensive:existing:heart">Rating (modified)</label>
          <input id="comprehensive:existing:heart" name="comprehensive:existing:hart" type="range" min="1" max="10" value="7">
        </div>
        <div class="meter field">
          <label for="comprehensive:meter-gtb:low">Metered (e.g. disk usage)</label>
          <meter id="comprehensive:meter-gtb:low" min="0" max="100" low="60" high="79" optimum="50" value="50">50% used disk usage</meter>
        </div>
        <div class="meter field">
          <label for="comprehensive:meter-gtb:mid">Metered (e.g. disk usage)</label>
          <meter id="comprehensive:meter-gtb:mid" min="0" max="100" low="60" high="79" optimum="50" value="70">70% used disk usage</meter>
        </div>
        <div class="meter field">
          <label for="comprehensive:meter-gtb:heigh">Metered (e.g. disk usage)</label>
          <meter id="comprehensive:meter-gtb:heigh" min="0" max="100" low="60" high="79" optimum="50" value="80">80% used disk usage</meter>
        </div>
      </fieldset>
