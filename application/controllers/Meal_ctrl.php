<?php
class Meal_ctrl extends CI_Controller
{
	public function index()
	{
		$data['meals'] = $this->Meal_mdl->list();
		$data['categories'] = $this->Category_mdl->list();
		$data['countries'] = $this->Country_mdl->list();


		$data['innerdata'] = 'meal_read';
		$this->load->view('backendtemplate',$data);
	}

	public function create()
	{
		$data['categories'] = $this->Category_mdl->list();
		$data['countries'] = $this->Country_mdl->list();
		$data['ingredients'] = $this->Ingredient_mdl->list();

		$data['innerdata'] = 'meal_create';
		$this->load->view('backendtemplate',$data);
	}

	public function store()
	{
		// Validation
		$this->form_validation->set_rules('name', 'Meal Name', 'trim|required|min_length[2]|is_unique[meals.meals_name]');

		if($this->form_validation->run() == FALSE) 
		{
			$data['categories'] = $this->Category_mdl->list();
			$data['countries'] = $this->Country_mdl->list();
			$data['ingredients'] = $this->Ingredient_mdl->list();

			$data['innerdata'] = 'meal_create';
			$this->load->view('backendtemplate',$data);	
		}

		else
		{
			$this->Meal_mdl->store();

			redirect('meal');
		}


	}


	public function detail()
	{
		$id = $this->uri->segment(3);
		$data['meal'] = $this->Meal_mdl->detail($id);

		$data['innerdata'] = 'meal_detail';
		$this->load->view('backendtemplate',$data);
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->Meal_mdl->delete($id);

		$this->session->set_flashdata('success', 'Existing Meal is <b> deleted </b> in your data.');

		redirect('meal');
	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		$data['meal'] = $this->Meal_mdl->detail($id);

		$data['innerdata'] = 'meal_edit';
		$this->load->view('backendtemplate',$data);
	}

	public function update()
	{
		$this->Meal_mdl->update();

		$this->session->set_flashdata('success', 'Existing Meal is <b> updated </b> in your data.');

		redirect('meal');
	}

















}

?>