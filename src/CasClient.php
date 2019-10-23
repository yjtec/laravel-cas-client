<?php
namespace Yjtec\CasClient;
use YjtecCloud\Client\YjtecCloud;
class CasClient{
    public function check($ticket){
        return YjtecCloud::rpc()
            ->product('cas')
            ->action('checkTicket')
            ->options([$ticket])
            ->request();
    }
}