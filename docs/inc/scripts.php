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

addStyleSheet = function(type, name) {
  var link = document.createElement('link');
  link.rel = 'stylesheet';
  link.href = '../' + type + '/' + name + '.css';
  document.head.appendChild(link);
};

var currentQuery = document.location.search;
if (currentQuery !== '') {
  var search = document.location.search.substring(1).split('&');
  search.forEach(function(param) {
    let paramName = param.split('=')[0];
    let paramValue = param.split('=')[1];
    if (paramName === 'import') {
      var importNames = paramValue.split('|');
      importNames.forEach(function(importName) {
        if (importName.indexOf('state-') >= 0) { document.documentElement.setAttribute('class', 'js'); }
        var checkbox = document.querySelector('input[value="'+ importName +'"]');
        if (checkbox) { checkbox.checked = true;}
      });
    } else if (paramName === 'scratch') {
    paramValue.replace('scratch=wireframe', '');
    if (paramValue.indexOf('wireframe') >= 0) {
        paramValue = (paramValue.indexOf('|wireframe') >= 0) ? paramValue.replace('|wireframe', '') : paramValue.replace('wireframe', '');
        document.querySelector('input[name="wireframe"]').checked = true;
      }
      document.querySelector('input[name="scratch"]').value = paramValue;
    }
  });
}

var form = document.forms[document.forms.length - 1];
Array.from(form.elements).forEach((i) => {
  if (i.name === 'import' && i.checked) {
    addStyleSheet(i.name, i.value);
  } else if (i.name === 'scratch' && i.value.length > 0) {
    i.value.split('|').forEach(function(scratchName) {
      if (scratchName.length > 0) {
        addStyleSheet('scratch', scratchName);
      }
    });
    
  } else if (i.name === 'wireframe' && i.checked) {
    addStyleSheet('scratch', 'wireframe');
  }
});

form.addEventListener('change', function() {
  var importList = [], scratch = '', wireframe = false;
  Array.from(form.elements).forEach((i) => {
    if (i.name === 'import' && i.checked) { importList.push(i.value);}
    if (i.name === 'scratch' && i.value.length > 0) { scratch = i.value; }
    if (i.name === 'wireframe' && i.checked) { wireframe = true; }
  });
  var newQuery = (importList.length > 0) ? '?import=' + importList.join('|') : '';
  if (scratch !== '') { newQuery += (newQuery.includes('?import=')) ? '&scratch=' + scratch : '?scratch=' + scratch; }
  if (wireframe === true) { newQuery += (newQuery.includes('&scratch=')) ? '|wireframe' : '&scratch=wireframe'; }
  document.location.search = newQuery;
});

  </script>
