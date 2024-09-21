<?php
class LastModified {

    private $post_id;

    function __construct($post_id){
        $this->post_id = $post_id;
    }

    function get_current_user(){

        return wp_get_current_user();

    }

    function get_date(){

        //Probably don't need to do this at all as WP already sets the post_modified in the database.

//         date_default_timezone_set(get_option('gmt_offset','UTC'));
// error_log('data_format: ' . get_option('gmt_offset','UTC'));
//TODO: figure out the timezone stuff
        return date("F j, Y, g:i a"); 

    }

    function set_last_modified(){

        $current_user = $this->get_current_user();
        error_log('Set last modified user ID');
        update_post_meta($this->post_id, 'last_modified_user', $current_user->ID);

    }






}