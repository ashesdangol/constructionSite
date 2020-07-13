<?php 
get_header();

while(have_posts()){
    the_post();
    the_title();
    the_content();
    echo "<hr>";

}


// get departments
function related_projects(){

    
    $relatedProjects = new WP_Query(array(
        'posts_per_page'=>-1,
        'post_type'=>'project',
        'meta_key' => 'department_tasks_images',
        'meta_query'=> array(
            array(
                'key' => 'department_tasks_images',
                'compare'=> 'LIKE',
                'value' => '"'.get_the_ID().'"'

            )
        )

    ));

 

    while ($relatedProjects->have_posts()) {
        $relatedProjects->the_post();
        $project_department_tasks_images_meta_data = get_post_meta( get_the_ID(), 'department_tasks_images',true);
        foreach($project_department_tasks_images_meta_data as $p_Dep_Tsk_Img){
            // LIST OF IMAGES FOR EACH DEPARTMENT
            echo '<div class="file-list-wrap">';
            foreach($p_Dep_Tsk_Img['department_images'] as $attachment_id => $attachment_url){
                echo '<div class="file-list-image">';
                echo wp_get_attachment_image( $attachment_id, 'thumbnail' );
                echo '</div>';
                echo "<hr />";
            }
            echo '</div>';
    
         }
        
    }
      
    
    return $departmentTitles;
    wp_reset_postdata();
}
related_projects();

get_footer( );
?>