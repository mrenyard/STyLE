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
    <main id="main-data" title="Here for Page Main content on: Application (DATA) Style"><form action="#main-data" method="post"><a href="#main-data">#</a>
      <header>
        <h1>Comprehensive (new)</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas laudantium, amet eveniet nesciunt eligendi aspernatur quidem dolor in a dolorum impedit voluptatum optio aperiam illum nisi accusantium delectus recusandae eaque.</p>
      </header>
<?php $_GET['state'] = 'new'; include("field-inputs.php"); ?>
      <footer>
        <menu>
          <li><a href="#">&laquo;</a></li>
          <li><input type="submit" value="Update"></li>
          <li><a href="#">&raquo;</a></li>
        </menu>
        <a href="#top" title="Jump back to Top-of-page (in-page Navigation)">top</a>
      </footer>
    </form></main>
