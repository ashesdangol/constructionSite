<?php 
get_header();

while(have_posts()){
    the_post();
    the_title();
    the_content();
    echo "<hr />";


    $project_locationDate_meta_data = get_post_meta( get_the_ID(), 'project_location_date',true);
    // print_r($project_locationDate_meta_data);
    foreach($project_locationDate_meta_data as $locationDate){

        // PROJECT LOCATION
       echo $locationDate['project_location'];

        //PROJECT STARTING DATE : CURRENT DATE 
       if($locationDate['project_start_date']){
        $sDate= new DateTime( $locationDate['project_start_date']);
        echo $sDate->format('M d, Y ');
       }else{
           $sDate=new DateTime();
           echo $sDate->format('M d, Y ');
       }

        // PROJECT END DATE : ON GOING   
       if($locationDate['project_start_date']){
        $eDate= new DateTime( $locationDate['project_start_date']);
        echo $eDate->format('M d, Y ');
       }else{
        echo "<p> On going </p>";
       }
      
       echo "<hr />";
    }
    echo "<hr />";
    echo "<hr />";

    
    $project_department_tasks_images_meta_data = get_post_meta( get_the_ID(), 'department_tasks_images',true);

    foreach($project_department_tasks_images_meta_data as $p_Dep_Tsk_Img){
        // $p_Dep_Tsk_Img['chosen_department'] ====[id]
       $name_of_department = $p_Dep_Tsk_Img['chosen_department'];

        //NAME OF DEPARTMENT    
        echo get_the_title($name_of_department);
        // DEPARTMENT'S RESPONSIBILITY
        echo $p_Dep_Tsk_Img['department_tasks'];
        echo "<hr />";
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






get_footer();
?>