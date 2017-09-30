<?php

namespace ProjectEight\Magento\Command\System\Report\Versions;

use ProjectEight\Magento\Command\System\Report\Result;
use ProjectEight\Magento\Command\System\Report\ResultCollection;
use ProjectEight\Magento\Command\System\Report\SimpleReport;

/**
 * Class MagentoVersionReport
 *
 * @package ProjectEight\Magento\Command\System\Report\Versions
 */
class MagentoVersionReport implements SimpleReport
{
    /**
     * @param ResultCollection $results
     *
     * @return void
     */
    public function report(ResultCollection $results)
    {
        $result = $results->createResult();

        $version = \Mage::getVersion();

        $result->setStatus(Result::STATUS_INFO);
        $result->setMessage("<info>Version: <comment>$version</comment>.</info>");
    }

}