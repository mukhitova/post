<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Categories extends Controller_Template
{

    public $template = 'template';

    public function action_index()
    {
        $model_user = new Model_Categories();
        $cats = $model_user->get_all();

        $content = View::factory('categories')
            ->bind('blog_categories', $cats);
        $this->template->content = $content;
    }


    public function action_postView()
    {
        // Если есть данные, присланные методом POST
        if ($_POST) {
            $model_user = new Model_Categories();
            $cats = $model_user->insert_all();

            /// Вносим в эту переменную значения, переданные из POST
            $model_user->values(array(
                'name' => $_POST['name'],
                'annonce' => $_POST['annonce'],
                'post' => $_POST['post'],
            ));

        }

    } // End Welcome
}