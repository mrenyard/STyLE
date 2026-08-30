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
    <style>

:root {
  --inline-padding: .25rem;
  --popup-offset: var(--inline-padding);
} @media screen and (min-width: 25rem) {
  :root { --inline-padding: .5rem; }
} @media screen and (min-width: 35rem) {
  :root {
    --popup-offset: .5rem;
    --inline-padding: 1rem;
  }
}

.no-js #stop-animation { display: none;
} .js #stop-animation {
  position:absolute; bottom: .75rem; right: .75rem;
}
.js body:has( #stop-animation:checked ) fieldset .field .ind {
  opacity: 1; z-index: 1; animation: none;
}

body > header:first-child {
  position: fixed; z-index: 500;
  top: 0; right: 0; left: 0;
  padding: 1rem 1.25rem .5rem;
  padding: 1rem calc(var(--inline-padding, .25rem) + .25rem) .5rem;
  color: white !important; background-color: black !important;
  a { color: white !important; background-color: transparent !important; }
  + * { margin-top: 2rem !important; }
} body:has( > header:first-child ) { padding-top: 2rem; }

#main > form > h1 {
  padding: 1rem .25rem; overflow: hidden;
  text-wrap: nowrap; text-overflow: ellipsis;
}

#main + footer {
  position: relative; height: 7rem;
  background-color: var(--primary-color, rgb(190,190,190));
  > a[href='#top'] { position: absolute; bottom: 1rem; right: 1rem; }
}
    </style>
