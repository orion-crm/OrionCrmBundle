<?php

declare(strict_types=1);

/*
 * Studio 107 (c) 2018 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OrionCrm\Bundle\OrionCrmBundle\Settings;

use Mindy\Bundle\SettingBundle\Settings\AbstractSettings;
use OrionCrm\Bundle\OrionCrmBundle\Form\Settings\OrionCrmSettingsForm;

class OrionCrmSettings extends AbstractSettings
{
    /**
     * OrionCrmSettings constructor.
     * @param OrionCrmSettingsForm $form
     */
    public function __construct(OrionCrmSettingsForm $form)
    {
        $this->setForm($form);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Orion CRM';
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'Настройки API ключей';
    }

    /**
     * @return string
     */
    public function getPrefix(): string
    {
        return 'mindy.orion_crm';
    }
}
