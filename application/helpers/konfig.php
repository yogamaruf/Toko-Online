<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	if (!function_exists('konfig')) {
		function data() {
			$data = $this->db->get('kofigurasi')->row_array();

			$d = array('title' => $data['nama'] );
			return $d;
		}
	}