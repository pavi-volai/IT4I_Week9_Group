<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitorModel extends Model {

    protected $table = 'user';

    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = ['username'];

}

?>