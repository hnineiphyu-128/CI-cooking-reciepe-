<?php 
	/**
	 * 
	 */
	class Ingredient_mdl extends CI_Model
	{
		public function list()
		{
			$this->db->select('*');
			$this->db->from('ingredients');
			$sql = $this->db->get();

			return $sql->result();
		}
		public function store()
		{
			$name = $this->input->post('name');
			$photo = $this->Ingredient_mdl->upload_img('photo');

			$data = array(
					'ingredients_name' => $name,
					'ingredients_photo' => $photo['data'] 
			);
			$result = $this->db->insert('ingredients',$data);

			return $result ; 
		}
		public function upload_img($image)
		{
			$file = $_FILES[$image]['name'];
			$filepath = 'image/ingredient/'.$file;

			$config['upload_path'] = 'image/ingredient/';
			$config['allowed_types'] = 'gif|jpg|peg|png';
			$this->load->library('upload',$config);
			 if ($this->upload->do_upload($image)) {
			 	$userfile = array(
			 				'state' => 1,
			 				'data' => $filepath 
			 	);

			 }else{
			 	$userfile = array(
			 				'state' => 0,
			 				'data' => $this->upload->display_errors()
			 	);
			 }
			 return $userfile;

		}
		
		public function detail($id)
		{
			$this->db->select('*');
			$this->db->from('ingredients');
			$this->db->where('ingredients_id',$id);
			$sql = $this->db->get();

			return $sql->row_array();
		}
		public function delete($id)
		{
			$sql = "DELETE FROM ingredients WHERE ingredients_id = ".$id;

			return $this->db->query($sql);

		}
		public function update()
		{
			if ($_FILES['newphoto']['name'] == NULL) {
				$photo['data'] = $this->input->post('oldphoto');

			}
			else{
				$photo = $this->Ingredient_mdl->upload_img('newphoto');

			}
			$id = $this->input->post('id');
			$name = $this->input->post('name');

			$data = array(
					'ingredients_name' => $name,
					'ingredients_photo' => $photo['data'] 
			);
			$this->db->where('ingredients_id',$id); 
			$result = $this->db->update('ingredients',$data);

			return $result ; 	
		}
	}
 ?>