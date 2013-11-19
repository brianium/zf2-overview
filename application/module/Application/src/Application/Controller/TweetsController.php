<?php
namespace Application\Controller;

use Application\Form\TweetSearchForm;
use Zend\Mvc\Controller\AbstractActionController;

class TweetsController extends AbstractActionController
{
    public function indexAction()
    {
        $form = new TweetSearchForm();
        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setData($request->getPost());
            if (! $form->isValid()) return ['form' => $form];
            $response = $this->getServiceLocator()->get('twitter')->searchTweets($form->get('search')->getValue());
            return ['tweets' => $response, 'form' => $form];

        }
        return ['form' => $form];
    }
} 