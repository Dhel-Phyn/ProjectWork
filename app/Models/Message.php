<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Classes extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['announcement', 'events', 'message_id' ];


    /**
     * Get the Classes model associated with theStudents model.
     */
    public function students(): HasOne
    {
        return $this->hasOne(Students::class);
    }

/**
     * Get the Classes model associated with the department model.
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }


    public function dues(): HasOne
    {
        return $this->hasOne(Dues::class);
    }


}
