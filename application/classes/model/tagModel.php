<?php defined('SYSPATH') or die('No direct script access.');

class Model_tagModel extends Model
{
    protected $_tableArticles = 'blog_tags';

    /**
     * Get all articles
     * @return array
     */
    public function get_all()
    {
        $start = 0;
        $limit = 10;

        $cats = "SELECT * FROM " . $this->_tableArticles;

        return DB::query(Database::SELECT, $cats)
            ->execute();


    }

    public function insert_all($datas)
    {
        $query = DB::insert($this->_tableArticles, array_keys($datas))
            ->values(array_values($datas))
            ->execute();

    }

    public function delete_tag($id)
    {
        if ($id) {
            return (bool)DB::delete($this->_tableArticles)->where('id', '=', $id)->execute();
        }
        return false;
    }

    public function edit_tag($id)
    {
        $sql = DB::query(Database::SELECT, "SELECT * FROM blog_tags WHERE id = :id")
            ->param(':id', $id)
            ->execute()
            ->current();
        return $sql;
    }

    public function getPage()
    {
        $limits = ' limit 10 offset ' . ((Arr::get($_GET, 'page', 1) - 1) * 10);
        $rows = DB::query(Database::SELECT, "select SQL_CALC_FOUND_ROWS *
                FROM blog_tags {$limits}")
            ->execute()->as_array();
        $totalRows = DB::query(Database::SELECT, 'select FOUND_ROWS() totalRows')->execute()->current();
        return array(
            'totalRows' => $totalRows['totalRows'],
            'rows' => $rows
        );
    }
}