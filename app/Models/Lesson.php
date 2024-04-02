<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VacancyLevel;

class Lesson extends Model
{
    public function getVacancyLevelAttribute(): VacancyLevel
     {
         return new VacancyLevel($this->remainingCount());
     }

     public function remainingCount(): int
     {
         return 0;
     }
}
