<?php

namespace Jeely\Update;

enum UpdateHandlerMode: string
{
    case Polling = 'polling';
    case Server = 'server';
    case Webhook = 'webhook';
}
