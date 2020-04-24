<?php
    class Student_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_students($slug = FALSE){
            if ($slug === FALSE){
                $this->db->order_by('id','DESC');
				$query = $this->db->get('students');
				return $query->result_array();
            }

            $query = $this->db->get_where('students', array('slug' => $slug));
            return $query->row_array();
        }

        public function create_student(){
            $slug = url_title($this->input->post('name'));

            $data = array(
                'name' => $this->input->post('name'),
                'slug' => $slug,
                'age' => $this->input->post('age'),
                'year' => $this->input->post('year')
            );

            return $this->db->insert('students', $data);

        }

        public function delete_student($id){
            $this->db->where('id',$id);
            $this->db->delete('students');
            return true;
        }

        public function update_student(){
            $slug = url_title($this->input->post('name'));

            $data = array(
                'name' => $this->input->post('name'),
                'slug' => $slug,
                'age' => $this->input->post('age'),
                'year' => $this->input->post('year')
            );

            $this->db->where('id',$this->input->post('id'));
            return $this->db->update('students', $data);

        }
    }

