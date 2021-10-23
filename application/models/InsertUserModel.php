<?php
class InsertUserModel extends CI_Model {

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
    public function insert($data)
    {
        //echo 'query';

        // $user_data['FirstName'] = $data['FirstName'];
        // $user_data['LastName'] = $data['LastName'];
        $this->db->select('UserId');
        $this->db->where('UserName', $data['Email']);
        $this->db->from(TBL_USERS);

        $check_existing = $this->db->get();

        if($check_existing->num_rows() > 0)
        {
            echo 'Already exists';
        }
        else
        {

            // $user_data['UserRole'] = 2;
            $user_data['UserName'] = $data['Email'];
            $user_data['Password'] = md5($data['Password']);
            $user_data['Status'] = 1;

            $this->db->insert(TBL_USERS, $user_data);

            if($this->db->affected_rows() > 0)
            {
                $user_insert_id = $this->db->insert_id();

                $user_info_data = array(
                    'UserId'    => $user_insert_id,
                    'FullName' => $data['FullName'],
                    'Email'     => $data['Email'],
                    );

                $this->db->insert(TBL_USERS_INFO, $user_info_data);

                if($this->db->affected_rows() > 0)
                {
                    return true;
                }
            }
            else
            {
                return false;
            }
            
        }
    }

}
