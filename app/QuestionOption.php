<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionOption extends Model
{
    use SoftDeletes;

    public $table = 'question_options';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'question_id',
        'option_text',
        'is_correct',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
