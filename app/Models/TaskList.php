<?php

namespace App\Models\TaskList;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Traits\GenerateUUID;

class TaskList extends Model
{
    use HasFactory;
    use GenerateUUID;
    use softDeletes;

    protected $table = 'taskList';

}