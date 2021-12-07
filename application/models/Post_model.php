<?php


		class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by('id', 'DESC');
				$query = $this->db->get('posts');
				return $query->result_array();
			}

			$query = $this->db->get_where('posts', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_post($data){
			$slug = url_title($data['title']);

			$data = array(
				
				'title' => $data['title'],
				'slug' => $slug,
				'by' => $data['createdBy'],
				'content' => $data['content']
		
			);
			return $this->db->insert('posts', $data);
		}

		public function update_post($data){
			$slug = url_title($data['title']);

			$data = array(
				'title' => $data['title'],
				'slug' => $slug,
				'by' => $data['createdBy'],
				'content' => $data['content']
			);
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('posts', $data);
		}

	}

		