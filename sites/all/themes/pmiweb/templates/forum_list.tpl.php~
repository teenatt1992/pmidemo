<?php
 /**
 * This snippet generates the forum_list layout.
 * This works with Drupal 4.7 and Drupal 5.x
 * For use with a custom forum_list.tpl.php file.
 *
 */

 
global $user; // checks the current user so later the snippet can determine what permissions they have
 
  if ($forums) { // check if there is forums.
 
  //  remove the default header because we're going to add it in under each container name
  //  $header = array(t('Forum'), t('Topics'), t('Posts'), t('Last post'));
 
    foreach ($forums as $key=>$forum) { // this is the start of the forum list routine that generates the containers and forum list.
      if ($forum->container) {
        $description  = '<div style="margin-left: '. ($forum->depth * 30) .px;">\n";
        $description .= ' <div class="name">'. l($forum->name, "forum/$forum->tid/container") ."</div>\n";
        if ($forum->description) {
          $description .= " <div class="description">$forum->description</div>\n";
        }
        $description .= "</div>\n";
        $rows[] = array(array('data' => $description, 'class' => 'container', 'colspan' => 4));
        $rows[] = array(
        array('data' => t('Subject'), 'class' => 'f-subject'), // this sets the column titls and style sheet class names
        array('data' => t('Topics'), 'class' => 'f-topics'),
        array('data' => t('Posts'),'class' => 'f-posts'),
        array('data' => t('Last post'),'class' => 'f-last-reply')
        );
      }
      else {
        $forum->old_topics = _forum_topics_unread($forum->tid, $user->uid);
        if ($user->uid) {
          $new_topics = $forum->num_topics - $forum->old_topics;
        }
        else {
          $new_topics = 0;
        }
        $description  = '<div style="margin-left: '. ($forum->depth * 30) .px;">\n";
        $description .= ' <div class="name">'. l($forum->name, "forum/$forum->tid") ."</div>\n";
        if ($forum->description) {
          $description .= " <div class="description">$forum->description</div>\n";
        }
        $description .= "</div>\n";
        $rows[] = array(
          array('data' => $description, 'class' => 'forum'),
          array('data' => $forum->num_topics . ($new_topics ? '<br />'. l(format_plural($new_topics, '1 new', '@count new'), "forum/$forum->tid", NULL, NULL, 'new') : ''), 'class' => 'topics'),
          array('data' => $forum->num_posts, 'class' => 'posts'),
          array('data' => _forum_format($forum->last_post), 'class' => 'last-reply'));
      }
    }
    /**
     * Only set the table header if page is a container with listing of forums
     */
    if(in_array(arg(1), variable_get('forum_containers', array()))){
            // reverse array
            $nrows = array_reverse($rows,true);
            //get the container description
            $container = taxonomy_get_term(arg(1));
            //add to output
            $rows = $nrows;
            $rows[] = array(
                array('data' => t('Subject'), 'class' => 'f-subject'),
                array('data' => t('Topics'), 'class' => 'f-topics'),
                array('data' => t('Posts'),'class' => 'f-posts'),
                array('data' => t('Last post'),'class' => 'f-last-reply')
                );
            $rows[] = array(array('data' => $container->description, 'class' => 'container', 'colspan' => 4));
            //reverse again to output
            $nrows = array_reverse($rows,true);
            $rows = $nrows;
        }
    print theme('table', $header, $rows);
   
  }
?>
