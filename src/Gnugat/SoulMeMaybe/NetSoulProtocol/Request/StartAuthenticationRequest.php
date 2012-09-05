<?php

namespace Gnugat\SoulMeMaybe\NetSoulProtocol\Request;

/**
 * Start authentication request class.
 *
 * @author Loic Chardonnet <loic.chardonnet@gmail.com>
 */
class StartAuthenticationRequest extends AbstractRequest
{
    /**
     * @var string The command name.
     */
    public $commandName = 'auth_ag';

    /**
     * @var integer The authentication type.
     */
    public $authenticationType = 'ext_user';

    /**
     * @var integer The unused argument 1.
     */
    public $unusedArgument1 = 'none';

    /**
     * @var integer The unused argument 2.
     */
    public $unusedArgument2 = 'none';

    /**
     * {@inheritdoc}
     */
    public function getRawRequestFromAttribute()
    {
        return $this->putsAttributeValuesInRawRequest(array(
            $this->commandName,
            $this->authenticationType,
            $this->unusedArgument1,
            $this->unusedArgument2,
        ));
    }
}
