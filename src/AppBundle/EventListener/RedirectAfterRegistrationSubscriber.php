<?php

namespace AppBundle\EventListener;

use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
/*use Symfony\Component\Security\Http\Util\getTargetPath;*/

class RedirectAfterRegistrationSubscriber implements EventSubscriberInterface
{
    
    use TargetPathTrait;

    private $router;


    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }
    public function onRegistrationSuccess(FormEvent $event)
    {  

        #provider 
        $url = $this->getTargetPath($event->getRequest()->getSession(), 'main');
        dump(   $url);
        if (!$url) {

            $url = $this->router->generate('homepage');
        }
        
        $response = new RedirectResponse($url);
        $event->setResponse($response);
    }
    public static function getSubscribedEvents()
    {
        return [

            FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess',
        ];
    }
}
