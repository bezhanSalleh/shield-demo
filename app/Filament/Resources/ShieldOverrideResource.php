<?php

namespace App\Filament\Resources;

use BezhanSalleh\FilamentShield\Resources\RoleResource;

class ShieldOverrideResource extends RoleResource
{
    public static function getNavigationLabel(): string
    {
        return 'Roles & Permissions';
    }

    public static function shouldRegisterNavigation(): bool
    {
        return true;
    }
}
