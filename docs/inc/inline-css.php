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

.no-js #dynamic-mod { display: none;
} .js #dynamic-mod {
  position:absolute; bottom: .75rem; right: .75rem;
}
.js body:has( #stop-animation:checked ) fieldset .field .ind {
  opacity: 1; z-index: 1; animation: none;
}

body > header:first-child {
  position: fixed; z-index: 500;
  top: 0; right: 0; left: 0; height: 4.25rem;
  padding: 0 var(--inline-padding, .25rem) .25rem;
  text-align: right;
  color: white !important; background-color: black !important;
  a { color: white !important; background-color: transparent !important;
  &[rel="home"] { position: absolute; top: 1rem; left: var(--inline-padding, .25rem); }}
  + * { margin-top: 3.5rem !important; }
} body:has( > header:first-child ) { padding-top: 2rem; }

main > form > h1 {
  padding: 1rem .25rem; overflow: hidden;
  text-wrap: nowrap; text-overflow: ellipsis;
}
main + footer {
  position: relative; height: 7rem;
  background-color: var(--primary-color, rgb(190 190 190));
  > a[href='#top'] { position: absolute; bottom: 1rem; right: 1rem; }
}

main.gallery:not( :has(form:only-child) ),
main.gallery > form:only-child {
  display: grid; gap: 1rem;
  margin: 0; padding: 0;
  > * {
    width: auto;
    margin: 0; padding: 1rem;
    align-items: center;
  }
  > h1 {
    padding-right: 0; align-self: end;
    text-wrap: revert; text-transform: uppercase;
  }
  > figure {
    display: flex; flex-direction: column;
    background-color: rgb(0 0 0 / .25);
    border-radius: 1rem;
      > img {
      width: 2rem; max-width: 100%;
      height: 9rem; margin-bottom: -2em;
      background-color: transparent;
    }
  }
} @media screen and (min-width: 18rem) { /**288px**/
  main.gallery:not( :has(form:only-child) ),
  main.gallery > form:only-child {
    grid-template-columns: repeat(auto-fit, 47%);
  }  
} @media screen and (min-width: 26rem) { /**416px**/
  main.gallery:not( :has(form:only-child) ),
  main.gallery > form:only-child {
    grid-template-columns: repeat(auto-fit, 12rem);
  }
}

    </style>
