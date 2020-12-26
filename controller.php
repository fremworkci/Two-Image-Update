function image()
	{
		$this->load->library('upload');


		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->upload->initialize($config);
		$this->upload->do_upload("pan");
		$pan_image=$this->upload->data();
		$pan=$pan_image["file_name"];

		//print_r($pan_image)	;
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->upload->initialize($config);
		$this->upload->do_upload("adhar");
		$adhar_image=$this->upload->data();
		$adhar=$adhar_image["file_name"];

		$data=array(
			"pan"=>$pan,
			"adhar"=>$adhar,
			"name" => "Suman"
		);

		$this->Model1->image_model($data);


		

	}
