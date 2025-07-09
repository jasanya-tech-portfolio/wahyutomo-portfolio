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
        return $this->belongsToMany(Tools::class, 'project_tools', 'project_id', 'tools_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'project_category', 'project_id', 'category_id');
    }
}
