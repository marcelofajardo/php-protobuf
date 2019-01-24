<?php
/**
 * Generated from descriptor.proto by the protocol buffer compiler. DO NOT EDIT!
 */

namespace Google\Protobuf;

/**
 * DescriptorProto message
 */
class DescriptorProto extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const FIELD = 2;
    const NESTED_TYPE = 3;
    const ENUM_TYPE = 4;
    const EXTENSION_RANGE = 5;
    const EXTENSION = 6;
    const OPTIONS = 7;
    const ONEOF_DECL = 8;
    const RESERVED_RANGE = 9;
    const RESERVED_NAME = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FIELD => array(
            'name' => 'field',
            'repeated' => true,
            'type' => '\Google\Protobuf\FieldDescriptorProto'
        ),
        self::NESTED_TYPE => array(
            'name' => 'nested_type',
            'repeated' => true,
            'type' => '\Google\Protobuf\DescriptorProto'
        ),
        self::ENUM_TYPE => array(
            'name' => 'enum_type',
            'repeated' => true,
            'type' => '\Google\Protobuf\EnumDescriptorProto'
        ),
        self::EXTENSION_RANGE => array(
            'name' => 'extension_range',
            'repeated' => true,
            'type' => '\Google\Protobuf\DescriptorProto\ExtensionRange'
        ),
        self::EXTENSION => array(
            'name' => 'extension',
            'repeated' => true,
            'type' => '\Google\Protobuf\FieldDescriptorProto'
        ),
        self::OPTIONS => array(
            'name' => 'options',
            'required' => false,
            'type' => '\Google\Protobuf\MessageOptions'
        ),
        self::ONEOF_DECL => array(
            'name' => 'oneof_decl',
            'repeated' => true,
            'type' => '\Google\Protobuf\OneofDescriptorProto'
        ),
        self::RESERVED_RANGE => array(
            'name' => 'reserved_range',
            'repeated' => true,
            'type' => '\Google\Protobuf\DescriptorProto\ReservedRange'
        ),
        self::RESERVED_NAME => array(
            'name' => 'reserved_name',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
    );

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasName()
    {
        return $this->get(self::NAME) !== null;
    }

    /**
     * Appends value to 'field' list
     *
     * @param \Google\Protobuf\FieldDescriptorProto $value Value to append
     *
     * @return null
     */
    public function appendField(\Google\Protobuf\FieldDescriptorProto $value)
    {
        return $this->append(self::FIELD, $value);
    }

    /**
     * Clears 'field' list
     *
     * @return null
     */
    public function clearField()
    {
        return $this->clear(self::FIELD);
    }

    /**
     * Returns 'field' list
     *
     * @return \Google\Protobuf\FieldDescriptorProto[]
     */
    public function getField()
    {
        return $this->get(self::FIELD);
    }

    /**
     * Returns true if 'field' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasField()
    {
        return count($this->get(self::FIELD)) !== 0;
    }

    /**
     * Returns 'field' iterator
     *
     * @return \ArrayIterator
     */
    public function getFieldIterator()
    {
        return new \ArrayIterator($this->get(self::FIELD));
    }

    /**
     * Returns element from 'field' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Google\Protobuf\FieldDescriptorProto
     */
    public function getFieldAt($offset)
    {
        return $this->get(self::FIELD, $offset);
    }

    /**
     * Returns count of 'field' list
     *
     * @return int
     */
    public function getFieldCount()
    {
        return $this->count(self::FIELD);
    }

    /**
     * Appends value to 'extension' list
     *
     * @param \Google\Protobuf\FieldDescriptorProto $value Value to append
     *
     * @return null
     */
    public function appendExtension(\Google\Protobuf\FieldDescriptorProto $value)
    {
        return $this->append(self::EXTENSION, $value);
    }

    /**
     * Clears 'extension' list
     *
     * @return null
     */
    public function clearExtension()
    {
        return $this->clear(self::EXTENSION);
    }

    /**
     * Returns 'extension' list
     *
     * @return \Google\Protobuf\FieldDescriptorProto[]
     */
    public function getExtension()
    {
        return $this->get(self::EXTENSION);
    }

    /**
     * Returns true if 'extension' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExtension()
    {
        return count($this->get(self::EXTENSION)) !== 0;
    }

    /**
     * Returns 'extension' iterator
     *
     * @return \ArrayIterator
     */
    public function getExtensionIterator()
    {
        return new \ArrayIterator($this->get(self::EXTENSION));
    }

    /**
     * Returns element from 'extension' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Google\Protobuf\FieldDescriptorProto
     */
    public function getExtensionAt($offset)
    {
        return $this->get(self::EXTENSION, $offset);
    }

    /**
     * Returns count of 'extension' list
     *
     * @return int
     */
    public function getExtensionCount()
    {
        return $this->count(self::EXTENSION);
    }

    /**
     * Appends value to 'nested_type' list
     *
     * @param \Google\Protobuf\DescriptorProto $value Value to append
     *
     * @return null
     */
    public function appendNestedType(\Google\Protobuf\DescriptorProto $value)
    {
        return $this->append(self::NESTED_TYPE, $value);
    }

    /**
     * Clears 'nested_type' list
     *
     * @return null
     */
    public function clearNestedType()
    {
        return $this->clear(self::NESTED_TYPE);
    }

    /**
     * Returns 'nested_type' list
     *
     * @return \Google\Protobuf\DescriptorProto[]
     */
    public function getNestedType()
    {
        return $this->get(self::NESTED_TYPE);
    }

    /**
     * Returns true if 'nested_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNestedType()
    {
        return count($this->get(self::NESTED_TYPE)) !== 0;
    }

    /**
     * Returns 'nested_type' iterator
     *
     * @return \ArrayIterator
     */
    public function getNestedTypeIterator()
    {
        return new \ArrayIterator($this->get(self::NESTED_TYPE));
    }

    /**
     * Returns element from 'nested_type' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Google\Protobuf\DescriptorProto
     */
    public function getNestedTypeAt($offset)
    {
        return $this->get(self::NESTED_TYPE, $offset);
    }

    /**
     * Returns count of 'nested_type' list
     *
     * @return int
     */
    public function getNestedTypeCount()
    {
        return $this->count(self::NESTED_TYPE);
    }

    /**
     * Appends value to 'enum_type' list
     *
     * @param \Google\Protobuf\EnumDescriptorProto $value Value to append
     *
     * @return null
     */
    public function appendEnumType(\Google\Protobuf\EnumDescriptorProto $value)
    {
        return $this->append(self::ENUM_TYPE, $value);
    }

    /**
     * Clears 'enum_type' list
     *
     * @return null
     */
    public function clearEnumType()
    {
        return $this->clear(self::ENUM_TYPE);
    }

    /**
     * Returns 'enum_type' list
     *
     * @return \Google\Protobuf\EnumDescriptorProto[]
     */
    public function getEnumType()
    {
        return $this->get(self::ENUM_TYPE);
    }

    /**
     * Returns true if 'enum_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEnumType()
    {
        return count($this->get(self::ENUM_TYPE)) !== 0;
    }

    /**
     * Returns 'enum_type' iterator
     *
     * @return \ArrayIterator
     */
    public function getEnumTypeIterator()
    {
        return new \ArrayIterator($this->get(self::ENUM_TYPE));
    }

    /**
     * Returns element from 'enum_type' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Google\Protobuf\EnumDescriptorProto
     */
    public function getEnumTypeAt($offset)
    {
        return $this->get(self::ENUM_TYPE, $offset);
    }

    /**
     * Returns count of 'enum_type' list
     *
     * @return int
     */
    public function getEnumTypeCount()
    {
        return $this->count(self::ENUM_TYPE);
    }

    /**
     * Appends value to 'extension_range' list
     *
     * @param \Google\Protobuf\DescriptorProto\ExtensionRange $value Value to append
     *
     * @return null
     */
    public function appendExtensionRange(\Google\Protobuf\DescriptorProto\ExtensionRange $value)
    {
        return $this->append(self::EXTENSION_RANGE, $value);
    }

    /**
     * Clears 'extension_range' list
     *
     * @return null
     */
    public function clearExtensionRange()
    {
        return $this->clear(self::EXTENSION_RANGE);
    }

    /**
     * Returns 'extension_range' list
     *
     * @return \Google\Protobuf\DescriptorProto\ExtensionRange[]
     */
    public function getExtensionRange()
    {
        return $this->get(self::EXTENSION_RANGE);
    }

    /**
     * Returns true if 'extension_range' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExtensionRange()
    {
        return count($this->get(self::EXTENSION_RANGE)) !== 0;
    }

    /**
     * Returns 'extension_range' iterator
     *
     * @return \ArrayIterator
     */
    public function getExtensionRangeIterator()
    {
        return new \ArrayIterator($this->get(self::EXTENSION_RANGE));
    }

    /**
     * Returns element from 'extension_range' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Google\Protobuf\DescriptorProto\ExtensionRange
     */
    public function getExtensionRangeAt($offset)
    {
        return $this->get(self::EXTENSION_RANGE, $offset);
    }

    /**
     * Returns count of 'extension_range' list
     *
     * @return int
     */
    public function getExtensionRangeCount()
    {
        return $this->count(self::EXTENSION_RANGE);
    }

    /**
     * Appends value to 'oneof_decl' list
     *
     * @param \Google\Protobuf\OneofDescriptorProto $value Value to append
     *
     * @return null
     */
    public function appendOneofDecl(\Google\Protobuf\OneofDescriptorProto $value)
    {
        return $this->append(self::ONEOF_DECL, $value);
    }

    /**
     * Clears 'oneof_decl' list
     *
     * @return null
     */
    public function clearOneofDecl()
    {
        return $this->clear(self::ONEOF_DECL);
    }

    /**
     * Returns 'oneof_decl' list
     *
     * @return \Google\Protobuf\OneofDescriptorProto[]
     */
    public function getOneofDecl()
    {
        return $this->get(self::ONEOF_DECL);
    }

    /**
     * Returns true if 'oneof_decl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOneofDecl()
    {
        return count($this->get(self::ONEOF_DECL)) !== 0;
    }

    /**
     * Returns 'oneof_decl' iterator
     *
     * @return \ArrayIterator
     */
    public function getOneofDeclIterator()
    {
        return new \ArrayIterator($this->get(self::ONEOF_DECL));
    }

    /**
     * Returns element from 'oneof_decl' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Google\Protobuf\OneofDescriptorProto
     */
    public function getOneofDeclAt($offset)
    {
        return $this->get(self::ONEOF_DECL, $offset);
    }

    /**
     * Returns count of 'oneof_decl' list
     *
     * @return int
     */
    public function getOneofDeclCount()
    {
        return $this->count(self::ONEOF_DECL);
    }

    /**
     * Sets value of 'options' property
     *
     * @param \Google\Protobuf\MessageOptions $value Property value
     *
     * @return null
     */
    public function setOptions(\Google\Protobuf\MessageOptions $value=null)
    {
        return $this->set(self::OPTIONS, $value);
    }

    /**
     * Returns value of 'options' property
     *
     * @return \Google\Protobuf\MessageOptions
     */
    public function getOptions()
    {
        return $this->get(self::OPTIONS);
    }

    /**
     * Returns true if 'options' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOptions()
    {
        return $this->get(self::OPTIONS) !== null;
    }

    /**
     * Appends value to 'reserved_range' list
     *
     * @param \Google\Protobuf\DescriptorProto\ReservedRange $value Value to append
     *
     * @return null
     */
    public function appendReservedRange(\Google\Protobuf\DescriptorProto\ReservedRange $value)
    {
        return $this->append(self::RESERVED_RANGE, $value);
    }

    /**
     * Clears 'reserved_range' list
     *
     * @return null
     */
    public function clearReservedRange()
    {
        return $this->clear(self::RESERVED_RANGE);
    }

    /**
     * Returns 'reserved_range' list
     *
     * @return \Google\Protobuf\DescriptorProto\ReservedRange[]
     */
    public function getReservedRange()
    {
        return $this->get(self::RESERVED_RANGE);
    }

    /**
     * Returns true if 'reserved_range' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReservedRange()
    {
        return count($this->get(self::RESERVED_RANGE)) !== 0;
    }

    /**
     * Returns 'reserved_range' iterator
     *
     * @return \ArrayIterator
     */
    public function getReservedRangeIterator()
    {
        return new \ArrayIterator($this->get(self::RESERVED_RANGE));
    }

    /**
     * Returns element from 'reserved_range' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Google\Protobuf\DescriptorProto\ReservedRange
     */
    public function getReservedRangeAt($offset)
    {
        return $this->get(self::RESERVED_RANGE, $offset);
    }

    /**
     * Returns count of 'reserved_range' list
     *
     * @return int
     */
    public function getReservedRangeCount()
    {
        return $this->count(self::RESERVED_RANGE);
    }

    /**
     * Appends value to 'reserved_name' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendReservedName($value)
    {
        return $this->append(self::RESERVED_NAME, $value);
    }

    /**
     * Clears 'reserved_name' list
     *
     * @return null
     */
    public function clearReservedName()
    {
        return $this->clear(self::RESERVED_NAME);
    }

    /**
     * Returns 'reserved_name' list
     *
     * @return string[]
     */
    public function getReservedName()
    {
        return $this->get(self::RESERVED_NAME);
    }

    /**
     * Returns true if 'reserved_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReservedName()
    {
        return count($this->get(self::RESERVED_NAME)) !== 0;
    }

    /**
     * Returns 'reserved_name' iterator
     *
     * @return \ArrayIterator
     */
    public function getReservedNameIterator()
    {
        return new \ArrayIterator($this->get(self::RESERVED_NAME));
    }

    /**
     * Returns element from 'reserved_name' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getReservedNameAt($offset)
    {
        return $this->get(self::RESERVED_NAME, $offset);
    }

    /**
     * Returns count of 'reserved_name' list
     *
     * @return int
     */
    public function getReservedNameCount()
    {
        return $this->count(self::RESERVED_NAME);
    }
}