<?php 

// get departments
function dynamic_list_departments(){

    
    $departmentPost = new WP_Query(array(
        'posts_per_page'=>-1,
        'post_type'=>'department',
    ));

    $departmentTitles = Array();
    $departmentKeys = Array();

    while ($departmentPost->have_posts()) {
        $departmentPost->the_post();
        $departmentTitles[] = get_the_title();   
    }

    $counter =0;

    foreach($departmentTitles as $key=>$value){
        $key=$value;
        $departmentKeys[$key]=$value;
        $counter++;
    }
    
    return $departmentKeys;
    wp_reset_postdata();
}


// ------------------------------------------------


add_action( 'cmb2_admin_init', 'cmb2_project_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_project_metaboxes() {

    $project_cmb_group_object = new_cmb2_box( array(
		'id'            => 'project_cmb_group_object_id',
		'title'         => __( 'Insert more info about this project', 'cmb2' ),
		'object_types'  => array( 'project', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        
    ) );

    // Project Gallery
    $project_cmb_group_object->add_field( array(
        'name' => 'Current Project\'s Gallery',
        'desc' => 'Upload Images for a slider',
        'id'   => 'current_project_slider',
        'type' => 'file_list',
        'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array( 'type' => 'image' ), // Only images attachment
        // Optional, override default text strings
        'text' => array(
            'add_upload_files_text' => 'Upload Image' // default: "Add or Upload Files"
            // 'remove_image_text' => 'default', // default: "Remove Image"
            // 'file_text' => 'default', // default: "File:"
            // 'file_download_text' => 'default', // default: "Download"
            // 'remove_text' => 'default', // default: "Remove"
        ),
    ) );

   
      // Project Location and Date
      $group_project_location_date= $project_cmb_group_object->add_field( array(
        'desc'       => __( 'Location and Status of a project', 'cmb2' ),
        'id'         => 'project_location_date',
        'type'       => 'group',
        'options' => array(
            'add_button'    => __( 'Add Location/Date', 'cmb2' ),
            'remove_button' => __( 'Remove Location/Date', 'cmb2' )
        )
    ) );
     
    //Project Location 
    $project_cmb_group_object->add_group_field($group_project_location_date, array(
        'name'    => 'Location',
        'desc'    => 'Location(s) of a site',
        'default' => 'Sydney, Australia',
        'id'      => 'project_location',
        'type'    => 'text',

    ) );

    // Project Start Date
    $project_cmb_group_object->add_group_field($group_project_location_date,  array(
        'name'    => 'Start Date',
        'id'      => 'project_start_date',
        'type' => 'text_date_timestamp',
    ) );
     // Project End Date
    $project_cmb_group_object->add_group_field($group_project_location_date,  array(
        'name'    => 'End Date',
        'id'      => 'project_end_date',
        'type' => 'text_date_timestamp',
        'desc'       => 'Leave Blank if its Ongoing'
        
    ) );

    // SELECT DEPARTMENT AND TASK DESCRIPTIONS
    $group_select_description_department = $project_cmb_group_object->add_field( array(
        // 'name'       => __( 'Groupable field', 'cmb2' ),
        'desc'       => __( 'CONSULTANT\'S SPECIFIC ROLE', 'cmb2' ),
        'id'         => 'yourprefix_text_two_meta_field',
        'type'       => 'group',
        
        // 'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
        'options' => array(
            'add_button'    => __( 'Add Department', 'cmb2' ),
            'remove_button' => __( 'Remove Department', 'cmb2' )
        )
    ) );

    // SELECT DEPARTMENT
    $project_cmb_group_object->add_group_field($group_select_description_department, array(
        'name'       => __( 'Department', 'cmb2' ),
        'desc'       => __( 'Select Department', 'cmb2' ),
        'id'         => 'yourprefix_text_three',
        'type'       => 'select',
        'show_option_none' => true,
        'options'     => dynamic_list_departments()
    ) );

    // TASK DESCRIPTIONS
    $project_cmb_group_object->add_group_field($group_select_description_department, array(
        'name'       => __( 'Department\'s Task', 'cmb2' ),
        'desc'       => __( 'List or describe the responsibility of Department', 'cmb2' ),
        'id'         => 'yourprefix_text_four',
        'type'       => 'wysiwyg',
        'options'    => array(
            'media_buttons'=>false,
            'textarea_rows' => get_option('default_post_edit_rows', 5)
            )
        
    ) );


  

 

  



}



?>