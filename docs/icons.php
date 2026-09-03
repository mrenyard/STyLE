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
$r = (isset($_POST['r'])) ? $_POST['r'] : 255;
$g = (isset($_POST['g'])) ? $_POST['g'] : 255;
$b = (isset($_POST['b'])) ? $_POST['b'] : 255;
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <title>STyLE Icon Set (default)</title>
    <meta name="description" content="Available icons for the STyLE CSS Framework.">
    <meta name="viewport" content="width=device-width,initial-scale=1,interactive-widget=resizes-content">
    <link rel="stylesheet" href="../import/base.css">
    <link rel="stylesheet" href="../import/icons.css.php">
<?php include("inc/inline-css.php"); ?>
  </head>
  <body id="SITE_ID">
<?php
$dynamicMod = '<form id="icon:color" method="post">
        <p>Set&nbsp;RGB&nbsp;icon&nbsp;color:</p>
        <p><input type="number" name="r" min="0" max="255" size="2"><input type="number" name="g" min="0" max="255" size="2"><input type="number" name="b" min="0" max="255" size="2"><input type="submit" value="Set"/></p>
      </form>
';
include("inc/doc-header.php");
?>
    <main id="main" class="gallery"><form action="#main" method="post">
      <h1>Full Dymanic Icon Set</h1>
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
        <img src="../img/svg.php/<?=$file; ?>/<?=$r; ?>,<?=$g; ?>,<?=$b; ?>/2">
        <figcaption><a href="../img/svg.php/<?=$file; ?>/<?=($r == 255 && $g == 255 && $b == 255) ? '0,0,0' : $r.','.$g.','.$b; ?>/50"><?=$fileName; ?></a></figcaption>
      </figure>
<?php }} ?>
    </form></main>
  </body>
</html>
