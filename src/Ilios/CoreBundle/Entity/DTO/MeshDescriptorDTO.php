<?php

namespace Ilios\CoreBundle\Entity\DTO;

use Ilios\ApiBundle\Annotation as IS;

/**
 * Class MeshDescriptorDTO
 * Data transfer object for a MeSH descriptor.
 * @package Ilios\CoreBundle\Entity\DTO
 *
 * @IS\DTO
 */
class MeshDescriptorDTO
{
    /**
     * @var string
     * @IS\Expose
     * @IS\Type("string")
     */
    public $id;

    /**
     * @var string
     * @IS\Expose
     * @IS\Type("string")
     */
    public $name;

    /**
     * @var string
     * @IS\Expose
     * @IS\Type("string")
     */
    public $annotation;

    /**
     * @var \DateTime
     * @IS\Expose
     * @IS\Type("dateTime")
     */
    public $createdAt;

    /**
     * @var \DateTime
     * @IS\Expose
     * @IS\Type("dateTime")
     */
    public $updatedAt;

    /**
     * @var int[]
     * @IS\Expose
     * @IS\Type("array<string>")
     */
    public $courses;

    /**
     * @var int[]
     * @IS\Expose
     * @IS\Type("array<string>")
     */
    public $objectives;

    /**
     * @var int[]
     * @IS\Expose
     * @IS\Type("array<string>")
     */
    public $sessions;

    /**
     * @var string[]
     * @IS\Expose
     * @IS\Type("array<string>")
     */
    public $concepts;

    /**
     * @var string[]
     * @IS\Expose
     * @IS\Type("array<string>")
     */
    public $qualifiers;

    /**
     * @var int[]
     * @IS\Expose
     * @IS\Type("array<string>")
     */
    public $trees;

    /**
     * @var int[]
     * @IS\Expose
     * @IS\Type("array<string>")
     */
    public $sessionLearningMaterials;

    /**
     * @var int[]
     * @IS\Expose
     * @IS\Type("array<string>")
     */
    public $courseLearningMaterials;

    /**
     * @var int
     * @IS\Expose
     * @IS\Type("string")
     */
    public $previousIndexing;

    /**
     * MeshDescriptorDTO constructor.
     * @param string $id
     * @param string $name
     * @param string $annotation
     * @param \DateTime $createdAt
     * @param \DateTime $updatedAt
     */
    public function __construct(
        $id,
        $name,
        $annotation,
        $createdAt,
        $updatedAt
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->annotation = $annotation;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;

        $this->courses= [];
        $this->objectives = [];
        $this->sessions = [];
        $this->concepts = [];
        $this->qualifiers = [];
        $this->trees = [];
        $this->sessionLearningMaterials = [];
        $this->courseLearningMaterials = [];
    }
}
