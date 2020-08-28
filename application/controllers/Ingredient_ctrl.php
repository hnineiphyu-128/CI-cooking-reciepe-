<?php 
	/**
	 * 
	 */
	class Ingredient_ctrl extends CI_Controller
	{
		public function index()
		{
			$data['ingredients'] = $this->Ingredient_mdl->list();

			$data['innerdata'] = 'ingredient_read';
			$this->load->view('backendtemplate',$data);
		}
		public function create()
		{
			$data['innerdata'] = 'ingredient_create';
			$this->load->view('backendtemplate',$data);
		}
		public function store()
		{
			$this->form_validation->set_rules('name','Ingredient Name','trim|required|min_length[1]|is_unique[ingredients.ingredients_name]');
			if ($this->form_validation->run() == FALSE) {
				$data['innerdata'] = 'ingredient_create';
				$this->load->view('backendtemplate',$data);
			}else{
				$this->Ingredient_mdl->store();
				redirect('ingredient');
			}
		}
		
		public function detail()
		{
			$id = $this->uri->segment(3);
			$data['ingredient'] = $this->Ingredient_mdl->detail($id);
			$data['innerdata'] = 'ingredient_detail';
			$this->load->view('backendtemplate',$data); 
		}
		public function edit()
		{
			$id = $this->uri->segment(3);
			$data['ingredient'] = $this->Ingredient_mdl->detail($id);
			$data['innerdata'] = 'ingredient_edit';
			$this->load->view('backendtemplate',$data);

		}
		public function delete()
		{
			$id = $this->uri->segment(3);
			$data['ingredient'] = $this->Ingredient_mdl->delete($id);
			$data['innerdata'] = 'ingredient/delete';
			$this->session->set_flashdata('success','Existing Ingredient is deleted in your data!!!');

			redirect('ingredient');
		}
		public function update()
		{
			$this->Ingredient_mdl->update();
			
			$this->session->set_flashdata('success','Existing Ingredient is <b> updated </b> in your data');

			redirect('ingredient');
		}
	}
 ?>