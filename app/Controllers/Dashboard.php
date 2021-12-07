<?php

namespace App\Controllers;

use App\Controllers\Basecontroller;

/**
 * 
 */
class Dashboard extends Basecontroller {

public function __construct() {   
      //aktifkan url helper      
         helper('url');    
          } 

	public function index(){
		$data['judul']='Laman Home';
		$data['isi']='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
		return view('dashboard',$data);
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
		public function biodata() {
			$data['nama'] = 'Ramadhani Aryo Nugroho';
			$data['alamat'] = 'Gogorante,kediri';
			$data['jeniskelamin'] = 'Laki-laki';
			$data['asalsekolah'] = 'SMKTIPN';
			
			return view ('biodata',$data);
		}

}