<?php
add_action('save_post', 'wplm_set_last_modified',10,3);

function wplm_set_last_modified($post_id, $post, $update){
    $last_time = new LastModified($post_id);
    // error_log(print_r($last_time->get_current_user(),true));
    $last_time->set_last_modified();
}

