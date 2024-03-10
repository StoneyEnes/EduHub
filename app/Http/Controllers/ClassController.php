<?php

namespace App\Http\Controllers;

use app\Enums\PermissionEnum;
use App\Models\SClass;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\Count;

class ClassController extends Controller
{
    public function index($id = null)
    {
        if (!$id) {
            $classes = SClass::where('school_id', 1)->get()->sortBy('class')->toArray();
            $groupedClasses = [];

            foreach ($classes as $value) {
                $classKey = $value['class'];
                $groupedClasses[$classKey][] = $value;
            }
            return view('class', ['classes' => $classes, 'groupedClasses' => $groupedClasses]);


        } else {
            $x = SClass::find($id)->toArray();
            $students = User::where('class_id', '=', $id)->where('permission', '!=', '2')->get()->sortBy([
                ['permission', 'desc'],
                ['name', 'asc']
            ]);
            $students = $students->toArray();

            return view('class_info', ['class' => $x, 'students' => $students]);
        }
    }
}
