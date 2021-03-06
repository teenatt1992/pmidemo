<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

// menus customization
function pmiweb_menu_tree__main_menu($variables){
   if (preg_match("/\bmenu-subnavigation\b/i", $variables['tree'])){
    return '<ul id="menu-navigation">' . $variables['tree'] . '</ul>';
  } else {
    return '<ul class="menu-subnavigation">' . $variables['tree'] . '</ul>';
  }
}

function pmiweb_preprocess_html(&$variables) {

$variables['user_first'] = block_get_blocks_by_region('user_first');
$variables['user_second'] = block_get_blocks_by_region('user_second');
$variables['sidebar_second'] = block_get_blocks_by_region('sidebar_second');
$variables['sidebar_first'] = block_get_blocks_by_region('sidebar_first');
$variables['sidebar_first1'] = block_get_blocks_by_region('sidebar_first1');
$variables['header_first'] = block_get_blocks_by_region('header_first');
$variables['preface_first'] = block_get_blocks_by_region('preface_first');
$variables['preface_second'] = block_get_blocks_by_region('preface_second');
$variables['preface_third'] = block_get_blocks_by_region('preface_third');
$variables['postscript_first'] = block_get_blocks_by_region('postscript_first');
$variables['postscript_second'] = block_get_blocks_by_region('postscript_second');
$variables['postscript_third'] = block_get_blocks_by_region('postscript_third');
$variables['postscript_fourth'] = block_get_blocks_by_region('postscript_fourth');
$variables['header_second'] = block_get_blocks_by_region('header_second');
$variables['preface_first'] = block_get_blocks_by_region('preface_first');
$variables['content'] = block_get_blocks_by_region('content');
$variables['logins'] = block_get_blocks_by_region('logins');
$variables['logos'] = block_get_blocks_by_region('logos');
$variables['header_second1'] = block_get_blocks_by_region('header_second1');

$variables['header_second2'] = block_get_blocks_by_region('header_second2');

$variables['header_second3'] = block_get_blocks_by_region('header_second3');
$variables['header_second4'] = block_get_blocks_by_region('header_second4');

$variables['header_second5'] = block_get_blocks_by_region('header_second5');
$variables['header_second6'] = block_get_blocks_by_region('header_second6');
$variables['header_second7'] = block_get_blocks_by_region('header_second7');
$variables['header_second8'] = block_get_blocks_by_region('header_second8');

$variables['header_second9'] = block_get_blocks_by_region('header_second9');
$variables['header_second10'] = block_get_blocks_by_region('header_second10');
$variables['header_second11'] = block_get_blocks_by_region('header_second11');
$variables['header_second12'] = block_get_blocks_by_region('header_second12');
$variables['header_second13'] = block_get_blocks_by_region('header_second13');

$variables['header_second14'] = block_get_blocks_by_region('header_second14');
$variables['header_second15'] = block_get_blocks_by_region('header_second15');
$variables['header_second16'] = block_get_blocks_by_region('header_second16');
$variables['header_second17'] = block_get_blocks_by_region('header_second17');
$variables['header_second18'] = block_get_blocks_by_region('header_second18');
$variables['header_second19'] = block_get_blocks_by_region('header_second19');


$variables['header_second20'] = block_get_blocks_by_region('header_second20');
$variables['header_second21'] = block_get_blocks_by_region('header_second21');
$variables['header_second22'] = block_get_blocks_by_region('header_second22');
$variables['header_second23'] = block_get_blocks_by_region('header_second23');

$variables['header_second24'] = block_get_blocks_by_region('header_second24');
$variables['header_second25'] = block_get_blocks_by_region('header_second25');
$variables['header_second26'] = block_get_blocks_by_region('header_second26');
$variables['header_second27'] = block_get_blocks_by_region('header_second27');
$variables['header_second28'] = block_get_blocks_by_region('header_second28');
$variables['header_second29'] = block_get_blocks_by_region('header_second29');



$variables['header_second30'] = block_get_blocks_by_region('header_second30');
$variables['header_second31'] = block_get_blocks_by_region('header_second31');
$variables['header_second32'] = block_get_blocks_by_region('header_second32');
$variables['header_second33'] = block_get_blocks_by_region('header_second33');

$variables['header_second34'] = block_get_blocks_by_region('header_second34');
$variables['header_second35'] = block_get_blocks_by_region('header_second35');
$variables['header_second36'] = block_get_blocks_by_region('header_second36');
$variables['header_second37'] = block_get_blocks_by_region('header_second37');
$variables['header_second38'] = block_get_blocks_by_region('header_second38');
$variables['header_second39'] = block_get_blocks_by_region('header_second39');

 drupal_add_js(drupal_get_path('theme', 'pmiweb') . '/js/clndr.js', array( 
    'scope' => 'header', 
    'weight' => '1' 
  ));



drupal_add_js(drupal_get_path('theme', 'pmiweb') . '/js/easyResponsiveTabs.js', array( 
    'scope' => 'header', 
    'weight' => '3' 
  ));

drupal_add_js(drupal_get_path('theme', 'pmiweb') . '/js/highcharts.js', array( 
    'scope' => 'header', 
    'weight' => '4' 
  ));
drupal_add_js(drupal_get_path('theme', 'pmiweb') . '/js/jquery.min.js', array( 
    'scope' => 'header', 
    'weight' => '5' 
  ));

drupal_add_js(drupal_get_path('theme', 'pmiweb') . '/js/moment-2.2.1.js', array( 
    'scope' => 'header', 
    'weight' => '6' 
  ));

drupal_add_js(drupal_get_path('theme', 'pmiweb') . '/js/responsiveslides.min.js', array( 
    'scope' => 'header', 
    'weight' => '7' 
  ));



drupal_add_js(drupal_get_path('theme', 'pmiweb') . '/js/site.js', array( 
    'scope' => 'header', 
    'weight' => '8' 
  ));

drupal_add_js(drupal_get_path('theme', 'pmiweb') . '/js/underscore-min.js', array( 
    'scope' => 'header', 
    'weight' => '9' 
  ));
drupal_add_js(drupal_get_path('theme', 'pmiweb') . '/js/tabcontent.js', array( 
    'scope' => 'header', 
    'weight' => '10' 
  ));

drupal_add_js(drupal_get_path('theme', 'pmiweb') . '/js/ddmenu.js', array( 
    'scope' => 'header', 
    'weight' => '11' 
  ));

}
?>
<?php
/**
* This snippet loads a custom page-forum.tpl.php layout file when
* users click through to the login, request password or register pages
*/




