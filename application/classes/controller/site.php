<?php defined('SYSPATH') or die('No direct script access.');

class Controller_site extends Controller_Template
{

    public $template = 'template';

    public function action_index()
    {

        if(Cookie::get('b_user_id')==''){
            $b_user_id = rand(100,1000).''.rand(100,1000).''.rand(100,1000);
            Cookie::set('b_user_id',$b_user_id);
        }

        $modelPosts = new Model_postModel();
        $post = $modelPosts->getPage();
        $count = $modelPosts->countId();
        $pagination = Pagination::factory(array('total_items' => $post['totalRows']));

        $modelPosts = new Model_postModel();
        $newposts = $modelPosts->newPost();

        $content = View::factory('siteView')
            ->bind('blog_posts', $post['rows'])
            ->bind('newposts', $newposts)
            ->bind('count', $count)
            ->bind('pagination', $pagination);
        $this->template->content = $content;


    }





}