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
<!doctype html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8">
    <title>STyLE Index Page (main + indexes)</title>
    <meta name="description" content="For demonstration of the STyLE CSS Framework's index layout.">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,interactive-widget=resizes-content">
    <link rel="stylesheet" href="../import/icons.css.php">
  </head>
  <body id="SITE_ID">
<?php include("inc/doc-header.php"); ?>
    <header id="top"<?=($_URL['path'] === '/docs2/homepage.php') ? ' class="hero"': ''; ?>>
    </header>
<?php $_GET['hero'] = 'true'; include("inc/main-index.php"); ?>
<?php $_GET['open'] = 'true'; include("inc/dialog.php"); ?>
<?php include("inc/scripts.php"); ?>
  </body>
</html>
