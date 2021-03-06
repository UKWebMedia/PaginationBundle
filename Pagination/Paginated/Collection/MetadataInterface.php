<?php
namespace Cannibal\Bundle\PaginationBundle\Pagination\Paginated\Collection;

/**
 * Created by JetBrains PhpStorm.
 * User: adam
 * Date: 28/02/2013
 * Time: 14:29
 * To change this template use File | Settings | File Templates.
 */
interface MetadataInterface
{
    /**
     * Returns the current page
     *
     * @return mixed
     */
    public function getPage();

    public function getPerPage();

    public function getNextPage();

    public function getPreviousPage();

    public function getTotalResults();

    public function getTotalPages();
}
