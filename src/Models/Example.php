<?php

namespace Entwurfhaus\Owlet\Models;

use Illuminate\Database\Eloquent\Model;

class Example extends Model {
    private string $message;

    /**
     * Welcome constructor.
     *
     * @param string $message
     */
    public function __construct(string $message = 'Default') {
        parent::__construct();

        $this->message = $message;
    }

    /**
     * Get welcome message
     *
     * @return string|null
     */
    public function getMessage(): ?string {

        if (isset($this->message)) {
            return $this->message;
        }

        return null;
    }
}
