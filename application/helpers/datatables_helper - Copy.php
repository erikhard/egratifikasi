<?php 
/*
 * function that generate the action buttons edit, delete
 * This is just showing the idea you can use it in different view or whatever fits your needs
 */
function get_buttons($id)
{	
    $ci= & get_instance();
    $html='<span class="actions">';
	
		$html .="<a class='btn btn-info' href='".base_url()."index.php/tolak/edit/".$id."'>
										<i class='halflings-icon white edit'></i>  
									</a> ";
		$html .="<a class='btn btn-danger' href='".base_url()."index.php/tolak/hapus/".$id."'>
										<i class='halflings-icon white trash'></i>  
									</a> ";
		$html.='</span>'; 
    
    return $html;
}