<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    protected $table = 'tarefas';
    public $timestamps = true;
    protected $fillable = [
        'tarefa',
        'data_limite_conclusao',
        'user_id'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
