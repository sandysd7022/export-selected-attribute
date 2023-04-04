<?php
namespace SD\AttributeExport\Controller\Adminhtml\Form;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Main page controller
 */
class Index extends Action
{

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context     $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {

        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('SD_AttributeExport::form');
        $resultPage->addBreadcrumb(__('Form'), __('Select Attributes'));
        $resultPage->getConfig()->getTitle()->prepend(__('Select Attributes'));
        return $resultPage;
    }
}