# STyLE - The Semantically Themed & Layered Elemental based CSS Framework.
Inspired by RAMP's semantic HTML Template patterns as its base, STyLE works from the premise that semantic web documents and application have all the necessary elements (hooks) for a fully fledged CSS framework. That any content or data structure created with a certain set of principles and conventions can be visually displayed and manipulated with CSS to produce a variety of visually pleasing, user friendly, user centric designs.

### AIs response to the term 'Semantically Themed & Layered Elemental'...

> "Semantically themed & Layered elemental" describes a design approach that combines the meaningful organisation of content with a visually and structurally rich composition.
> ## Semantically Themed
> This concept focuses on the meaning and context of elements within a system, ensuring they relate in a logical and consistent way.
>  - **Meaningful Organisation:** Elements are grouped and related based on their inherent meaning or function, rather than just aesthetics or technical structure. For example, in an artistic context, all items related to a "forest" theme (trees, animals, specific colours) would be conceptually linked.
>  - **Contextual Relevance:** The design ensures that context is maintained, allowing users or systems to understand the relationships between different parts.
    Single Source of Truth: By establishing a consistent logic and shared terminology, it creates a unified view that prevents inconsistencies.
> ## Layered Elemental
> This aspect refers to the composition using distinct, fundamental components arranged in a hierarchical or multi-level structure.
>  - **Elemental Forms:** The design is built from basic, fundamental components or "elements" (e.g., in art: colours, shapes, textures; in data: core data points or metrics).
>  - **Hierarchical Layers:** These elements are organised into different tiers or layers, where higher layers build upon and interact with lower layers.
>  - **Interoperability and Complexity:** The layering allows for the creation of complex interactions and systems from simpler parts, while maintaining the ability to understand information at lower levels. For instance, a complex painting might reveal a "simple play of layered elemental forms" upon closer inspection.
> ## In Summary
> When combined, the phrase suggests a design that is both deeply meaningful and logically structured ("semantically themed") and built up from basic components arranged in an organised hierarchy ("layered elemental"). This approach likely aims for a result that is intuitive to understand, visually rich, and structurally sound."

CSS with STyLE.
## GETTING STARTED WITH STyLE (independently of RAMP).
> **NOTE:** If you are using [RAMP](https://github.com/mrenyard/RAMP) to drive your website/application along with [`Web-Project-Managment-Tools`](https://github.com/mrenyard/Web-Project-Managment-Tools) as recommended by default then you will NOT need to read beyond this point.

To use STyLE simply place the contents of this GitHub repository within a `style` folder below the root of your web directory, most commonly within an `assets` folder.
```
  |
  +-- public_html       (website root folder)
  |  |-- index.php      (existing page)?
  |  +-- head.php       (copied and added head.php file)
  |  +-- assets
  |     +-- style        <-- HELLO from STyLE.
  |     |  +-- combined
  |     |  +-- docs
  |     |  +-- img
  |     |  +-- import
  |     |  |  +-- base.css
  |     |  |  +-- css.manifest
  |     |  |  +-- icons.css.php
  |     |  |  +-- layout-[sub-style].css
  |     |  |  +-- modual-[sub-style].css
  |     |  |  +-- ...
  |     |  +-- scratch
  |     |  +-- type
  |     |  +-- index.html
  |     |  +-- make.scratch
  |     |  +-- README.md
  |     +-- func
  |     +-- media
  --- ramp.ini        (local initialization file)
```
## Development Mode Switching
For development mode switching that breaks down into individual CSS files for easier debugging as will as injecting scratch CSS files to 'Cascade' overwrite existing live CSS, you will want to have some kind of server-side code like the below PHP.
### Using PHP.
Copy the below PHP code into a file named `head.php` to save at the root of your website.
```php
<?php
/**
 * Determine if we are in development mode based off the subdomain being 'dev'
 * and include individual CSS files if so, otherwise include the combined CSS file.
 * Also allow for scratch CSS files to be included via a GET parameter in dev mode.
 */
$DEV_MODE = (explode('.', $_SERVER['HTTP_HOST'])[0] == 'dev');
if ($DEV_MODE && isset($_GET['scratch'])) {
  $SCRATCH__CSS = explode('|', $_GET['scratch']);
  unset($_GET['scratch']);
}
$cssManifest = $_SERVER["DOCUMENT_ROOT"].'/assets/style/import/css.manifest';
if ($DEV_MODE && file_exists($cssManifest)) {
  $STYLE_SERVER = '//'.$_SERVER["HTTP_HOST"].'/assets/style';
  foreach (file($cssManifest) as $line) {
    $line = trim($line);
    if((strpos($line,';') !== 0) && ( $line !== '')) {

?>    <link rel="stylesheet" href="<?=$STYLE_SERVER; ?>/import/<?=$line; ?>.css">
<?php }} if (isset($SCRATCH__CSS)) { foreach ($SCRATCH__CSS as $cssScratchFile) { ?>
    <link rel="stylesheet" href="<?=$STYLE_SERVER; ?>/scratch/<?=$cssScratchFile; ?>.css">
<?php }} ?>
    <link rel="stylesheet" href="<?=$STYLE_SERVER; ?>/import/icons.css.php">
    <script src="/assets/func/extlibs/modernizr-custom.js"></script>
<?php } else {

  $STYLE_SERVER = '//style.'.$_SERVER["HTTP_HOST"];
  $mostRecentDate = '2000-01-01'; // date before RAMP
  $dir =  $_SERVER["DOCUMENT_ROOT"].'/assets/style/combined/';
  chdir($dir);
  $matches = glob('*.css');
  if (is_array($matches) && !empty($matches)){
    foreach($matches as $match){
      $date = explode('.', $match)[0];
      $mostRecentDate = ($mostRecentDate < $date) ? $date : $mostRecentDate;
    }
  }
?>    <link rel="stylesheet" href="<?=$STYLE_SERVER; ?>/combined/<?=$mostRecentDate; ?>.css">
    <link rel="stylesheet" href="<?=$STYLE_SERVER; ?>/import/icons.css.php">
    <script src="/assets/func/extlibs/modernizr-custom.js"></script>
<?php } ?>
```
then add as a PHP include in the head of all web pages that are to use STyLE CSS.
```html
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <title>[Page Title]</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,interactive-widget=resizes-content">
<?php include("head.php"); ?>
  </head>
  <body>
    ...
  </body>
</html>
```

