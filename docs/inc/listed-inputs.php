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
      <fieldset id="comprehensive:lists">
        <legend>LISTED INPUTS</legend>
        <fieldset class="checkbox list required wide" title="Expanded description of expected field content">
          <legend>List of multi selectable checkboxes (unordered)</legend>
          <ul>
            <li>
              <input id="comprehensive:checkbox-list1:item1" name="comprehensive:checkbox-list1:item1" type="checkbox">
              <label for="comprehensive:checkbox-list1:item1">An Option of Four Select Any Relevant</label>
            </li>
            <li>
              <input id="comprehensive:checkbox-list1:item2" name="comprehensive:checkbox-list1:item2" type="checkbox">
              <label for="comprehensive:checkbox-list1:item2">Another Option of Four Select Any Relevant</label>
            </li>
            <li>
              <input id="comprehensive:checkbox-list1:item3" name="comprehensive:checkbox-list1:item3" type="checkbox">
              <label for="comprehensive:checkbox-list1:item3">This Option of Four Select Any Relevant</label>
            </li>
            <li>
              <input id="comprehensive:checkbox-list1:item4" name="comprehensive:checkbox-list1:item4" type="checkbox">
              <label for="comprehensive:checkbox-list1:item4">That Option of Four Select Any Relevant</label>
            </li>
            <li>
              <input id="comprehensive:checkbox-list1:item5" name="comprehensive:checkbox-list1:item5" type="checkbox">
              <label for="comprehensive:checkbox-list1:item5">Them Option of Four Select Any Relevant</label>
            </li>
          </ul>
        </fieldset>
        <fieldset class="checkbox list required wide error" title="Expanded description of expected field content">
          <legend>List of multi selectable checkboxes (ordered)</legend>
          <ol>
            <li>
              <input id="comprehensive:checkbox-list2:item1" name="comprehensive:checkbox-list2:item1" type="checkbox">
              <label for="comprehensive:checkbox-list2:item1">An Option of Four Select Any Relevant</label>
            </li>
            <li>
              <input id="comprehensive:checkbox-list2:item2" name="comprehensive:checkbox-list2:item2" type="checkbox">
              <label for="comprehensive:checkbox-list2:item2">Another Option of Four Select Any Relevant</label>
            </li>
            <li>
              <input id="comprehensive:checkbox-list2:item3" name="comprehensive:checkbox-list2:item3" type="checkbox">
              <label for="comprehensive:checkbox-list2:item3">This Option of Four Select Any Relevant</label>
            </li>
            <li>
              <input id="comprehensive:checkbox-list2:item4" name="comprehensive:checkbox-list2:item4" type="checkbox">
              <label for="comprehensive:checkbox-list2:item4">That Option of Four Select Any Relevant</label>
            </li>
            <li>
              <input id="comprehensive:checkbox-list2:item5" name="comprehensive:checkbox-list2:item5" type="checkbox">
              <label for="comprehensive:checkbox-list2:item5">Them Option of Four Select Any Relevant</label>
            </li>
          </ol>
        </fieldset>
        <fieldset class="radio list required wide" title="Expanded description of expected field content">
          <legend>List of single choose radio (ordered)</legend>
          <ol>
            <li>
              <input id="comprehensive:radio-list1:this" name="comprehensive:radio-list1" type="radio">
              <label for="comprehensive:radio-list1:this">This thing</label>
            </li>
            <li>
              <input id="comprehensive:radio-list1:that" name="comprehensive:radio-list1" type="radio">
              <label for="comprehensive:radio-list1:that">That thing</label>
            </li>
            <li>
              <input id="comprehensive:radio-list1:something" name="comprehensive:radio-list1" type="radio">
              <label for="comprehensive:radio-list1:something">Something else</label>
            </li>
            <li>
              <input id="comprehensive:radio-list1:another" name="comprehensive:radio-list1" type="radio">
              <label for="comprehensive:radio-list1:another">Another thing</label>
            </li>
            <li>
              <input id="comprehensive:radio-list1:anything" name="comprehensive:radio-list1" type="radio">
              <label for="comprehensive:radio-list1:anything">Anything at all</label>
            </li>
          </ol>
        </fieldset>
        <fieldset class="radio list required wide error" title="Expanded description of expected field content">
          <legend>List of single choose radio (unordered)</legend>
          <ul>
            <li>
              <input id="comprehensive:radio-list2:this" name="comprehensive:radio-list2" type="radio">
              <label for="comprehensive:radio-list2:this">This thing</label>
            </li>
            <li>
              <input id="comprehensive:radio-list2:that" name="comprehensive:radio-list2" type="radio">
              <label for="comprehensive:radio-list2:that">That thing</label>
            </li>
            <li>
              <input id="comprehensive:radio-list2:something" name="comprehensive:radio-list2" type="radio" checked>
              <label for="comprehensive:radio-list2:something">Something else</label>
            </li>
            <li>
              <input id="comprehensive:radio-list2:another" name="comprehensive:radio-list2" type="radio">
              <label for="comprehensive:radio-list2:another">Another thing</label>
            </li>
            <li>
              <input id="comprehensive:radio-list2:anything" name="comprehensive:radio-list2" type="radio">
              <label for="comprehensive:radio-list2:anything">Anything at all</label>
            </li>
          </ul>
        </fieldset>
      </fieldset>