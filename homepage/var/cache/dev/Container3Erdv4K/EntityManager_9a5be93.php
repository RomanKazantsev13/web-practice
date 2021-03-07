<?php

namespace Container3Erdv4K;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb4b6a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5e464 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3658a = [
        
    ];

    public function getConnection()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'getConnection', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'getMetadataFactory', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'getExpressionBuilder', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'beginTransaction', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'getCache', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'transactional', array('func' => $func), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->transactional($func);
    }

    public function commit()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'commit', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->commit();
    }

    public function rollback()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'rollback', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'getClassMetadata', array('className' => $className), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'createQuery', array('dql' => $dql), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'createNamedQuery', array('name' => $name), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'createQueryBuilder', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'flush', array('entity' => $entity), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'clear', array('entityName' => $entityName), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->clear($entityName);
    }

    public function close()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'close', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->close();
    }

    public function persist($entity)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'persist', array('entity' => $entity), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'remove', array('entity' => $entity), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'refresh', array('entity' => $entity), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'detach', array('entity' => $entity), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'merge', array('entity' => $entity), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'contains', array('entity' => $entity), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'getEventManager', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'getConfiguration', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'isOpen', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'getUnitOfWork', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'getProxyFactory', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'initializeObject', array('obj' => $obj), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'getFilters', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'isFiltersStateClean', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'hasFilters', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return $this->valueHolderb4b6a->hasFilters();
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

        $instance->initializer5e464 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb4b6a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb4b6a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb4b6a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, '__get', ['name' => $name], $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        if (isset(self::$publicProperties3658a[$name])) {
            return $this->valueHolderb4b6a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4b6a;

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

        $targetObject = $this->valueHolderb4b6a;
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
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4b6a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb4b6a;
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
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, '__isset', array('name' => $name), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4b6a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb4b6a;
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
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, '__unset', array('name' => $name), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4b6a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb4b6a;
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
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, '__clone', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        $this->valueHolderb4b6a = clone $this->valueHolderb4b6a;
    }

    public function __sleep()
    {
        $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, '__sleep', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;

        return array('valueHolderb4b6a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5e464 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5e464;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5e464 && ($this->initializer5e464->__invoke($valueHolderb4b6a, $this, 'initializeProxy', array(), $this->initializer5e464) || 1) && $this->valueHolderb4b6a = $valueHolderb4b6a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb4b6a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb4b6a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
