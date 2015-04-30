<?php
namespace Disque\Command;

class Info extends BaseCommand implements CommandInterface
{
    /**
     * This command, with all its arguments, ready to be sent to Disque
     *
     * @return string Command for Disque
     */
    public function __toString()
    {
        return 'INFO';
    }
}