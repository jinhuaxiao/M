<?php
/**
 * @link https://github.com/MaGuowei
 * @copyright 2013 maguowei.com
 * @author Ma Guowei <imaguowei@gmail.com>
 */

namespace Mlog\Controller;


use M\Extend\Page;
use M\Mvc\Model\Model;
use Mlog\Model\Post;

class Search extends Common
{
    /**
     * @var array
     */
    public $data = array(
        'title' => 'Search',
        'nav' => array('Search'),
    );

    public function index()
    {
        if (!empty($_POST['search']))
        {
            $key = $_POST['search'];

            $Post = new Post();
            $Page = new Page($Post);
            $this->assign('page',$Page->getPage());
            $post = $Post->where("`title` LIKE '%$key%' OR `content` LIKE '%$key%' OR `tags` LIKE '%$key%'")->order('id','desc')->limit(5)->select();
            $this->assign('post', $post);
            $this->display('Search/index');
        }
        else
        {
            $this->display('Search/search');
        }

    }
}