<?php
/**
 * LLR Technologies & Associated Services
 * Information Systems Development
 *
 * Mercury Merlot
 *
 * User: lromero
 * Date: 5/05/2019
 * Time: 5:37 PM
 */


namespace views\pages\admin;


use views\forms\admin\NotificationForm;
use views\pages\UserDocument;

class SendNotificationPage extends UserDocument
{
    public function __construct()
    {
        parent::__construct('settings', 'admin');

        $this->setVariable('tabTitle', 'Send Notification');

        $form = new NotificationForm();
        $this->setVariable('content', $form->getTemplate());
    }
}