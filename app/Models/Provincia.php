<?php

namespace App\Models;
use CodeIgniter\Model;

class Provincia extends Model
{
    protected $table = "PROVINCIA";
    protected $primaryKey = "ID_PROVINCIA";
    protected $allowedFields = [
        "NAME",
        "CAPITAL",
        "REGION",
        "DESCRIPTION",
        "IMAGE"
    ];
}