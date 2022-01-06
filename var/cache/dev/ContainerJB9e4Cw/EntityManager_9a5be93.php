<?php

namespace ContainerJB9e4Cw;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0646f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercbd05 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties310ad = [
        
    ];

    public function getConnection()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'getConnection', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'getMetadataFactory', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'getExpressionBuilder', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'beginTransaction', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'getCache', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->getCache();
    }

    public function transactional($func)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'transactional', array('func' => $func), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'wrapInTransaction', array('func' => $func), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'commit', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->commit();
    }

    public function rollback()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'rollback', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'getClassMetadata', array('className' => $className), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'createQuery', array('dql' => $dql), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'createNamedQuery', array('name' => $name), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'createQueryBuilder', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'flush', array('entity' => $entity), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'clear', array('entityName' => $entityName), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->clear($entityName);
    }

    public function close()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'close', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->close();
    }

    public function persist($entity)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'persist', array('entity' => $entity), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'remove', array('entity' => $entity), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'refresh', array('entity' => $entity), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'detach', array('entity' => $entity), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'merge', array('entity' => $entity), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'getRepository', array('entityName' => $entityName), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'contains', array('entity' => $entity), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'getEventManager', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'getConfiguration', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'isOpen', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'getUnitOfWork', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'getProxyFactory', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'initializeObject', array('obj' => $obj), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'getFilters', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'isFiltersStateClean', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'hasFilters', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return $this->valueHolder0646f->hasFilters();
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

        $instance->initializercbd05 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0646f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0646f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0646f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, '__get', ['name' => $name], $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        if (isset(self::$publicProperties310ad[$name])) {
            return $this->valueHolder0646f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0646f;

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

        $targetObject = $this->valueHolder0646f;
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
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0646f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0646f;
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
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, '__isset', array('name' => $name), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0646f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0646f;
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
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, '__unset', array('name' => $name), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0646f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0646f;
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
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, '__clone', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        $this->valueHolder0646f = clone $this->valueHolder0646f;
    }

    public function __sleep()
    {
        $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, '__sleep', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;

        return array('valueHolder0646f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercbd05 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercbd05;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercbd05 && ($this->initializercbd05->__invoke($valueHolder0646f, $this, 'initializeProxy', array(), $this->initializercbd05) || 1) && $this->valueHolder0646f = $valueHolder0646f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0646f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0646f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
