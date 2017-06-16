<?php defined('SYSPATH') or die('No direct script access.');

class Controller_site extends Controller_Template
{

    public $template = 'template';

    public function action_index()
    {
        $modelPosts = new Model_postModel();
        $post = $modelPosts->getPage();
        $pagination = Pagination::factory(array('total_items' => $post['totalRows']));

        $modelPosts = new Model_postModel();
        $newposts = $modelPosts->newPost();

        $content = View::factory('siteView')
            ->bind('blog_posts', $post['rows'])
            ->bind('newposts', $newposts)
            ->bind('pagination', $pagination);
        $this->template->content = $content;
    }



}