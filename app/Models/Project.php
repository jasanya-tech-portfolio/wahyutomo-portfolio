<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory, Notifiable, SoftDeletes;
    protected $table = 'project';
    protected $guarded = ['id'];

    protected $casts = [
        'image' => 'array',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function tools()
    {
        return $this->belongsTo(Tools::class, 'tools_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
