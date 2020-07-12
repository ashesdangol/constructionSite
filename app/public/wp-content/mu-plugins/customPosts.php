<?php 

function customPostTypes(){
    register_post_type( 'project', array(
        'supports'=>array('title','editor', 'thumbnail'),
        'public'=>true,
        'labels'=>array(
            'name'=> 'Projects',
            'add_new_item' => 'Add Project',
            'edit_item' => 'Edit Project',
            'all_items' => 'All Projects',
            'singular_name'=> 'Project'
        ),
        'menu_icon'=>'dashicons-location-alt'
    ));

    register_post_type( 'department', array(
        'public'=>true,
        'labels'=>array(
            'name'=> 'Departments',
            'add_new_item' => 'Add Department',
            'edit_item' => 'Edit Department',
            'all_items' => 'All Departments',
            'singular_name'=> 'Department'
        ),
        'menu_icon'=>'dashicons-location-alt'
    ));

}

add_action('init','customPostTypes');
?>