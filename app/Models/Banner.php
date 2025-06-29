<?php

namespace App\Models;

use App\Models\Status;
use App\Traits\AuditedBySoftDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
    use HasFactory, Notifiable, AuditedBySoftDelete, SoftDeletes;
    protected $table = 'banner';
    protected $guarded = ['id'];

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
}
