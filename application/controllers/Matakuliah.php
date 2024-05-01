<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa',
            'required|min_length[10]', [
            'required' => 'Nama Siswa Harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);
        $this->form_validation->set_rules('nis', 'NIS',
            'required|min_length[8]', [
            'required' => 'NIS Harus diisi',
            'min_length' => 'NIS terlalu pendek'
        ]);
        $this->form_validation->set_rules('nis', 'Tempat Tanggal Lahir',
            'required|min_length[8]', [
            'required' => 'Tempat Tanggal Lahir Harus diisi',
            'min_length' => 'Tempat Tanggal Lahir terlalu pendek'
        ]);
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-matakuliah');
        } else {
            $data = [
                'nama'  => $this->input->post('nama'),
                'nis'   => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'ttl'   => $this->input->post('ttl'),
                'jk1'   => $this->input->post('jk1'),
                'jk2'   => $this->input->post('jk2'),
                'agama' => $this->input->post('agama')
            ];
            $this->load->view('view-data-matakuliah', $data);
        }
    }
}
