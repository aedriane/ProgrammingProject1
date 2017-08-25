<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class UserRegisteredNotification extends Notification
{

  public function __construct($user)
  {
      $this->user = $user;
  }

  public function via($notifiable)
  {
      return ['mail'];
  }

  public function toMail($notifiable)
  {
      return (new MailMessage)
          ->success()
          ->subject('Welcome to JobHorizon!')
          ->line('Dear ' . $this->user->username . ', we have sent you an email confirming your registration.')
          ->action('Confirm', url('/'), $this->user)
          ->line('Please click on confirm to successfully confirm your account and start accessing JobHorizon!');
  }
}
