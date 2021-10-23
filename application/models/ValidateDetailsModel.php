<?php
class ValidateDetailsModel extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    /**
     * This Method will authenticate users by connecting with the database as and when called upon.
     * @param $uname
     * @param $pass
     * @return Boolean value
     */
    public function authenticate($data)
    {
        //echo 'query';

        $this->db->select('*');
        $this->db->where('UserName', $data['UserName']);
        $this->db->where('Password', md5($data['Password']));
        $this->db->from(TBL_USERS);
        
        $check_existing = $this->db->get();

        //echo $this->db->last_query(); 

        if($check_existing->num_rows() > 0)
        {
            $res = $check_existing->result();

            //var_dump($res);die;


            if($res[0]->Password == md5($data['Password']))
            {
                //echo 'matched';
                return true;   
            }
            else
            {
                //echo 'not matched';
                return false;
            }
            
        }
        else
        {
            //echo 'skipped';
            return false;           
        }
    }

    /**
     * This Method will authenticate users by connecting with the database as and when called upon.
     * @param $token
     * @return Boolean value
     */
    public function authenticateToken($token)
    {
        $this->db->select('*');
        $this->db->where('AuthToken', $token);
        $this->db->from(TBL_AUTHENTICATION);
        
        $query = $this->db->get();
        // echo $this->db->last_query(); die;

        if ($query->num_rows() > 0)
        {
            // $res = $query->result();
            // return $res[0]->UserId;
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * This Method will authenticate users by connecting with the database as and when called upon.
     * @param $token
     * @param $id
     * @return Boolean value
     */
    public function save_token($token,$id)
    {
        $this->db->insert(TBL_AUTHENTICATION, array('AuthToken' => $token, 'UserId' => $id));

        if ($this->db->affected_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getUserId($token)
    {
        $this->db->select('UserId');
        $this->db->from(TBL_AUTHENTICATION);
        $this->db->where('AuthToken', $token);
        $query = $this->db->get();
        $result=$query->result();
        $UserId=$result[0]->UserId;
        return $UserId;
    }
}
?>