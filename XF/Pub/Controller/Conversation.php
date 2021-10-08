<?php

namespace ThemeHouse\BanPermissions\XF\Pub\Controller;

/**
 * Class Conversation
 * @package ThemeHouse\BanPermissions\XF\Pub\Controller
 */
class Conversation extends XFCP_Conversation
{
    /**
     * @throws \XF\Mvc\Reply\Exception
     */
    public function assertNotBanned()
    {
        if (!\XF::options()->thbanpermissions_allowConversations) {
            return parent::assertNotBanned();
        }

        return null;
    }
}
