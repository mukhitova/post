<?php defined('SYSPATH') or die('No direct script access.');

class Model_postModel extends Model
{
    protected $_tableArticles = 'blog_posts';

    /**
     * Get all articles
     * @return array
     */
    public function get_all()
    {
        $posts = "SELECT * FROM ". $this->_tableArticles;

        return DB::query(Database::SELECT, $posts)
            ->execute();
    }

    public function insert_all($datas)
    {
        $query = DB::insert($this->_tableArticles, array_keys($datas))
            ->values (array_values($datas))
            ->execute();

    }

    public function delete_post ($id) {
        if ($id) {
            return (bool) DB::delete ($this->_tableArticles) ->where ('id', '=', $id)->execute();
        }
        return false;
    }

    public function edit_post($id)
    {
        $sql = DB::query(Database::SELECT, "SELECT * FROM blog_posts WHERE id = :id")
            ->param(':id', $id)
            ->execute()
            ->current();
        return $sql;
    }

    public function count_all ($id) {
        $sql = DB::query(Database::SELECT, "SELECT count('id') FROM blog_posts")
            ->param(':id', $id)
            ->execute()
            ->current();
        return $sql;
    }

    public function getPage(){
        $limits = ' limit 10 offset ' . ((Arr::get($_GET, 'page', 1)-1) * 10);
        $rows =  DB::query(Database::SELECT, "select SQL_CALC_FOUND_ROWS *
                FROM blog_posts {$limits}")
                 ->execute()->as_array();
        $totalRows = DB::query(Database::SELECT, 'select FOUND_ROWS() totalRows')->execute()->current();
        return array(
            'totalRows' => $totalRows['totalRows'],
            'rows' => $rows
        );
    }


}