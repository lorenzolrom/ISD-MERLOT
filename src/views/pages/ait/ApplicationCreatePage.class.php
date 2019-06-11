<?php
/**
 * LLR Technologies & Associated Services
 * Information Systems Development
 *
 * Mercury InfoScape
 *
 * User: lromero
 * Date: 5/04/2019
 * Time: 2:05 PM
 */


namespace views\pages\ait;


use views\forms\ait\ApplicationForm;
use views\pages\NetCenterDocument;

class ApplicationCreatePage extends NetCenterDocument
{
    public function __construct()
    {
        parent::__construct('itsm_ait-apps-w', 'ait');

        $form = new ApplicationForm();

        $this->setVariable('tabTitle', "Application (New)");
        $this->setVariable('content', $form->getTemplate());
        $this->setVariable('cancelLink', "{{@baseURI}}ait/applications");
        $this->setVariable('formScript', "return create()");
    }
}