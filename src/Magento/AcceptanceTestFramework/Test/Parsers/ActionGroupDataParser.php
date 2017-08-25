<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\AcceptanceTestFramework\Test\Parsers;

use Magento\AcceptanceTestFramework\Config\DataInterface;

/**
 * Class ActionGroupDataParser
 */
class ActionGroupDataParser
{
    /**
     * ActionGroupDataParser constructor.
     *
     * @param DataInterface $actionGroupData
     */
    public function __construct(DataInterface $actionGroupData)
    {
        $this->actionGroupData = $actionGroupData;
    }

    /**
     * Read action group xml and return as an array.
     *
     * @return array
     */
    public function readActionGroupData()
    {
        return $this->actionGroupData->get();
    }
}
