<?php

namespace AcmeWidgets\ProductPromoter\Controller\Index;


use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;


class Index extends \Magento\Framework\App\Action\Action
{
	/**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_resultPageFactory;
	/**
	  * Index Constructor
	  * @param \Magento\Framework\App\Action\Context $context
	  8 @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
	  */
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
		)
	{
		$this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
	}
	
	/**
	  * Index Execution function
	  */
	public function execute()
	{
		echo "Hello world!";
		die();
	}
}