<?php
class UpdateUserModel extends CI_Model {

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
    public function update($data)
    {
        $this->db->where('UserId',$data['UserId']);
        $this->db->update(TBL_USERS_INFO,$data);
        return true;
    }

    public function changepass($data)
    {
        // var_dump($data);die;
        $id = $data['UserId'];
        $oldpassword = md5($data['OldPassword']);

        $data = array(
            'Password' => md5($data['NewPassword'])
            );

        $this->db->where('UserId',$id);
        $this->db->where('Password', $oldpassword);
        $this->db->update(TBL_USERS,$data);

        return true;
    }

}
