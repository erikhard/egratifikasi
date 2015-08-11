<?php 
/*
 * function that generate the action buttons edit, delete
 * This is just showing the idea you can use it in different view or whatever fits your needs
 */
function get_buttons($id)
{
    $ci= & get_instance();
    $html='<span class="actions">';
    $html .='<a href="http://localhost:8080/e-gratifikasi/example/tutorial_datatables_part2/subscriber/edit/'.$id.'"><img src="http://localhost:8080/e-gratifikasi/example/tutorial_datatables_part2/assets/images/edit.png"/></a>';
    $html .='<a href="http://localhost:8080/e-gratifikasi/example/tutorial_datatables_part2/subscriber/delete/'.$id.'"><img src="http://localhost:8080/e-gratifikasi/example/tutorial_datatables_part2/assets/images/delete.png"/></a>';
    $html.='</span>';
    
    return $html;
}