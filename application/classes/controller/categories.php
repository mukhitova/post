<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Categories extends Controller_Template
{

    public $template = 'template';

    public function action_index()
    {
        $modelPosts = new Model_categoriesModel();
        $posts = $modelPosts->getPage();
        $pagination = Pagination::factory(array('total_items' => $posts['totalRows']));

        $content = View::factory('categoriesView')
            ->bind('blog_categories', $posts['rows'])
            ->bind('pagination', $pagination);
        $this->template->content = $content;
    }

    public function action_addcategory()
    {
        $content = View::factory('addCategoryView')
            ->bind('blog_categories', $cats);
        $this->template->content = $content;

    }


    public function action_storecat()
    {
        $datas = array(

            'title' => Arr::get($_POST, 'title'),
            'meta_title' =>Arr::get($_POST, 'meta_title'),
            'meta_description' =>  Arr::get($_POST, 'meta_description'),
            'meta_keywords' =>  Arr::get($_POST, 'meta_keywords'),
            'description' => Arr::get($_POST, 'description'));


        $model_user = new Model_categoriesModel();
        $cats = $model_user->insert_all($datas);

        $this->action_index();
    }

    public function action_deletecat () {
        $error = true;
        $modelPost = new Model_categoriesModel();
        $id = Arr::get($_POST, 'id');
        if ($id) {
            $error = !$modelPost->delete_category($id);
        }
        $this->action_index();
    }

    public function action_editcat()
    {
        $post_id = Arr::get($_GET, 'id');
        $model_user = new Model_categoriesModel();
        $cats = $model_user->edit_cat($post_id);

        $content = View::factory('editCatView')
            ->bind('post', $cats);
        $this->template->content = $content;
    }

    public function action_savecat()
    {
        $datas = array(
            'title' => Arr::get($_POST, 'title'),
            'meta_title' =>Arr::get($_POST, 'meta_title'),
            'meta_description' =>  Arr::get($_POST, 'meta_description'),
            'meta_keywords' =>  Arr::get($_POST, 'meta_keywords'),
           'description' => Arr::get($_POST, 'description'),
           );

        $sql = "UPDATE blog_categories SET title=:title, meta_title = :meta_title, meta_description = :meta_description,
 meta_keywords = :meta_keywords,  description = :description WHERE id = :id";

        DB::query(Database::UPDATE, $sql)
            ->param(':id', Arr::get($_POST, 'id'))
            ->param(':title', $datas['title'])
            ->param(':meta_title', $datas['meta_title'])
            ->param(':meta_description', $datas['meta_description'])
            ->param(':meta_keywords', $datas['meta_keywords'])
            ->param(':description', $datas['description'])
            ->execute();

        return $this->request->redirect('categories');
    }


}