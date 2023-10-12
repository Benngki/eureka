<?php

namespace App\Models;

use App\Models\TestAnswer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TestQuestion extends Model
{
    use HasFactory;

    /**
     * Get all of the answers for the TestQuestion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers(): HasMany
    {
        return $this->hasMany(TestAnswer::class);
    }
}
