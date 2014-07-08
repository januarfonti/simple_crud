<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$data['barang'] = $this->model_barang->get_barang()->result();
		$this->load->view('home',$data);
	}

	public function insert()
	{
		$this->load->view('insert');
	}

	public function proses_insert()
	{
		$data = array('nama' => $this->input->post('nama') ,
					'harga' => $this->input->post('harga'),
					'stok' => $this->input->post('stok') 
					);
		$this->model_barang->insert_barang($data);	
		redirect('home','refresh');
	}

	public function update($id)
	{
		$data['barang'] = $this->model_barang->get_detail_barang($id)->row();
		$this->load->view('update',$data);
	}

	public function proses_update()
	{
		$id['id'] = $this->input->post('id');
		$data = array('nama' => $this->input->post('nama') ,
					'harga' => $this->input->post('harga'),
					'stok' => $this->input->post('stok') 
					);
		$this->model_barang->update_barang($data,$id);
		redirect('home','refresh');
	}

	public function delete($id)
	{
		$this->model_barang->delete_barang($id);
		redirect('home','refresh');
	}


}