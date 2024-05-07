<?php
class Sepatu extends CI_Controller
{
 public function index()
 {
 $this->load->view('view-form-sepatu');
 }
 public function cetak()
 {$this->form_validation->set_rules('nama', 'Nama Pembeli',
    'required|min_length[3]', [
     'required' => 'Isi Nama Pembeli',
     'min_lenght' => 'Nama Terlalu Pendek'
     ]);
$this->form_validation->set_rules('merek', 'Merek',
     'required|min_length[3]', [
      ]);

$this->form_validation->set_rules('ukuran', 'ukuran',
      'required|min_length[1]', [

       ]);

     if ($this->form_validation->run() != true) {
     $this->load->view('view-form-sepatu');
    } else {
        $this->load->model('ModelSepatu' );
        $price = $this->ModelSepatu->price();
        $data = [
        'nama' => $this->input->post('nama'),
        'merek' => $this->input->post('merek'),
        'ukuran' => $this->input->post('ukuran'),
        'harga' => $price,
        
        ];
        $this->load->view('view-data-sepatu', $data);
        }
        }
       }    