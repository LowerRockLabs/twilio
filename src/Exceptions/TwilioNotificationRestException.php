<?php

declare(strict_types=1);

namespace NotificationChannels\Twilio\Exceptions;

class TwilioNotificationRestException extends \Twilio\Exceptions\RestException {

    protected $to;
    protected $params;

    public function __construct($to, $params, string $message, int $code, int $statusCode, string $moreInfo = '', array $details = []) {
      $this->to = $to;
      $this->params = $params;
      parent::__construct($message, $code, $statusCode, $moreInfo, $details);
    }
}
