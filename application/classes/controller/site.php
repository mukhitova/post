<?php defined('SYSPATH') or die('No direct script access.');

class Controller_site extends Controller_Template
{

    public $template = 'template';

    public function action_index()
    {
        $modelPosts = new Model_postModel();
        $post = $modelPosts->getPage();
        $pagination = Pagination::factory(array('total_items' => $post['totalRows']));

        $content = View::factory('siteView')
            ->bind('blog_posts', $post['rows'])
            ->bind('pagination', $pagination);
        $this->template->content = $content;

    }

public function action_tags()
{
    $modelTags = new Model_tagModel();
    $tags = $modelTags->getPage();

    $content = View::factory('siteView')
        ->bind('blog_tags', $tags['rows']);
    $this->template->content = $content;
}

}