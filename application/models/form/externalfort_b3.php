<?php 
/*model to handle ExternaFort_B3 form data*/
class ExternalFort_B3 extends CI_Model{
	//the database table ['externalfortifiedb3'] attributes
	/*NB: They need not to be the same since you can still use an active record insert
	 * to specify the exact names as they are in the db..see function insert_record() below*/
	var $inspectionRegistry='';
	var $dateOfinspection='';
	var $factoryID=''; #reversed back to a name to the user
	var $factoryRepresentativeID=''; #reversed back to a name to the user
	//var $address=''; #of the factory?
	//var $telephone=''; #of the factory?
	var $areasVisited=''; #string off all the checkbox values
	var $nonCompliances='';
	var $suggestionsForimprovement='';
	var $inspectorID=''; #reversed back to a health officer to the user
	var $receivedBy=''; #factory representative who receives the compounds?
	var $inspectorSignature=''; #health officer signature
	var $inspectorDate=''; #date ho signed
	var $receivedSignature=''; #factory representative officer signature
	var $receivedDate=''; #factory representative officer signature date
	var $supervisorID=''; #name of supervisor to the health officer
	var $supervisorSignDate=''; #date supervisor signed the form
	
	//the data model variables
	var $query_response=''; #response after query execution
	
	function __construct()
    {
        // The user defined Model constructor
        parent::__construct();
		$this->load->helper('array');
    }
	
	 function get_all_records()
    {
        $query = $this->db->get('externalfortifiedb3');
        return $query->result();
    }
	
	//function submits a new record to the db
	function insert_record()
	{
		/*receive the form data as posted and sanitize, 
		 * then store into an array object, before sending to the db*/
		$this->inspectionRegistry=$this->input->post('inspection_registry');
		$this->dateOfinspection=$this->input->post('inspections_date');
		$this->factoryID=$this->input->post('factory_name');
		$this->factoryRepresentativeID=$this->input->post('factory_rep'); 
		//$this->address=$this->input->post('address');
		//$this->telephone=$this->input->post('telephone');
		$this->areasVisited=$this->input->post('areas_visited');
		$this->nonCompliances=$this->input->post('compliances_list');
		$this->suggestionsForimprovement=$this->input->post('suggestions');
		$this->inspectorID=$this->input->post('health_officer'); //change to session variable
		$this->receivedBy=$this->input->post('factory_reps'); //change to session variable
		$this->inspectorSignature=$this->input->post('ho_signature');
		$this->inspectorDate=$this->input->post('ho_signature_date');
		$this->receivedSignature=$this->input->post('ro_signature');
		$this->receivedDate=$this->input->post('roSignature');
		$this->supervisorID=$this->input->post('supervisor_name'); //change to session variable
		$this->supervisorSignDate=$this->input->post('s_signature_date');
		
		//create an array object
		$data = array('inspectionRegistry' => $this->inspectionRegistry ,
		              'dateOfinspection' => $this->dateOfinspection ,
		              'factoryID' => $this->factoryID,
					  'factoryRepresentativeID'=> $this->factoryRepresentativeID,
					  'areasVisited' => $this->areasVisited,
					  'nonCompliances' => $this->nonCompliances,
					  'suggestionsForimprovement' => $this->suggestionsForimprovement,
					  'inspectorID' => $this->inspectorID,
					  'receivedBy' => $this->receivedBy,
					  'inspectorSignature' => $this->inspectorSignature,
					  'inspectorDate' => $this->inspectorDate,
					  'receivedSignature' => $this->receivedSignature,
					  'receivedDate'=>$this->receivedDate,
					  'supervisorID' => $this->supervisorID,
					  'supervisorSignDate' => $this->supervisorSignDate);
		
		//execute the sql
		 $query=$this->db->query($this->db->insert('externalfortifiedb3', $data)); 
		 
		 //provide feedback
		 if($this->$query)
		 {
			$this->query_response='ok';
		 }
		 else
		 {
			 $this->query_response='fail';
		 }
         return $this->query_response;
	     
		 
       } //end of insert_record()

      //other functions shall follow here

}     // end of the class definition
?>