?>
<?php
/**
 * Remove tabs on article content type
 */
function pmiweb_preprocess_page(&$variables, $hook)
{
 if (!empty($variables['node']) && $variables['node']->type == 'pics'  )
    {
    $to_be_removed = array('node/%/edit', 'node/%/view', 'node/%/display', 'node/%/registrations', 'node/%/register', 'node/%/visitors');
    foreach ($variables['tabs'] as $group_key =>$tab_group)
        {
            if (is_array($tab_group))
            {
                foreach ($tab_group as $key =>$tab)
                {
                    if (isset($tab['#link']['path']) && in_array($tab['#link']['path'], $to_be_removed))
                    {
                    unset($variables['tabs'][$group_key][$key]);
                    }
                }
            }
        }
    }

    if (!empty($variables['node']) && $variables['node']->type == 'training'  )
    {
    $to_be_removed = array('node/%/edit', 'node/%/view', 'node/%/display', 'node/%/registrations', 'node/%/register', 'node/%/visitors');
    foreach ($variables['tabs'] as $group_key =>$tab_group)
        {
            if (is_array($tab_group))
            {
                foreach ($tab_group as $key =>$tab)
                {
                    if (isset($tab['#link']['path']) && in_array($tab['#link']['path'], $to_be_removed))
                    {
                    unset($variables['tabs'][$group_key][$key]);
                    }
                }
            }
        }
    }

 if (!empty($variables['node']) && $variables['node']->type == 'events'  )
    {
    $to_be_removed = array('node/%/edit', 'node/%/view', 'node/%/display', 'node/%/registrations', 'node/%/register', 'node/%/visitors');
    foreach ($variables['tabs'] as $group_key =>$tab_group)
        {
            if (is_array($tab_group))
            {
                foreach ($tab_group as $key =>$tab)
                {
                    if (isset($tab['#link']['path']) && in_array($tab['#link']['path'], $to_be_removed))
                    {
                    unset($variables['tabs'][$group_key][$key]);
                    }
                }
            }
        }
    }
}
?>



<?php
function pmiweb_preprocess_node(&$vars) {
     if ($blocks = block_get_blocks_by_region('header_second21')) {
      $vars['header_second21'] = $blocks;
  }
if ($blocks = block_get_blocks_by_region('header_second3')) {
      $vars['header_second3'] = $blocks;
  }
if ($blocks = block_get_blocks_by_region('header_second14')) {
      $vars['header_second14'] = $blocks;
  }
if ($blocks = block_get_blocks_by_region('preface_second')) {
      $vars['preface_second'] = $blocks;
  }
if ($blocks = block_get_blocks_by_region('postscript_first')) {
      $vars['postscript_first'] = $blocks;
  }
if ($blocks = block_get_blocks_by_region('postscript_second')) {
      $vars['postscript_second'] = $blocks;
  }
if ($blocks = block_get_blocks_by_region('header_second')) {
      $vars['header_second'] = $blocks;
  }
if ($blocks = block_get_blocks_by_region('header_second15')) {
      $vars['header_second15'] = $blocks;
  }
if ($blocks = block_get_blocks_by_region('header_second18')) {
      $vars['header_second18'] = $blocks;
  }
if ($blocks = block_get_blocks_by_region('header_second23')) {
      $vars['header_second23'] = $blocks;
  }
if ($blocks = block_get_blocks_by_region('header_second29')) {
      $vars['header_second29'] = $blocks;
  }

if ($blocks = block_get_blocks_by_region('header_second24')) {
      $vars['header_second24'] = $blocks;
  }
if ($blocks = block_get_blocks_by_region('header_second25')) {
      $vars['header_second25'] = $blocks;
  }
if ($blocks = block_get_blocks_by_region('header_second26')) {
      $vars['header_second26'] = $blocks;
  }

}
?>
<?php
  // Only show if $match is true
  $match = true;

 
// Which node types to NOT show block
  $types = array('pics');

 
// Match current node type with array of types
  if (arg(0) == 'node' && is_numeric(arg(1))) {
    $nid = arg(1);
    $node = node_load(array('nid' => $nid));
    $type = $node->type;
    if(in_array($type, $types)) {$match=false;}
  }

  return
$match;
?>
