<?php
/**
 * Created by PhpStorm.
 * User: grucheta
 * Date: 31/03/18
 * Time: 00:38
 */

namespace Album\Controller;

use Album\Model\AlbumTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class AlbumController extends AbstractActionController {

    private $table;

    public function __construct(AlbumTable $table) {
        $this->table = $table;
    }

    public function indexAction() {

    }

    public function addAction() {

    }

    public function editAction() {

    }

    public function deleteAction() {

    }
}

