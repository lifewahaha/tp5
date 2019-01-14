<?php
/**
 * Auto generated from foo.proto at 2019-01-14 07:52:25
 */

namespace {
/**
 * Foo message
 */
class Foo extends \ProtobufMessage
{
    /* Field index constants */
    const BAR = 1;
    const BAZ = 2;
    const SPAM = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BAR => array(
            'name' => 'bar',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BAZ => array(
            'name' => 'baz',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SPAM => array(
            'name' => 'spam',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::BAR] = null;
        $this->values[self::BAZ] = null;
        $this->values[self::SPAM] = null;
    }

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
     * Sets value of 'bar' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBar($value)
    {
        return $this->set(self::BAR, $value);
    }

    /**
     * Returns value of 'bar' property
     *
     * @return integer
     */
    public function getBar()
    {
        $value = $this->get(self::BAR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBar()
    {
        return $this->get(self::BAR) !== null;
    }

    /**
     * Sets value of 'baz' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBaz($value)
    {
        return $this->set(self::BAZ, $value);
    }

    /**
     * Returns value of 'baz' property
     *
     * @return string
     */
    public function getBaz()
    {
        $value = $this->get(self::BAZ);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'baz' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaz()
    {
        return $this->get(self::BAZ) !== null;
    }

    /**
     * Sets value of 'spam' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setSpam($value)
    {
        return $this->set(self::SPAM, $value);
    }

    /**
     * Returns value of 'spam' property
     *
     * @return double
     */
    public function getSpam()
    {
        $value = $this->get(self::SPAM);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'spam' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSpam()
    {
        return $this->get(self::SPAM) !== null;
    }
}
}