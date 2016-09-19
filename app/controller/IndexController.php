<?php

namespace Controller;

use Toby\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        /*
         * This is the index action in the index controller. You can trigger this action by visiting
         * http://yourappurl.com/index/index. Due to the default config setting in app/config/toby.php this action will
         * also be triggered when the requested controller or action does not exist.
         * 
         * After the action logic in here is executed your action will be rendered and sent to the browser. You can
         * find the view according to the controller and action names in the directory app/view/index/index.php.
         * This convention applies to all controllers and actions you create. You can override the view script by
         * calling $this->setViewScript('other/script'). You can disable view rendering by calling
         * $this->disableRendering().
         * 
         * You can pass data to the view script by setting properties to the local variable $this->view. Same goes for
         * the layout by using $this->layout.
         */
        
        $this->view->call_to_action = 'Now go ahead and make something awesome!';
    }
    
    public function defaultAction()
    {
        /*
         * This is the default action. If it is defined, it will be called in case the requested action is not present
         * in this controller. If the default action is not defined, the action defined in config parameter
         * toby.default.resolve will be called instead.
         * 
         * We could simply remove this action. But for explanatory reasons let's forward to the index action in the
         * index controller:  
         */

        $this->forward('index', 'index');
    }
}
