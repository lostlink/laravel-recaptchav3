<?php
/**
 * Created by Josias Montag
 * Date: 10/30/18 11:02 AM
 * Mail: josias@montag.info
 */

namespace Lostlink\RecaptchaV3\Facades;


use Illuminate\Support\Facades\Facade;
use Lostlink\RecaptchaV3\RecaptchaV3 as RecaptchaV3Instance;

class RecaptchaV3 extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return RecaptchaV3Instance::class;
    }
}
