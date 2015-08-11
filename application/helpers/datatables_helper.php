<?php 
/*
 * function that generate the action buttons edit, delete
 * This is just showing the idea you can use it in different view or whatever fits your needs
 */
function get_buttons($id)
{	
    $ci= & get_instance();
    $html='<span class="actions">';
		$html .="<a class='hapustabel' href='#' id='".$id."'>
										<i class='halflings-icon white trash'></i>  hapus
									</a> ";
		$html.='</span>'; 
    
	/* html .="<a class='hapustabel' href='".base_url()."index.php/tolak/hapustabel/".$id."'>
										<i class='halflings-icon white trash'></i>  
									</a> "; */
									
    return $html;
}