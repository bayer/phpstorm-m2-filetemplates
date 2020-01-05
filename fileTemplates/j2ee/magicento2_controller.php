<?php
#parse("PHP File Header")
namespace ${NAMESPACE};
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\Pagefactory;
class ${CLASSNAME} extends ${EXTENDS}
{
   /**
     * @var PageFactory
     */
    private $pageFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->pageFactory->create();
    }

}