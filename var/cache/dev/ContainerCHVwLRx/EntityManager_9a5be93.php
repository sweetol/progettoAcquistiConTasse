<?php

namespace ContainerCHVwLRx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderafdd1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbbb08 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties601eb = [
        
    ];

    public function getConnection()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'getConnection', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'getMetadataFactory', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'getExpressionBuilder', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'beginTransaction', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'getCache', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'transactional', array('func' => $func), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'commit', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->commit();
    }

    public function rollback()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'rollback', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'getClassMetadata', array('className' => $className), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'createQuery', array('dql' => $dql), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'createNamedQuery', array('name' => $name), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'createQueryBuilder', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'flush', array('entity' => $entity), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'clear', array('entityName' => $entityName), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->clear($entityName);
    }

    public function close()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'close', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->close();
    }

    public function persist($entity)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'persist', array('entity' => $entity), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'remove', array('entity' => $entity), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'refresh', array('entity' => $entity), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'detach', array('entity' => $entity), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'merge', array('entity' => $entity), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'contains', array('entity' => $entity), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'getEventManager', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'getConfiguration', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'isOpen', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'getUnitOfWork', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'getProxyFactory', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'initializeObject', array('obj' => $obj), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'getFilters', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'isFiltersStateClean', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'hasFilters', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return $this->valueHolderafdd1->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerbbb08 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderafdd1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderafdd1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderafdd1->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, '__get', ['name' => $name], $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        if (isset(self::$publicProperties601eb[$name])) {
            return $this->valueHolderafdd1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderafdd1;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderafdd1;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderafdd1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderafdd1;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, '__isset', array('name' => $name), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderafdd1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderafdd1;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, '__unset', array('name' => $name), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderafdd1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderafdd1;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, '__clone', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        $this->valueHolderafdd1 = clone $this->valueHolderafdd1;
    }

    public function __sleep()
    {
        $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, '__sleep', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;

        return array('valueHolderafdd1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbbb08 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbbb08;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbbb08 && ($this->initializerbbb08->__invoke($valueHolderafdd1, $this, 'initializeProxy', array(), $this->initializerbbb08) || 1) && $this->valueHolderafdd1 = $valueHolderafdd1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderafdd1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderafdd1;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
