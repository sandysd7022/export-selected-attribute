<?php
namespace SD\AttributeExport\Model\Source;
use Magento\Framework\Data\OptionSourceInterface;
class AttributeOptions implements OptionSourceInterface;
{
    public function toOptionArray()
    {
        return [
            ['value' => 1, 'label' => __('Test One')],
            ['value' => 2, 'label' => __('Test Two')],
            ['value' => 3, 'label' => __('Test Three')],
        ];
    }
}