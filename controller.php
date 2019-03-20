public function save_free_course(){

	$this->load->model('AdminModel');
   
   // config the path - type of image
	$config['upload_path'] ='./assets/free_course';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';
	$this->load->library('upload', $config);
   
	
	// uploading
	if ($this->upload->do_upload('image')) {
		$data_upload_files = $this->upload->data();
		$img = $data_upload_files['file_name']; // image name ***
		 // geting the name to save in db
		$img_url='./assets/free_course/'.$img;
		$this->AdminModel->save_free_course($img_url);
	}
 
	    $this->session->set_flashdata('msg', 'Course Added');
		return redirect('/categories/free_courses/add');
		
		//print_r($data);

	}