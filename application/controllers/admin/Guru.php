<?php

class Guru extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata("is_login") !== true) {
			redirect("auth/out");
		}
		if ($this->session->userdata("level") == "siswa") {
			redirect("siswa/dashboard");
		}
		$this->load->model("GuruModel", "guru");
	}

	public function index()
	{
		$data["active"] = "guru";
		$data["title"] = "guru";
		$data["guru"] = $this->guru->all();
		$data["page"] = "guru/index";
		$this->load->view("layouts/backend", array("contents" => $data));
	}

	public function add()
	{
		$data["active"] = "guru";
		$data["title"] = "guru";
		$data["page"] = "guru/add";
		$this->load->view("layouts/backend", array("contents" => $data));
	}

	public function create()
	{
		$cek = $this->guru->edit(array("nip" => $this->input->post("nip")));

		if (!empty($cek)) {
			$this->session->set_flashdata("error", "NIP guru alredy.");
			redirect("admin/guru");
		}

		$params = array(
			"nip" => $this->input->post("nip"),
			"nama_guru" => $this->input->post("nama_guru"),
			"jk" => $this->input->post("jk"),
			"no_hp" => $this->input->post("no_hp"),
			"alamat" => $this->input->post("alamat"),
			"jam_masuk" => $this->input->post("jam_masuk"),
			"jam_pulang" => $this->input->post("jam_pulang"),
		);
		if ($this->guru->save($params) === true) {
			$this->session->set_flashdata("success", "guru successfully created");
		} else {
			$this->session->set_flashdata("error", "guru failed to create");
		}

		redirect("admin/guru");
	}


	public function detail($id = null)
	{
		$data["active"] = "guru";
		$data["title"] = "Detail Guru";
		$data["guru"] = $this->guru->edit(array("guru_id" => $id));
		$data["page"] = "guru/guru_detail";
		if (empty($data['guru'])) {
			redirect("admin/guru");
		}
		$this->load->view("layouts/backend", array("contents" => $data));
	}


	public function edit($id = null)
	{
		$data["active"] = "guru";
		$data["title"] = "Guru Edit";
		$data["guru"] = $this->guru->edit(array("guru_id" => $id));
		$data["page"] = "guru/guru_edit";
		if (empty($data['guru'])) {
			redirect("admin/guru");
		}
		$this->load->view("layouts/backend", array("contents" => $data));
	}

	public function update()
	{
		$params = array(
			"nip" => $this->input->post("nip"),
			"nama_guru" => $this->input->post("nama_guru"),
			"jk" => $this->input->post("jk"),
			"no_hp" => $this->input->post("no_hp"),
			"alamat" => $this->input->post("alamat"),
			"jam_masuk1" => $this->input->post("jam_masuk1"),
			"jam_pulang1" => $this->input->post("jam_pulang1"),
			"jam_masuk2" => $this->input->post("jam_masuk2"),
			"jam_pulang2" => $this->input->post("jam_pulang2"),
			"jam_masuk3" => $this->input->post("jam_masuk3"),
			"jam_pulang3" => $this->input->post("jam_pulang3"),
			"jam_masuk4" => $this->input->post("jam_masuk4"),
			"jam_pulang4" => $this->input->post("jam_pulang4"),
			"jam_masuk5" => $this->input->post("jam_masuk5"),
			"jam_pulang5" => $this->input->post("jam_pulang5"),
			"jam_masuk6" => $this->input->post("jam_masuk6"),
			"jam_pulang6" => $this->input->post("jam_pulang6"),

		);

		$where = array("guru_id" => $this->input->post("guru_id"));

		if ($this->guru->update($params, $where) === true) {
			$this->session->set_flashdata("success", "guru changed successfully.");
		} else {
			$this->session->set_flashdata("error", "guru failed to changed.");
		}
		redirect("admin/guru");
	}

	public function delete($id = null)
	{
		$where = array("guru_id" => $id);
		if ($this->guru->delete($where) === true) {
			$this->session->set_flashdata("success", "guru deleted successfully.");
		} else {
			$this->session->set_flashdata("error", "guru failed to deleted.");
		}
		redirect("admin/guru");
	}
}
