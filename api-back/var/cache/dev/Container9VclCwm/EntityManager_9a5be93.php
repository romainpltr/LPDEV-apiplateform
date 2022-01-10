<?php

namespace Container9VclCwm;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderceda2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera8f6b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties635c3 = [
        
    ];

    public function getConnection()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'getConnection', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'getMetadataFactory', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'getExpressionBuilder', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'beginTransaction', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'getCache', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->getCache();
    }

    public function transactional($func)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'transactional', array('func' => $func), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'wrapInTransaction', array('func' => $func), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'commit', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->commit();
    }

    public function rollback()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'rollback', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'getClassMetadata', array('className' => $className), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'createQuery', array('dql' => $dql), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'createNamedQuery', array('name' => $name), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'createQueryBuilder', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'flush', array('entity' => $entity), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'clear', array('entityName' => $entityName), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->clear($entityName);
    }

    public function close()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'close', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->close();
    }

    public function persist($entity)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'persist', array('entity' => $entity), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'remove', array('entity' => $entity), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'refresh', array('entity' => $entity), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'detach', array('entity' => $entity), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'merge', array('entity' => $entity), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'getRepository', array('entityName' => $entityName), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'contains', array('entity' => $entity), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'getEventManager', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'getConfiguration', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'isOpen', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'getUnitOfWork', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'getProxyFactory', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'initializeObject', array('obj' => $obj), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'getFilters', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'isFiltersStateClean', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'hasFilters', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return $this->valueHolderceda2->hasFilters();
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

        $instance->initializera8f6b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderceda2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderceda2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderceda2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, '__get', ['name' => $name], $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        if (isset(self::$publicProperties635c3[$name])) {
            return $this->valueHolderceda2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderceda2;

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

        $targetObject = $this->valueHolderceda2;
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
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderceda2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderceda2;
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
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, '__isset', array('name' => $name), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderceda2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderceda2;
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
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, '__unset', array('name' => $name), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderceda2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderceda2;
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
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, '__clone', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        $this->valueHolderceda2 = clone $this->valueHolderceda2;
    }

    public function __sleep()
    {
        $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, '__sleep', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;

        return array('valueHolderceda2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera8f6b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera8f6b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera8f6b && ($this->initializera8f6b->__invoke($valueHolderceda2, $this, 'initializeProxy', array(), $this->initializera8f6b) || 1) && $this->valueHolderceda2 = $valueHolderceda2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderceda2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderceda2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
