<?php

namespace Ftos\Component\Timestamp\Model;

/**
 * Interface DeleteableInterface
 *
 * @package Ftos\Component\Timestamp\Model
 */
interface DeleteableInterface
{

    /**
     * Get the entity's deletion time.
     *
     * @return \DateTime
     */
    public function getDeletedAt ();

    /**
     * Determine if the entity is deleted based on the deletion timestamp.
     *
     * @return boolean
     */
    public function isDeleted ();

    /**
     * Set the entity's deletion time.
     *
     * @param \DateTime $timestamp Deletion timestamp.
     * @return \DateTime
     */
    public function setDeletedAt ( \DateTime $timestamp );

}