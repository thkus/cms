<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.github.io/license/
 */

namespace craft\test\mockclasses\components;


use craft\base\Component;
use yii\base\Event;
use stdClass;

/**
 * Class EventTriggeringComponent.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @author Global Network Group | Giel Tettelaar <giel@yellowflash.net>
 * @since  3.1
 */
class EventTriggeringComponent extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * Triggers an event.
     */
    public function triggerEvent()
    {
        $event = new Event();
        $event->sender = ['22' => '44', '33' => '55'];

        $this->trigger('event', $event);
    }

    /**
     * Triggers an event with standard class
     */
    public function triggerEventWithStdClass()
    {
        $stdClass = new stdClass();
        $stdClass->a = '22';

        $event = new Event();
        $event->sender = $stdClass;

        $this->trigger('event', $event);
    }



}
