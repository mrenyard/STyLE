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
    <script>
if (document.location.search.includes('import=')) {
  let importIndex = document.location.search.indexOf('import=') + 7;
  let importEnd = document.location.search.indexOf('&', importIndex) > -1 ? document.location.search.indexOf('&', importIndex) : document.location.search.length;
  let importNames = document.location.search.substring(importIndex, importEnd).split('|');
  importNames.forEach(function(importName) {
    if (importName.indexOf('state-') > -1) { document.documentElement.setAttribute('class', 'js'); }
    var checkbox = document.querySelector('input[value="'+ importName +'"]');
    if (checkbox) { checkbox.checked = true;}
  });
}
var checkboxes = document.getElementById('css-import').querySelectorAll('input[type="checkbox"]');
checkboxes.forEach(function(checkbox) {
  if (checkbox.checked) {
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = '../' + checkbox.name + '/' + checkbox.value + '.css';
    document.head.appendChild(link);
    if (link.href.toString().indexOf('state-') >= 0) {
      document.documentElement.classList.replace('no-js', 'js');
    }
  }
});
document.getElementById('css-import').addEventListener('change', function() {
  var checked = [];
  checkboxes.forEach(function(checkbox) {
    if (checkbox.checked) { checked.push(checkbox.value);}
  });
  var search = checked.length > 0 ? '?import=' + checked.join('|') : '';
  document.location.search = search;
});
if (modal != null) {
  if (modal.open == true) { modal.open = false; modal.showModal(); }
}
  </script>
