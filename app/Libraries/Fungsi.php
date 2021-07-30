<?php
class fungsi
{
    protected $ci;
    public function count_item()
    {
        $this->ci->load->model('NewsModel');
        return $this->ci->NewsModel->get()->num_rows();
    }
}
