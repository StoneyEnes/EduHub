<?php

namespace app\Enums;

enum PermissionEnum: string
{
    case ADMIN = '2';
    case TEACHER = '1';
    case STUDENT = '0';

    public static function getPermissionType(string $value): string
    {
        if ($value == PermissionEnum::ADMIN->value) {
            return 'Admin';
        } elseif ($value == PermissionEnum::TEACHER->value) {
            return 'Teacher';
        } elseif ($value == PermissionEnum::STUDENT->value) {
            return 'Student';
        } else {
            return 'Unknown';
        }
    }
}

