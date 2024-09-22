<?php

namespace wp_last_modified\inc;
use wp_last_modified\inc\LastModified;

add_filter('manage_page_posts_columns', 'wp_last_modified\inc\add_columns', 10, 1);
add_filter('manage_page_posts_custom_column', 'wp_last_modified\inc\populate_columns', 10, 2);
function add_columns($columns){

    $columns['last_modified_user'] = __('Last Modified By', 'manage_posts_columns');
    $columns['last_modified_date']  = __('Last Modified Date', 'manage_posts_columns');

    return $columns;

}

function populate_columns($column, $post_id){
    $last_mod = new LastModified($post_id);

if($column == 'last_modified_user'){
        
    echo $last_mod->get_last_modified_user();
}

if($column == 'last_modified_date'){
    echo $last_mod->get_last_modified_date();
}

}