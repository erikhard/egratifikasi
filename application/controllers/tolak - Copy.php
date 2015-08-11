<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

     class tolak extends CI_Controller{
		
		public function __construct() {
			parent::__construct();
			$this->load->library('Datatables');
			$this->load->library('table');
			$this->load->database();
		}
	   
	
	
        function add()
        {
			$data['main_view'] = 'tolak/add';
            $this->load->view('template',$data);
        }
		
		function index()
        {
			 $tmpl = array ( 'table_open'  => '<table id="tolak_table" class="table table-striped table-bordered bootstrap-datatable datatable">' );
			$this->table->set_template($tmpl); 
			
		//		$tmpl = array ( 'table_open'  => '<table id="big_table" border="1" cellpadding="2" cellspacing="1" class="mytable">' );
		//		$this->table->set_template($tmpl); 
		
			//$this->table->set_heading('First Name','Last Name','Email');
			//$this->table->set_heading('First Name','Last Name','Email','Action');
			$this->table->set_heading('NIP','NAMA','TANGGAL TERIMA','JENIS GRATIFIKASI','NO.','OPTION');
			//$this->load->view('subscriber_view');
			
			$data['main_view'] = 'tolak/grid';
            $this->load->view('template',$data);
        }
		
		function datatable()
		{
			/* $this->datatables->select('ID,FIRST,LAST,EMAIL')
			->unset_column('ID')
			->add_column('Action', 'A1a1', 'FIRST')
			->from('SUBSCRIBER');  */
			
			$this->datatables->select('ID_TOLAK,EMP_NIP,EMP_NAMA,WAKTU_TOLAK_TGL,JNS_GRAT')
			->unset_column('ID_TOLAK')
		//	->add_column('Avatar', '<img src="$1"/>','AVATAR')
			->add_column('Actions', get_buttons('$1'),'ID_TOLAK')
			//->add_column('Actions', 'Klik here','ID')
			->from('GRAT_TOLAK');
		
			echo $this->datatables->generate();
		}
		
		public function getTable()
		{
			 $aColumns = array('EMP_NIP','EMP_NAMA','WAKTU_TERIMA_TGL','JNS_GRAT');
			 
			/* Indexed column (used for fast and accurate table cardinality) */
			$sIndexColumn = "ID_GRAT";
			 
			/* DB table to use */
			$sTable = "GRAT_TERIMA";
			 
			$iDisplayStart = $this->input->get_post('iDisplayStart', true);
			$iDisplayLength = $this->input->get_post('iDisplayLength', true);
			$iSortCol_0 = $this->input->get_post('iSortCol_0', true);
			$iSortingCols = $this->input->get_post('iSortingCols', true);
			$sSearch = $this->input->get_post('sSearch', true);
			$sEcho = $this->input->get_post('sEcho', true);

			/* Database connection information */
			$gaSql['user']     = "GRATIFIKASI";
			$gaSql['password'] = "1qaz2wsx";
			$gaSql['schema']   = "PELINDO";
			$gaSql['port']     = "1521";
			$gaSql['server']   = "localhost";
			 
			$connection_string = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)
			(HOST = {$gaSql['server']  })(PORT = {$gaSql['port'] })))(CONNECT_DATA=(SID={$gaSql['schema']})))";
			 
			 
			/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
			 * If you just want to use the basic configuration for DataTables with PHP server-side, there is
			 * no need to edit below this line
			 */
			 
			/*
			 * Oracle connection
			 */
			 
			$conn = oci_connect($gaSql['user'], $gaSql['password'], $connection_string);
			if (!$conn) {
				$e = oci_error();
				trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
			}
		 
			 
			
			/*
			 * Paging
			 */
			$sLimit = "";
			if ( isset( $iDisplayLength ) && $iDisplayLength != '-1' )
			{
				$sLimit = "WHERE  rowsNumerator BETWEEN :iDisplayStart AND :iDisplayEnd";
			}
			 
			 
			/*
			 * Ordering
			 */
			  
			 
			//if ( isset( $_GET['iSortCol_0'] ) )
			if ( isset($iSortCol_0) )
			{
				$sOrder = "ORDER BY ";
				 
				//Go over all sorting cols
				for ( $i=0 ; $i<intval( $iSortingCols ) ; $i++ )
				{	
					//If need to sort by current col
					//if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
					if ( $this->input->get_post('bSortable_'.intval($this->input->get_post('iSortCol_'.$i) )) == "true" )
					{
						//Add to the order by clause
						$sOrder .= $aColumns[ intval( $this->input->get_post('iSortCol_'.$i) ) ];
						 
						//Determine if it is sorted asc or desc
						if (strcasecmp(( $this->input->get_post('sSortDir_'.$i)), "asc") == 0)
						{
							$sOrder .=" asc, ";
						}else
						{
							$sOrder .=" desc, ";
						}
					}
				}
				
				 
				//Remove the last space / comma
				$sOrder = substr_replace( $sOrder, "", -2 );
				 
				//Check if there is an order by clause
				if ( $sOrder == "ORDER BY" )
				{
					/*
					* If there is no order by clause - ORDER BY INDEX COLUMN!!! DON'T DELETE IT!
					* If there is no order by clause there might be bugs in table display.
					* No order by clause means that the db is not responsible for the data ordering,
					* which means that the same row can be displayed in two pages - while
					* another row will not be displayed at all.
					*/
					$sOrder = "ORDER BY ".$sIndexColumn;
					 
				}
			}
			 
			 
			/*
			 * Filtering
			 * NOTE this does not match the built-in DataTables filtering which does it
			 * word by word on any field. It's possible to do here, but concerned about efficiency
			 * on very large tables.
			 */
			$sWhere = "";
			$nWhereGenearalCount = 0;
			if (isset($sSearch))
			{
				$sWhereGenearal = $sSearch; //$_GET['sSearch'];
			}
			else
			{
				$sWhereGenearal = '';
			}
		 
			if (!empty($sSearch))
			{
				//Set a default where clause in order for the where clause not to fail
				//in cases where there are no searchable cols at all.
				$sWhere = "WHERE (";
				for ( $i=0 ; $i<count($aColumns)+1 ; $i++ )
				{
					 $bSearchable = $this->input->get_post('bSearchable_'.$i, true);
					//If current col has a search param
					//if ( $_GET['bSearchable_'.$i] == "true" )
					if ( $bSearchable == "true" )
					{
						//Add the search to the where clause
						$sWhere .= $aColumns[$i]." LIKE '%".$sSearch."%' OR ";
						$nWhereGenearalCount += 1;
					}
				}
				$sWhere = substr_replace( $sWhere, "", -3 );
				$sWhere .= ')';
			}
			 
			/* Individual column filtering */
			$sWhereSpecificArray = array();
			$sWhereSpecificArrayCount = 0;
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				$bSearchable = $this->input->get_post('bSearchable_'.$i, true);
				
				if(isset($bSearchable) && $bSearchable == 'true' && $this->input->get_post('sSearch_'.$i) != '')
				//if ( $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' )
				{
					//If there was no where clause
					if ( $sWhere == "" )
					{
						$sWhere = "WHERE ";
					}
					else
					{
						$sWhere .= " AND ";
					}
					 
					//Add the clause of the specific col to the where clause
					$sWhere .= $aColumns[$i]." LIKE '%' || :whereSpecificParam".$sWhereSpecificArrayCount." || '%' ";
					 
					//Inc sWhereSpecificArrayCount. It is needed for the bind var.
					//We could just do count($sWhereSpecificArray) - but that would be less efficient.
					$sWhereSpecificArrayCount++;
					 
					//Add current search param to the array for later use (binding).
					$sWhereSpecificArray[] =  $_GET['sSearch_'.$i];
					 
				}
			}
			 
			//If there is still no where clause - set a general - always true where clause
			if ( $sWhere == "" )
			{
				$sWhere = "WHERE 1=1";
			}
			 
			 
			/*
			 * SQL queries
			 * Get data to display
			 */
			 //Inner sql - not being fetched by itself.
			$sQueryInner = "SELECT ".implode(', ', $aColumns).", row_number() over (".$sOrder.") rowsNumerator FROM   ".$sTable." ".$sWhere;
			$sQueryFinal = "SELECT ".implode(', ', $aColumns)." FROM (".$sQueryInner.") qry ".$sLimit." ORDER BY rowsNumerator";
			 
			 
			/* Data set length after filtering */
			$sQueryFinalCount = "SELECT COUNT(*) as \"totalRowsCount\" FROM (".$sQueryInner.") qry";
			 
			$iFilteredTotal = 0;
			 
			/* Total data set length */
			$sQueryTotalCount = "SELECT COUNT(".$sIndexColumn.") as \"totalRowsCount\" FROM  ".$sTable;
		 
			//Create Statments
			$statmntFinal = oci_parse($conn, $sQueryFinal);
			$statmntFinalCount = oci_parse($conn, $sQueryFinalCount);
			$statmntTotalCount = oci_parse($conn, $sQueryTotalCount);
		 
			//Bind variables.
			 
			if ( isset($iDisplayStart))
			{
				$dsplyStart = $iDisplayStart;
			}
			else{
				$dsplyStart = 0;
			}
			 
			if ( isset($iDisplayLength) && $iDisplayLength != '-1' )
			{
				$dsplyRange = $iDisplayLength;
				if ($dsplyRange > (2147483645 - intval($dsplyStart)))
				{
					$dsplyRange = 2147483645;
				}
				else
				{
					$dsplyRange = intval($dsplyStart) +  intval($dsplyRange);
				}
			}
			else
			{
				$dsplyRange = 2147483645;
			}
			 
			//Bind variables of number of rows to fetch.
			oci_bind_by_name($statmntFinal, ':iDisplayStart', $dsplyStart);
			oci_bind_by_name($statmntFinal, ':iDisplayEnd', $dsplyRange);
		 
			//Bind all variables of general search
			for ( $i = 0 ; $i < $nWhereGenearalCount ; $i++ )
			{
				oci_bind_by_name($statmntFinal, ':whereParam'.$i , $sWhereGenearal);
				oci_bind_by_name($statmntFinalCount, ':whereParam'.$i , $sWhereGenearal);
			}
			 
			//Bind all variables of specific search
			for ( $i = 0 ; $i < count($sWhereSpecificArray) ; $i++ )
			{
				oci_bind_by_name($statmntFinal, ':whereSpecificParam '.$i , $sWhereSpecificArray[$i]);
				oci_bind_by_name($statmntFinalCount, ':whereSpecificParam '.$i , $sWhereSpecificArray[$i]);
			}
			 
			 
			//Execute selects
			oci_execute($statmntTotalCount);
			$iTotal = 0;
			while ($row = oci_fetch_array($statmntTotalCount, OCI_ASSOC))
			{
				$iTotal = $row['totalRowsCount'];
			}
			oci_free_statement($statmntTotalCount);
					 
			oci_execute($statmntFinalCount);
			$iFilteredTotal = 0;
			while ($row = oci_fetch_array($statmntFinalCount, OCI_ASSOC))
			{
				$iFilteredTotal = $row['totalRowsCount'];
			}
			oci_free_statement($statmntFinalCount);
			 
			 
			 
			/*
			 * Output
			 */
			 	$output = array(
				"sEcho" => intval($this->input->get_post('sEcho')),
				"iTotalRecords" => $iTotal,
				"iTotalDisplayRecords" => $iFilteredTotal,
				"aaData" => array()
			);
			 
			 
			oci_execute($statmntFinal);
			 
			 
			while ( $aRow = oci_fetch_array($statmntFinal, OCI_ASSOC) )
			{
				$row = array();
				for ( $i=0 ; $i<count($aColumns) ; $i++ )
				{
					if ( $aColumns[$i] == "version" )
					{
						/* Special output formatting for 'version' column */
						$row[] = ($aRow[ $aColumns[$i] ]=="0") ? '-' : $aRow[ $aColumns[$i] ];
					}
					else if ( $aColumns[$i] != ' ' )
					{
						/* General output */
						$row[] = $aRow[ $aColumns[$i] ];
					}
				}
				$output['aaData'][] = $row;
			}
		 
			oci_free_statement($statmntFinal);
			 
			oci_close($conn);
		 
			echo json_encode( $output );
			
		}

	
		
    } 
?>