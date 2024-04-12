<?php

namespace App\Models\Task;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Task extends Model
{
    use HasFactory, softDeletes;

    protected $table = 'trasks';

    public $incrementing = true;

    protected $primaryKey = 'id';

    protected $fillable = [
        'checklist', 'color', 'completed', 'fontColor', 'startTime', 'taskListID'
    ];

}