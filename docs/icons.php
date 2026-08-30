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
$red = (isset($_POST['red'])) ? $_POST['red'] : 255;
$green = (isset($_POST['green'])) ? $_POST['green'] : 255;
$blue = (isset($_POST['blue'])) ? $_POST['blue'] : 255;
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <title>STyLE Icon Set (default)</title>
    <meta name="description" content="Available icons for the STyLE CSS Framework.">
    <meta name="viewport" content="width=device-width,initial-scale=1,interactive-widget=resizes-content">
    <link rel="stylesheet" href="../import/icons.css.php">
    <style>
main header > h1 { margin-left: 1.25rem; }
.gallery {
  display: grid; gap: 2rem;
    max-width: 100%;
  > header, > footer { grid-column: 1 / span all; grid-row: auto;}
  > figure {
    margin: 1rem; padding: 0 0 1rem;
    width: 12rem; height: 100%;
    align-items: center;
    display: flex; flex-direction: column;
    background-color: rgb(0 0 0 / .25);
    border-radius: 1rem;
    > img {
      width: 2rem; max-width: 100%;
      height: 9rem; margin-bottom: -2em;
      background-color: transparent;
    }
  }
} @media screen and (min-width: 30rem) {
  .gallery {
    max-width: calc(100% - 15rem);
    grid-columns: main-left / span 2;
    grid-template-columns: repeat(auto-fit, 12rem);
  }
}
    </style>
  </head>
  <body id="SITE_ID">
<?php include("inc/doc-header.php"); ?>
    <main id="main"><form action="#main" method="post" class="gallery">
      <header>
        <h1>Full Dymanic ICON Set (icon-*)</h1>
      </header>
<?php
$dir =  '../img/dynamic/';
chdir($dir);
$matches = glob('icon-*.svg.php');
if(is_array($matches) && !empty($matches)){
  foreach($matches as $match){
    $file = \str_replace('.svg.php', '', $match);
    $fileName = \str_replace('icon-', '', $file);
?>
      <figure class="icon" id="<?=$file; ?>">
        <img src="../img/svg.php/<?=$file; ?>/<?=$red; ?>,<?=$green; ?>,<?=$blue; ?>/2">
        <figcaption><a href="../img/svg.php/<?=$file; ?>/<?=$red; ?>,<?=$green; ?>,<?=$blue; ?>/5"><?=$fileName; ?></a></figcaption>
      </figure>
<?php }} ?>
    <footer>
        <menu>
          <li><input type="number" name="red" min="0" max="255" size="4">&nbsp;<input type="number" name="green" min="0" max="255" size="4">&nbsp;<input type="number" name="blue" min="0" max="255" size="4"></li>
          <li><input type="submit" value="Set preffered RGB icon color"></li>
        </menu>
      </footer>
    </form></main>
  </body>
</html>
