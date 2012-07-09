<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @package   Zend_Paginator
 */

namespace Zend\Paginator\Adapter;

/**
 * @category   Zend
 * @package    Zend_Paginator
 */
class DbTableSelect extends DbSelect
{
    /**
     * Returns a Zend\Db\Table\AbstractRowset of items for a page.
     *
     * @param  integer $offset Page offset
     * @param  integer $itemCountPerPage Number of items per page
     * @return \Zend\Db\Table\AbstractRowset
     */
    public function getItems($offset, $itemCountPerPage)
    {
        $this->_select->limit($itemCountPerPage, $offset);

        return $this->_select->getTable()->fetchAll($this->_select);
    }
}
