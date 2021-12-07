<?php

namespace App\Controllers;

	class Web extends BaseController {

		public function komentar() {

			echo "Halo nama saya Aryo";

									}
		public function biodata() {
			$data['nama'] = 'Ramadhani Aryo Nugroho';
			$data['alamat'] = 'Gogorante,kediri';
			$data['jeniskelamin'] = 'Laki-laki';
			$data['asalsekolah'] = 'SMKTIPN';
			
			return view ('biodata',$data);
		}

		public function hitung() {
			$data['judul'] = 'kalkulator sederhana';
			$data['angka1'] = 0;
			$data['angka2'] = 0;
			$data['hasil'] = 0;
		
			return view('kalkulator',$data);
		}

		public function proses() {
			$data['judul'] = 'kalkulator sederhana';
			$data['angka1'] = $this->request->getPost('angka1');
			$data['angka2'] = $this->request->getPost('angka2'); 
			$data['hasil'] =  $data['angka1'] * $data['angka2']; 

			return view('kalkulator',$data);
		}


		public function segitiga() {
			$data['judul'] = 'kalkulator perjuangan';
			$data['alas'] = '';
			$data['tinggi'] = '';
			$data['hasil'] = '';
		
		return view('kalkulator',$data);
		}

		public function prosessegitiga() {
			$data['judul'] = 'kalkulator segitiga';
			$data['alas'] = $this->request->getPost('alas');
			$data['tinggi'] = $this->request->getPost('tinggi'); 
			$data['hasil'] = 0.5 * $data['alas'] * $data['tinggi']; 

			return view('kalkulator',$data);
		}
}
