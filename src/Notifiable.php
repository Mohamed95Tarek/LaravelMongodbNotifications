<?php


namespace Mohamedtarek20\LaravelMongodbNotifications;

use Illuminate\Notifications\RoutesNotifications;

trait Notifiable
{
    use HasDatabaseNotifications, RoutesNotifications;

}
