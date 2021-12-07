<?php
	/**
	 * Blog model
	 */
	class Blog_Model extends CI_Model
	{
		
		public function __construct(){
			parent::__construct();
		}

		public function list_blog(){
			$this->db->select('b.*,t.tag_name');
			$this->db->from('blog b');
			$this->db->join('tags t','b.id = t.blog_id','left');
			$data = $this->db->get();
			return $data->result();
		}

		public function blog_by_id($id){
			$this->db->select('b.*,t.tag_name');
			$this->db->from('blog b');
			$this->db->join('tags t','b.id = t.blog_id','left');
			$this->db->where('b.id',$id);
			$data = $this->db->get();
			return $data->result();
		}

		public function add_blog($blogData=array(),$tagData=array()){
			$result = $this->db->insert('blog',$blogData);
			if($result){
				$blog_id = $this->db->insert_id();
				foreach ($tagData as $tags) {
					$tagsDetail = array(
						'blog_id' => $blog_id,
						'tag_name' => $tags
					);
					$this->db->insert('tags',$tagsDetail);
				}
				
			}else{
				return false;
			}

			$data = $this->db->get('blog');
			return $data;
		}

		public function edit_blog($blogData=array(),$tagData=array(),$id){
			$this->db->where('id',$id);
			$result = $this->db->update('blog',$blogData);
			if($result){
				foreach ($tagData as $tags) {
					$tagsDetail = array(
						'tag_name' => $tags
					);
					$this->db->where('blog_id',$id);
					$this->db->update('tags',$tagsDetail);
				}
				
			}else{
				return false;
			}

			$data = $this->db->get('blog');
			return $data;
		}

		public function delete_blog($id){
			$this->db->where('id',$id);
			$result = $this->db->delete('blog');
			if($result){
				$this->db->where('id',$id);
				$result = $this->db->delete('tags');
			}else{
				return false;
			}

		}
	}
?>