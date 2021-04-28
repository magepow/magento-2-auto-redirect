<?php
namespace Magepow\Autoredirect\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

class ControllerPredispatch implements ObserverInterface
{
    /**
     * @var \Magento\Framework\UrlInterface
     */
    protected $url;

    /**
     * @var \Magento\Framework\App\Response\Http
     */
    protected $http;

    /** @var \Magento\Customer\Model\Session */
    protected $customerSession;
    protected $productModel;
    protected $productRepository;
    protected $data;
    /**
     * @param \Magento\Framework\UrlInterface $url
     * @param \Magento\Framework\App\Response\Http $http
     * @param \Magento\Customer\Model\Session $customerSession
     */
    public function __construct(
        \Magento\Framework\UrlInterface $url,
        \Magento\Framework\App\Response\Http $http,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Catalog\Model\Product $product,
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magepow\Autoredirect\Helper\Data $data
    )
    {
        $this->url = $url;
        $this->http = $http;
        $this->customerSession = $customerSession;
        $this->productModel = $product;
        $this->productRepository = $productRepository;
        $this->data = $data;
    }

    /**
     * Manages redirect
     */
    public function execute(Observer $observer)
    {
        /**
         * Check if user logged in
         */
        // if ($this->customerSession->isLoggedIn()) {
        	
        // 	$urlOld = $this->url->getUrl('/');
        	
        // 	 $urlEndPoint = $urlOld . 'hero-hoodie.html';
        //  return $this->http->setRedirect($urlEndPoint,301);
        
        // }

    if ($this->data->getConfigModule('general/enabled') == 1) {
          
       if($observer->getRequest()->getFullActionName() == 'cms_index_index') {
            
             $urlOld = $this->url->getUrl($this->data->getConfigModule('general/url'));
             $urlDefault = $this->url->getUrl($this->data->getConfig('general/url'));
             $endpointHelper = $this->data->getConfigModule('general/endpoint');
             if ($urlDefault == $urlOld && empty($endpointHelper)) {
                return;
             }
            $urlEndPoint = $urlOld . $endpointHelper;
            return $this->http->setRedirect($urlEndPoint,301);
        
        }
        return;
    
}
 return;
}
}