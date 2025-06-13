<?php

namespace App\Models;

use CodeIgniter\Model;

class MedicineModel extends Model
{
    protected $table = 'medicines';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'dosage', 'schedule', 'taken'];
    protected $useTimestamps = false;
}
