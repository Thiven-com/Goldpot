<?php
namespace App\Helpers;
use App\Models\SchemeMember;
class SchemeHelper
{
    public static function memberNo()
    {
        $last = SchemeMember::latest()->first();

        $next = $last ? $last->id + 1 : 1;

        return 'GS' . date('y') . str_pad($next, 6, '0', STR_PAD_LEFT);
    }
}