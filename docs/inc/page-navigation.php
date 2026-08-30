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
 * 
 * To give your/our visitors more of a clue to where a link is likely to take them we recommend using some
 * descriptive precursors in the links associated title attribute:
 * 1) 'Jump to ...' - Used with most in-page links to assist in navigating within a page.
 * 2) 'Skip to ...' - Simalar to 'Jump to ...' but with the indication that you are bypassing content ahead. 
 * 3) 'Back to ...' - when returning to content that was previously jumped from.
 * 4) 'Here for ...' - Anchor links that denote the start of a section of content.
 * 5) 'For more on [subject]' - Used for links that will take you to another page within this website for more information on a topic.
 * 6) 'this ...(site|application)' - Used for links that will take you to another page within this website. 
 * 7) 'External link to|for ...' - These links will navigate you away from this website to another site.
 */
?>
      <nav>
        <ul id="quick-links">
          <li><a id="accessibility-link" href="/accessibility#main" title="Interacting with, accessing and getting around this web application">Accessibility</a></li>
          <li><a href="#main" title="Skip to Page Main content: {TITLE}">Main Content</a></li>
          <li><a href="#site-nav" title="Jump to Full Site Map (Navigation)">Site Navigation</a></li>
          <li><a href="#me" title="Enter My Account, access favourite tools and settings">My Account - (<abbr title="Matt Renyard">MR</abbr>)</a></li>
          <li><a href="#contentinfo" title="Jump to Site Information: contact address, legal, copyright and privacy statement etc.">Site Information</a></li>
        </ul>
        <form id="quick-search" method="get" action="/search#results">
          <div class="search input">
            <label for="query" title="Here to search {DOMAIN} for the latest content, data and more.">Search</label>
            <input id="query" name="query" type="search" tabindex="0" placeholder="e.g. keyword, contact, organisation.">
          </div>
          <input type="submit" value="Go">
        </form> 
      </nav>
