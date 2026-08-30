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
      <fieldset>
        <legend>WEB ADDRESS (<abbr title="Uniform Resource Locator">URL</abbr>) &amp; SEARCH</legend>
        <div class="url field" data-message="Please ensure Web Address change correctly formatted">
          <label for="comprehensive:new:url">Web Address</label>
          <input id="comprehensive:new:url" name="comprehensive:new:url" placeholder="e.g. https://www.domain-name.com/top-article" type="url">
          <!-- <span class="ind" id="comprehensive:new:url:ind"></span> -->
        </div>
        <div class="search field wide">
          <label for="query" title="Here to search RampApp.org for the latest content, data and more.">Search</label>
          <input id="query" name="query" type="search" tabindex="0" placeholder="e.g. keyword, contact, organisation.">
        </div>
      </fieldset>
