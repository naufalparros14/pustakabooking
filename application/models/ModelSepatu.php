
<?php
defined('BASEPATH') or exit('No direct script access allowed');
 
class ModelSepatu extends CI_Model
{
    public function price()
    {
        if ($this->input->post('merek') == "Nike") {
            $data = 375000;
            return $data;
        }
        if ($this->input->post('merek') == "Adidas") {
            $data = 300000;
            return $data;
        }
        if ($this->input->post('merek') == "Kickers") {
            $data = 250000;
            return $data;
        }
        if ($this->input->post('merek') == "Eiger") {
            $data = 275000;
            return $data;
        }
        if ($this->input->post('merek') == "Bucherri") {
            $data = 400000;
            return $data;
        }
    }
}