<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingRegistration extends Model
{
 protected $fillable = ['id','StudentName','StudentID','SMajor','TrainingOrganization','SupervisorInfo','TraineeTaske','TraineDate','TraineHoure','SupervisorName','SupervisorJob'];
    
}

