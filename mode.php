public function save_free_course($img){
        $data=array();

        $data['img']=$img;
        $data['youtube_link']=$this->input->post('youtube_link',true);
        $data['title']=$this->input->post('title',true);
        $data['publish']=$this->input->post('publish',true);
        $data['des']=$this->input->post('des',true);
        $this->db->insert('pre_free_course',$data);

        

    }
