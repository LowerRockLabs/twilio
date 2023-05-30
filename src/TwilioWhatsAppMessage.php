<?php

namespace NotificationChannels\Twilio;

class TwilioWhatsAppMessage extends TwilioSmsMessage
{

    /**
     * Get the from address of this message.
     *
     * @return null|string
     */
    public function getFrom(): ?string
    {
        if ($this->from) {
            if(substr($this->from,0,9) != 'whatsapp:')
            {
                $this->from = 'whatsapp:' . $this->from;
            }
    
            return $this->from;
        }

        return null;
    }

    /**
     * Set the alphanumeric sender.
     *
     * @param string $sender
     * @return $this
     */
    public function sender(string $sender): self
    {
        $this->alphaNumSender = $sender;

        return $this;
    }
}
