<?php

namespace Ftos\Timestamp\Model;

/**
 * Interface TimestampInterface
 *
 * @package Ftos\Timestamp\Model
 */
interface TimestampableInterface
{

    /**
     * Get the entity's creation time.
     *
     * @return \DateTime
     */
    public function getCreatedAt ();

    /**
     * Set the entity's creation time.
     *
     * @param \DateTime $timestamp Creation timestamp.
     * @return \DateTime
     */
    public function setCreatedAt ( \DateTime $timestamp );

    /**
     * Get the entity's last update time.
     *
     * @return \DateTime
     */
    public function getUpdatedAt ();

    /**
     * Set the entity's last update time.
     *
     * @param \DateTime $timestamp Update timestamp.
     * @return \DateTime
     */
    public function setUpdatedAt ( \DateTime $timestamp );

}