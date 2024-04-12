<?php 

namespace App\Models\proyect;

use Illuminate\Database\Eloquent\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\GenerateUUID;

class proyect extends Model
{
    use HasFactory, GenerateUUID, SoftDeletes;

    protected $table = 'projects';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $primaryKey = 'id';

    protected $fillable = [
        'listColor', 'listFontColor', 'defaultTaskColor', 'defaultTaskFontColor', 'defaultCheck'
    ];
}