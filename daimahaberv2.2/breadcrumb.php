<?php // Breadcrumb navigation
    if (is_page() && !is_front_page() || is_single() || is_category()) {
        echo '<ul class="breadcrumbs">';
        echo '<li class="front_page"><a href="'.get_bloginfo('url').'">'.get_bloginfo('name').'</a> </li>';
 
        if (is_page()) {
            $ancestors = get_post_ancestors($post);
 
            if ($ancestors) {
                $ancestors = array_reverse($ancestors);
 
                foreach ($ancestors as $crumb) {
                    echo '<li>&nbsp;&raquo; <a href="'.get_permalink($crumb).'">'.get_the_title($crumb).'</a> </li>';
                }
            }
        }
 
        if (is_single()) {
            $category = get_the_category();
			if($category[0]->parent != 0) { $mycat = get_category($category[0]->parent);
				echo '<li>&nbsp;&raquo; <a href="' . get_category_link($category[0]->parent) . '">' . $mycat->name . '</a></li>';
			}
            echo '<li>&nbsp;&raquo; <a href="'.get_category_link($category[0]->cat_ID).'">'.$category[0]->cat_name.'</a> </li>';
        }
 
        if (is_category()) {
            $category = get_the_category();
            echo '<li>&nbsp;&raquo; '.$category[0]->cat_name. '</li>';
        }
 
        echo '</ul>';
    } elseif (is_front_page()) {
        // Front page
        echo '<ul class="breadcrumbs">';
        echo '<li class="front_page"><a href="'.get_bloginfo('url').'">'.get_bloginfo('name').'</a></li>';
        echo '<li class="current">Home Page</li>';
        echo '</ul>';
    }
?>