<?php

class NotificationService
{
    const NOTIFICATIONS = 'notifications';

    public function setNotification($message, $status)
    {
        $_SESSION[self::NOTIFICATIONS][$status][] = [
            'message' => $message,
        ];
    }

    public function getErrorNotifications()
    {
        return isset($_SESSION[self::NOTIFICATIONS]['error']) ? $_SESSION[self::NOTIFICATIONS]['error'] : [];
    }

    public function getSuccessNotifications()
    {
        return isset($_SESSION[self::NOTIFICATIONS]['success']) ? $_SESSION[self::NOTIFICATIONS]['success'] : [];
    }

    public function getAllNotifications()
    {
        return isset($_SESSION[self::NOTIFICATIONS]) ? $_SESSION[self::NOTIFICATIONS] : [];
    }

    public function deleteAll()
    {
        if (isset($_SESSION[self::NOTIFICATIONS])) {
            unset($_SESSION[self::NOTIFICATIONS]);
        }
    }
}