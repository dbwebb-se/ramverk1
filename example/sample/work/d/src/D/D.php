<?php

namespace Anax\D;

/**
 * A class to place as service in $di and show off how to inject
 * dependencies into a (model) class.
 *
 * The $di can be injected through the controller or setDI().
 * The session can also be injected throught setSession().
 *
 * You can use the same setup as a controller class, to implement
 * support for setDI().
 *    implements ContainerInjectableInterface
 *    use ContainerInjectableTrait
 */
class D
{
    private $message = "My name is Mumintrollet, default value";


    /**
     * @var ContainerInterface $di the dependency/service container.
     */
    protected $di;



    /**
     * Constructor, allow for $di to be injected.
     *
     * @param ContainerInterface $di a dependency/service container
     */
    public function __construct(ContainerInterface $di)
    {
        $this->di = $di;
    }



    /**
     * Set the dependency/service container to use.
     *
     * @param ContainerInterface $di a dependency/service container
     *
     * @return self
     */
    public function setDI(ContainerInterface $di)
    {
        $this->di = $di;
        return $this;
    }



    /**
     * @var SessionInterface $session the injected session.
     */
    protected $session;



    /**
     * Set the session service to use.
     *
     * @param SessionInterface $session to inject
     *
     * @return self
     */
    public function setSession(SessionInterface $session)
    {
        $this->session = $session;
        return $this;
    }



    public function getMessage() : string
    {
        return $this->message
            . "Class has \$di:      " . $this->di ? "NO" : "YES"
            . "Class has \$session: " . $this->session ? "NO" : "YES";
    }



    public function setMessage($message) : void
    {
        $this->message = $message;
    }
}
