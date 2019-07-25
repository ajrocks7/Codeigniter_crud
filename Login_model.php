<?php 
class Login_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
   
    public function viewdetails()
    {
        $con="status!=2";
        return $this->db->select('*')->from('basicdetails')->where($con)->get()->result();
    }

    public function insertdata($data=array())
    {
        $id = $data['id'];
        if(!empty($id))
        {
           
            $this->db->where('id',$id);
             $basicdetails['details']['fname'] = $data['fullName'];
          $basicdetails['details']['address1'] = $data['addressLine1'];
          $basicdetails['details']['address2'] = $data['addressLine2'];
           $basicdetails['details']['city'] = $data['city'];
           $basicdetails['details']['state'] = $data['state'];
            $basicdetails['details']['postcode'] = $data['postcode'];
             $basicdetails['details']['email'] = $data['email'];
             $basicdetails['details']['phoneNumber'] = $data['phoneNumber'];
            $this->db->update('basicdetails',$basicdetails['details']);
        }else{
        $basicdetails['details']['fname'] = $data['fullName'];
          $basicdetails['details']['address1'] = $data['addressLine1'];
          $basicdetails['details']['address2'] = $data['addressLine2'];
           $basicdetails['details']['city'] = $data['city'];
           $basicdetails['details']['state'] = $data['state'];
            $basicdetails['details']['postcode'] = $data['postcode'];
             $basicdetails['details']['email'] = $data['email'];
             $basicdetails['details']['phoneNumber'] = $data['phoneNumber'];
          $this->db->insert('basicdetails',$basicdetails['details']);
          $affected_rows = $this->db->affected_rows();
                if($affected_rows == 1){
                        return $this->db->insert_id();
                } else {
                        return;
                }
            }
    }

    public function editdata($id)
    {
        return $this->db->select('*')->from('basicdetails')->where('id',$id)->get()->row();
    }

   public function delete($id)
   {
    $this->db->where("id",$id);
   $res =  $this->db->update("basicdetails",array("status"=>2));
   if($res)
   {
    return 1;
   }else{
    return 2;
   }
   }
 public function savedynamic($data = array())
   {
    $count = count($data['name']);
    for($i=0;$i<$count;$i++)
    {
         $details['dynamic']['name'] = $data['name'][$i];
         $details['dynamic']['addr1'] = $data['addr1'][$i];
         $details['dynamic']['addr2'] = $data['addr2'][$i];
         $details['dynamic']['email'] = $data['email'][$i];
         $details['dynamic']['contact'] = $data['contact'][$i];
         $this->db->insert('extradetails',$details['dynamic']);
    }
   }
}
