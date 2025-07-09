<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectTools extends Model
{
    use HasFactory;
    protected $table = 'project_tools';

     // Nonaktifkan timestamps
    public $timestamps = false;

     // Nonaktifkan fitur primary key karena tabel tidak punya primary key
    protected $primaryKey = null;
    public $incrementing = false;
    
      // Menambahkan properti fillable
    protected $fillable = [
        'project_id',
        'tools_id',
    ];
    
    public function tools(): BelongsTo
    {
        return $this->belongsTo(Tools::class, 'tools_id');
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
