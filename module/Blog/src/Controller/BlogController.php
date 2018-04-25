<?php
/**
 * Created by PhpStorm.
 * User: christmas
 * Date: 14/04/18
 * Time: 11:06
 */

namespace Blog\Controller;


use Blog\Model\PostTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BlogController extends AbstractActionController
{
    private $table;

    public function __construct(PostTable $table)
    {
        $this->table = $table;
    }

    public function indexAction()
    {
        $postTable = $this->table;

        return new ViewModel([
            'posts'=> $postTable->fetchAll()
        ]);
    }

}