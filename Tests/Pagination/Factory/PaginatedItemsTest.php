<?php
namespace Cannibal\Bundle\PaginationBundle\Tests\Pagination\Factory;

use PHPUnit_Framework_TestCase;

use Cannibal\Bundle\PaginationBundle\Pagination\Factory\PaginatedItemsFactory;

/**
 * Created by JetBrains PhpStorm.
 * User: mv
 * Date: 02/01/13
 * Time: 15:38
 * To change this template use File | Settings | File Templates.
 */
class PaginatedItemsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @return \Cannibal\Bundle\PaginationBundle\Pagination\Factory\PaginatedItemsFactory
     */
    public function getPaginatedItemsFactory()
    {
        return new PaginatedItemsFactory();
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject||\Cannibal\Bundle\PaginationBundle\Pagination\PaginationConfig
     */
    public function createConfigurationMock()
    {
        return $this->getMock('\\Cannibal\\Bundle\\PaginationBundle\\Pagination\\PaginationConfig');
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject||\Pagerfanta\PagerfantaInterface
     */
    public function createPagerfantaMock()
    {
        return $this->getMock('Pagerfanta\\PagerfantaInterface');
    }

    public function testCreatePaginatedItems()
    {
        $factory = $this->getPaginatedItemsFactory();

        $adapter = $this->createPagerfantaMock();
        $configuration = $this->createConfigurationMock();
        $out = $factory->createPaginatedItems($adapter, $configuration);

        $this->assertInstanceOf('Cannibal\\Bundle\\PaginationBundle\\Pagination\\PaginatedCollection', $out);
        $this->assertEquals($out->getAdapter(), $adapter);
        $this->assertEquals($out->getConfiguration(), $configuration);
    }
}
