<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

    public $template = 'template';

	public function action_index()
	{

	    $model_user = new Model_Article();
	    $posts = $model_user->get_all();

        $content = View::factory('welcome')
                    ->bind('posts', $posts);
        $this->template->content = $content;
    }

} // End Welcome
