<?php
namespace Crocoit\Post\Model\ResourceModel\Post;
 
class CollectionFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;
 
    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;
 
    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Crocoit\\Post\\Model\\ResourceModel\\Post\\Collection')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }
 
    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Crocoit\Post\Model\ResourceModel\Post\Collection
     */
    public function create(array $data = array())
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}