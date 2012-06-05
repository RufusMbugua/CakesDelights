<?php

class InternalFormA1 extends CI_Controller{
	
public function _construct(){
	
	parent::_construct();
	$this->load->helper('url');
	
}	
	
	
public function create_Form(){
	
$internalFortified_A1 .='<form name="internalFortified_A1" id="internalFortified_A1" method="" action=""><!-- form for internal salt fortification. 1-a -->
						<h3 align="center"> FORTIFIED SALT-TABLE A-1</h3>
						<p align="center"> INSPECTION FORM FOR INCOMING IODINE COMPOUNDS </p>
						<table border="0" width="100%"><!-- beginning of table-->
						<tr><!-- table rows-->
							 <td width="25%">Product Type: </td><!--table row data -->
							 <td width="25%"><input type="text" name="productType" id="productType"/></td>
							 <td width="25%">Purchase Order #:</td>
							 <td width="25%"><input type="text" name="purchaseOrder" id="purchaseOrder"/></td>
						</tr>
						<tr>
							 <td width="25%">Manufacturer:</td>
							 <td width="25%"><input type="text" name="manufacturer" id="manufacturer"/></td>
						</tr>
						<tr>
							 <td width="25%">Inspected by:</td>
							 <td width="25%"><input type="text" name="inspectedBy" id="inspectedBy"/></td>
							 <td width="25%">Date:</td>
							 <td width="25%"><input type="date" name="date" id="date"/></td>
						</tr>
						<tr>
							 <td width="25%">SPECIFICATIONS</td>
							 <td width="25%"></td>
							 <td width="25%">OBSERVATIONS</td>
						</tr>
						<tr>
							 <td width="25%">Quantity</td>
							 <td width="25%"><input type="text" name="quantity" id="quantity"/></td>
							 <td width="25%"><textarea name="integrityObservation" id="integrityObservation" rows="3"></textarea></td>
						</tr>
						<tr>
							 <td width="25%">Integrity of boxes (tick appropriately)</td>
						</tr>
						<tr>
							 <td width="25%">Lot number:</td>
							 <td width="25%"><input type="checkbox" name="lotNumber" id="lotNumber"/></td>
							 <td width="25%"><textarea name="lotObservation" id="lotObservation" rows="3"></textarea></td>
						</tr>
						<tr>
							 <td width="25%">Production Date:</td>
							 <td width="25%"><input type="checkbox" name="productionDate" id="productionDate"/></td>
							 <td width="25%"><textarea name="productObservation" id="productObservation" rows="3"></textarea></td>
						</tr>
						<tr>
							 <td width="25%">Expiration Date:</td>
							 <td width="25%"><input type="checkbox" name="expirationDate" id="expirationDate"/></td>
							 <td width="25%"><textarea name="expirationObservation" id="expirationObservation" rows="3"></textarea></td>
						</tr>
						<tr>
							 <td width="25%">Content claimed in label</td>
							 <td width="25%"><input type="checkbox" name="contentClaimed" id="contentClaimed"/></td>
							 <td width="25%"><textarea name="contentObservation" id="contentObservation" rows="3"></textarea></td>
						</tr>
						<tr>
							 <td width="25%">Certificate of Analysis(result for every micronutrient)</td>
							 <td width="25%"><input type="checkbox" name="certOfanalysis" id="certOfanalysis"/></td>
							 <td width="25%"><textarea name="certificateObservation" id="certificateObservation" rows="3"></textarea></td>
						</tr>
						<tr>
							 <td width="25%">Other:</td>
							 <td width="25%"><input type="text" name="other" id="other"/></td>
							 <td width="25%"><textarea name="otherObservation" id="otherObservation" rows="3"></textarea></td>
						</tr>
						<tr>
							 <td width="25%">Accepted:</td>
							 <td width="25%"><input type="checkbox" name="accepted" id="accepted"/></td>
							 <td width="25%">Rejected:</td>
							 <td width="25%"><input type="checkbox" name="rejected" id="rejected"/></td>
						</tr>
						<tr>
							 <td width="25%">REASONS FOR REJECTION/ACTIONS TAKEN:</td>
							 <td width="25%"><input type="text" name="actionsTaken" id="actionsTaken"/></td>
						</tr>
						<tr>
							 <td width="25%">Received By:</td>
							 <td width="25%"><input type="text" name="receivedBy" id="receivedBy"/></td>
							 <td width="25%">Date:</td>
							 <td width="25%"><input type="date" name="inputDate" id="inputDate"/></td>
						</tr>
						<tr><td><input type="submit" name="submit" id="submit" value="Submit"/></td></tr>
						</table>
						</form>';
} //End of index file	

}
	
?>