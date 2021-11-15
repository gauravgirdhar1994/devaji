<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_categories extends MX_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_categories_model');
    }

    public function add_new_category()
    {

        $data['content'] = 'admin-add-categories';
        $this->load->view('admin-template', $data);
    }

    public function submit_new_categories()
    {
        $data['categoryName'] = $this->input->post('categoryName');
        $data['categorySlug'] = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $this->input->post('categoryName'))));
        $data['Status'] = $this->input->post('Status');
        // var_dump($data);die;
        if (!empty($_FILES['categoryImage']['name'])) {
            $config['upload_path'] = './uploads/products/category';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '50000';
            $config['max_width'] = '3000';
            $config['max_height'] = '3000';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('categoryImage')) {
                $error = array('error' => $this->upload->display_errors());
                $errorMsg = $error['error'];
                // print_r($errorMsg);exit;
            } else {
                $rest = array('upload_data' => $this->upload->data());
                // var_dump($rest);die;
            }
            $data['categoryImage'] = $rest['upload_data']['file_name'];
        }

        $result = $this->Admin_categories_model->add_categories_data($data);
        // echo $result;die;
        redirect('admin/categories-list');
    }

    public function categories_list()
    {
        $result = $this->Admin_categories_model->fetch_categories_list();
        // print_r($result);die;
        $data['categories'] = $result;

        $data['content'] = 'admin-categories-list';

        $this->load->view('admin-template', $data);

    }

    public function delete_category($id)
    {
        $res = $this->Admin_categories_model->delete_category($id);
        $this->session->set_flashdata('success', 'deleted Successfully');
        redirect('admin/categories-list');
    }

    public function edit_category($category_id)
    {
        $data['category_details'] = $this->Admin_categories_model->edit_category_details($category_id);
        // $data['product_section_data_details'] = $this->Admin_categories_model->edit_product_section_data_details($product_id);
        $Page_type = 'category';
        // $data['meta_tage'] = $this->Admin_categories_model->FetchPostMeta($product_id, $Page_type);
        $data['content'] = 'admin-edit-categories';
        $this->load->view('admin-template', $data);
    }

    public function edit_category_submit()
    {
        // var_dump($_FILES);die;
        $product_id = $this->input->post('id');
        $data['categoryName'] = $this->input->post('categoryName');
        $data['categorySlug'] = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $this->input->post('categoryName'))));
        $data['Status'] = $this->input->post('Status');

if (!empty($_FILES['categoryImage']['name'])) {
    $config['upload_path'] = './uploads/products/category';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '50000';
    $config['max_width'] = '3000';
    $config['max_height'] = '3000';
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('categoryImage')) {
        $error = array('error' => $this->upload->display_errors());
        $errorMsg = $error['error'];
        print_r($errorMsg);exit;
    } else {
        $rest = array('upload_data' => $this->upload->data());
        // var_dump($rest);die;
    }
    $data['categoryImage'] = $rest['upload_data']['file_name'];
} else {
    $data['categoryImage'] = $this->input->post('prevCategoryImage');
}


        $res = $this->Admin_categories_model->edit_category_submit($data, $product_id);

        $this->session->set_flashdata('success', 'Category Updated successfully');
        redirect('admin/categories-list');
    }

    public function delete_all_categories()
    {

        $data = $this->input->post('check');
        // var_dump($data);die;
        if (!empty($data)) {

            $i = 0;foreach ($data as $row) {
                $res = $this->Admin_categories_model->delete_all_categories($row);

                $i++;
            }

            if ($res != false) {
                $this->session->set_flashdata('success', 'Categories Deleted');
            }
        } else {
            $this->session->set_flashdata('error', 'No category Selected');
        }

        redirect('admin/categories-list');
    }

    public function fetch_data_category()
    {
        $data['products'] = $this->Admin_categories_model->fetch_categories_list();
        $i = 0;
        $btnAction = "return confirm('Are you sure you want to delete?');";
        if (!empty($data['products'])) {
            foreach ($data['products'] as $product) {
                $product->selectAction = '<input type="checkbox" class="checkbox text-center" name="check[]" value="' . $product->Id . '" />';
                $product->actions = '<a href="' . base_url() . 'admin/edit-category/' . $product->id . '" class="btn btn-success btn-xs">Edit </a><a class="btn btn-danger btn-xs" href="' . base_url() . 'admin/delete-category/' . $product->id . '" onclick="' . $btnAction . '">Delete</a>';
                if ($product->Status == 0) {
                    $product->Status = 'Disabled';
                }
                if ($product->Status == 1) {
                    $product->Status = 'Enabled';
                }
                $i++;
            }

        }

        echo json_encode($data);
    }

}