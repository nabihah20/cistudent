<?php
    class Students extends CI_Controller{
        public function index(){
            $data['title'] = 'List of Students';

            $data['students'] = $this->student_model->get_students();

            $this->load->view('templates/header');
            $this->load->view('students/index', $data);
            $this->load->view('templates/footer');
        }

        public function view($slug = NULL){
            $data['student'] = $this->student_model->get_students($slug);

            if(empty($data['student'])){
                show_404();
            }

            $data['title'] = $data['student']['name'];

            $this->load->view('templates/header');
            $this->load->view('students/view', $data);
            $this->load->view('templates/footer');

        }

        public function create(){

            $data['title'] = 'Register Student';

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('age', 'Age', 'required');
            $this->form_validation->set_rules('year', 'Year', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('students/create', $data);
                $this->load->view('templates/footer');
            } else {
                $this->student_model->create_student();
                redirect('students');
            }

        }

        public function delete($id){
            $this->student_model->delete_student($id);
            redirect('students');
        }

        public function edit($slug){
            $data['student'] = $this->student_model->get_students($slug);

            if(empty($data['student'])){
                show_404();
            }

            $data['title'] = 'Edit Student';

            $this->load->view('templates/header');
            $this->load->view('students/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update(){
            $this->student_model->update_student();
            redirect('students');
        }
    }