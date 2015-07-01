<?php namespace Anomaly\PartialsModule\Http\Controller\Admin;

use Anomaly\SettingsModule\Setting\Form\SettingFormBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class SettingsController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\PartialsModule\Http\Controller\Admin
 */
class SettingsController extends AdminController
{

    /**
     * Return a form to edit the Partials module settings.
     *
     * @param SettingFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(SettingFormBuilder $form)
    {
        return $form->render('anomaly.module.partials');
    }
}
