<?php

declare(strict_types=1);

namespace Smile\CustomEntityProductLink\Plugin\Model\ResourceModel\Eav;

use Magento\Catalog\Model\ResourceModel\Eav\Attribute as Subject;

class Attribute
{
    /**
     * Whether allowed for rule condition
     *
     * @return bool
     */
    public function afterIsAllowedForRuleCondition(Subject $subject, bool $result)
    {
        if ($subject->getFrontendInput() == 'smile_custom_entity') {
            $result = $subject->getIsVisible();
        }

        return $result;
    }
}
