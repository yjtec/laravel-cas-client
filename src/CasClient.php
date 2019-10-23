<?php
namespace Yjtec\CasClient;

use Exception;
use YjtecCloud\Client\YjtecCloud;

class CasClient
{
    public function check($ticket)
    {
        try {
            $return = YjtecCloud::rpc()
                ->product('cas')
                ->action('checkTicket')
                ->options([$ticket])
                ->request();
        } catch (Exception $th) {
        }
        if (!isset($return['user'])) {
            return false;
        } else {
            return $return;
        }
    }
}
