<?php
/**
 * LLR Technologies & Associated Services
 * Information Systems Development
 *
 * Mercury InfoScape
 *
 * User: lromero
 * Date: 5/24/2019
 * Time: 3:34 PM
 */


namespace controllers\lockshop;


use controllers\Controller;
use views\pages\lockshop\LIMSHome;
use views\View;

class LockShopController extends Controller
{
    /**
     * @return null|View
     * @throws \exceptions\InfoCentralException
     * @throws \exceptions\SecurityException
     * @throws \exceptions\ViewException
     */
    public function getPage(): ?View
    {
        switch($this->request->next())
        {
            case NULL:
                return new LIMSHome();
        }

        return NULL;
    }
}