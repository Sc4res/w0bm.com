<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public const NEEDED = 150;

    public static function getPercentage() {
        return (static::getFunds() / static::NEEDED) * 100;
    }

    public static function getFunds() {
        return static::sum('amount');
    }
}