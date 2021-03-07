<?php

namespace ContainerKiQlMHl;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8d301 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc53fa = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesff5aa = [
        
    ];

    public function getConnection()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'getConnection', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'getMetadataFactory', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'getExpressionBuilder', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'beginTransaction', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'getCache', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'transactional', array('func' => $func), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->transactional($func);
    }

    public function commit()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'commit', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->commit();
    }

    public function rollback()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'rollback', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'getClassMetadata', array('className' => $className), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'createQuery', array('dql' => $dql), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'createNamedQuery', array('name' => $name), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'createQueryBuilder', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'flush', array('entity' => $entity), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'clear', array('entityName' => $entityName), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->clear($entityName);
    }

    public function close()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'close', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->close();
    }

    public function persist($entity)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'persist', array('entity' => $entity), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'remove', array('entity' => $entity), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'refresh', array('entity' => $entity), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'detach', array('entity' => $entity), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'merge', array('entity' => $entity), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'contains', array('entity' => $entity), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'getEventManager', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'getConfiguration', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'isOpen', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'getUnitOfWork', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'getProxyFactory', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'initializeObject', array('obj' => $obj), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'getFilters', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'isFiltersStateClean', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'hasFilters', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return $this->valueHolder8d301->hasFilters();
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

        $instance->initializerc53fa = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8d301) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8d301 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8d301->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, '__get', ['name' => $name], $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        if (isset(self::$publicPropertiesff5aa[$name])) {
            return $this->valueHolder8d301->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d301;

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

        $targetObject = $this->valueHolder8d301;
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
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d301;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8d301;
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
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, '__isset', array('name' => $name), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d301;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8d301;
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
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, '__unset', array('name' => $name), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d301;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8d301;
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
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, '__clone', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        $this->valueHolder8d301 = clone $this->valueHolder8d301;
    }

    public function __sleep()
    {
        $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, '__sleep', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;

        return array('valueHolder8d301');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc53fa = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc53fa;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc53fa && ($this->initializerc53fa->__invoke($valueHolder8d301, $this, 'initializeProxy', array(), $this->initializerc53fa) || 1) && $this->valueHolder8d301 = $valueHolder8d301;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8d301;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8d301;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
