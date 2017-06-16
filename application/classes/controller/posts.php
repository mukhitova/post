<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Posts extends Controller_Template {

    private $db = 'kohana';
    public $template = 'template';

	public function action_index()
	{
        $modelPosts = new Model_postModel();
        $posts = $modelPosts->getPage();
        $pagination = Pagination::factory(array('total_items' => $posts['totalRows']));

      /*  $kwy = session_create_id();
var_dump($kwy);*/
        $content = View::factory('postView')
         ->bind('blog_posts', $posts['rows'])
         ->bind('pagination', $pagination);
        $this->template->content = $content;

    }

    public function action_addpost()
    {
        $content = View::factory('addPostView')
            ->bind('blog_posts', $posts);
        $this->template->content = $content;



    }

    public function action_storepost()
    {
        $datas = array(

            'title' => Arr::get($_POST, 'title'),
            'meta_title' =>Arr::get($_POST, 'meta_title'),
            'meta_description' =>  Arr::get($_POST, 'meta_description'),
            'meta_keywords' =>  Arr::get($_POST, 'meta_keywords'),
            'image_url' =>  Arr::get($_POST, 'image_url'),
            'description' => Arr::get($_POST, 'description'),
            'text' => Arr::get($_POST, 'text'),
            'user_id' =>Arr::get($_POST, 'user_id'));

        $model_user = new Model_postModel();
        $post = $model_user->insert_all($datas);

        $this->action_index();
    }


    public function action_deletepost () {
        $error = true;
        $modelPost = new Model_postModel();
        $id = Arr::get($_POST, 'id');
        if ($id) {
                $error = !$modelPost->delete_post($id);
        }
        $this->action_index();
    }


    public function action_editpost()
    {
        $post_id = Arr::get($_GET, 'id');
        $model_user = new Model_postModel();
        $posts = $model_user->edit_post($post_id);

        $content = View::factory('editPostView')
            ->bind('post', $posts);
        $this->template->content = $content;
    }


    public function action_eachpost()
    {
        $post_id = Arr::get($_GET, 'id');
        $model_user = new Model_postModel();
        $posts = $model_user->edit_post($post_id);
        $viewPost = $model_user->setView(Cookie::get('b_user_id'), $_GET['id']);
        $content = View::factory('eachpostView')
            ->bind('post', $posts);
        $this->template->content = $content;


    }
    public function action_savepost()
    {
        $datas = array(
            'title' => Arr::get($_POST, 'title'),
            'meta_title' =>Arr::get($_POST, 'meta_title'),
            'meta_description' =>  Arr::get($_POST, 'meta_description'),
            'meta_keywords' =>  Arr::get($_POST, 'meta_keywords'),
            'image_url' =>  Arr::get($_POST, 'image_url'),
            'description' => Arr::get($_POST, 'description'),
            'text' => Arr::get($_POST, 'text'),
            'user_id' =>Arr::get($_POST, 'user_id')
        );

        $sql = "UPDATE blog_posts SET title=:title, meta_title = :meta_title, meta_description = :meta_description,
 meta_keywords = :meta_keywords, image_url = :image_url, description = :description,
 text = :text, user_id = :user_id WHERE id = :id";

        DB::query(Database::UPDATE, $sql)
            ->param(':id', Arr::get($_POST, 'id'))
            ->param(':title', $datas['title'])
            ->param(':meta_title', $datas['meta_title'])
            ->param(':meta_description', $datas['meta_description'])
            ->param(':meta_keywords', $datas['meta_keywords'])
            ->param(':image_url', $datas['image_url'])
            ->param(':description', $datas['description'])
            ->param(':text', $datas['text'])
            ->param(':user_id', $datas['user_id'])
            ->execute();

        return $this->request->redirect('posts');
    }


}