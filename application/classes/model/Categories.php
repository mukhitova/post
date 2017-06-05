<?php defined('SYSPATH') or die('No direct script access.');

class Model_Categories extends Model
{
    protected $_tableArticles = 'blog_categories';

    /**
     * Get all articles
     * @return array
     */
    public function get_all()
    {
        $cats = "SELECT * FROM ". $this->_tableArticles;

        return DB::query(Database::SELECT, $cats)
            ->execute();
    }

    public function insert_all()
    {
        {
            $posts = "INSERT INTO users(login,password,avatar) VALUES ($name,$annonce, $post)". $this->_tableArticles;

            return DB::query(Database::SELECT, $posts)
                ->execute();
        }

    }

}