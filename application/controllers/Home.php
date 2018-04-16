<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function index()
	{
		$this->load->model('artikel');
		$data['artikel'] = $this->artikel->get_artikels();
		$this->load->view('home', $data);
		
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$this->load->model('artikel');
		$data['detail'] = $this->artikel->get_single($id);
		$this->load->view('tampil', $data);
	}

	public function tambah()
	{
		$this->load->helper('form');
		$this->load->model('artikel');
		$data = array();
		$this->load->view('tambah', $data);

		if ($this->input->post('simpan')) 
		{
			$upload = $this->artikel->upload();

			if ($upload['result'] == 'success') 
			{
				$this->artikel->insert($upload);
				redirect('home');
			}else
			{
				$data['message'] = $upload['error'];
			}
		}
			
	}

		public function edit($a) {
		$this->load->model('artikel');
		$data['a'] = $this->artikel->get_single($a);
		if ($this->input->post('update')) {
			$upload=$this->artikel->upload();
			$this->artikel->edit($upload, $id);
		}
		$this->load->view('update', $data);
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function Form_Edit($a)
	{
		$this->data['update_data']=$this->artikel->update_data('blog',$a);
		$this->load->view('edit', $this->data);
	}

		public function delete($a)
	{
		$this->load->model('artikel');
		$this->artikel->hapus($a);
		redirect('blog');
	}

	public function update($a)
	{

	$judul= $_POST['judul'];
	$content = $_POST['content'];
	$image = $_POST['image'];
 	$data = array(
 		'judul' => $judul,
		'content' => $content,
		'image' => $image
	);
 	$edit = $this->artikel->edit_data('blog',$data,$a);
 	if($edit>0){
 		redirect('blog');
 	}else{
 		echo 'Gagal disimpan';
 	}
}

}
