<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tags extends Controller_Template {

    public $template = 'template';

    public function action_index()
    {
        $modelPosts = new Model_tagModel();
        $posts = $modelPosts->getPage();
        $pagination = Pagination::factory(array('total_items' => $posts['totalRows']));

        $content = View::factory('tagView')
            ->bind('blog_tags', $posts['rows'])
            ->bind('pagination', $pagination);
        $this->template->content = $content;
    }

    public function action_addtag()
    {
        $content = View::factory('addTagView')
            ->bind('blog_tags', $posts);
        $this->template->content = $content;
    }

    public function action_storetag()
    {
        $datas = array(

            'title' => Arr::get($_POST, 'title'),
            'meta_title' =>Arr::get($_POST, 'meta_title'),
            'meta_description' =>  Arr::get($_POST, 'meta_description'),
            'meta_keywords' =>  Arr::get($_POST, 'meta_keywords'),
            'description' => Arr::get($_POST, 'description'));





            $model_user = new Model_tagModel();
            $tags = $model_user->insert_all($datas);

        $this->action_index();
    }

    public function action_deletetag () {
        $error = true;
        $modelPost = new Model_tagModel();
        $id = Arr::get($_POST, 'id');
        if ($id) {
            $error = !$modelPost->delete_tag($id);
        }
        $this->action_index();
    }

    public function action_edittag()
    {
        $post_id = Arr::get($_GET, 'id');
        $model_user = new Model_tagModel();
        $tags = $model_user->edit_tag($post_id);

        $content = View::factory('editTagView')
            ->bind('post', $tags);
        $this->template->content = $content;
    }

    public function action_savetag()
    {
        $datas = array(
            'title' => Arr::get($_POST, 'title'),
            'meta_title' =>Arr::get($_POST, 'meta_title'),
            'meta_description' =>  Arr::get($_POST, 'meta_description'),
            'meta_keywords' =>  Arr::get($_POST, 'meta_keywords'),
            'description' => Arr::get($_POST, 'description'),
        );


        $sql = "UPDATE blog_tags SET title=:title, meta_title = :meta_title, meta_description = :meta_description,
 meta_keywords = :meta_keywords,  description = :description WHERE id = :id";

        DB::query(Database::UPDATE, $sql)
            ->param(':id', Arr::get($_POST, 'id'))
            ->param(':title', $datas['title'])
            ->param(':meta_title', $datas['meta_title'])
            ->param(':meta_description', $datas['meta_description'])
            ->param(':meta_keywords', $datas['meta_keywords'])
            ->param(':description', $datas['description'])
            ->execute();

        return $this->request->redirect('tags');
    }



}