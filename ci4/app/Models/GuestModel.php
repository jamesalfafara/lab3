<?php 

namespace App\Models;

use CodeIgniter\Model;

clas GuestModel extends Model
{
	protected $table = 'jsalfafara_myguest';

	public function getGuest()
	{
		return $this->findAll();
	}
}