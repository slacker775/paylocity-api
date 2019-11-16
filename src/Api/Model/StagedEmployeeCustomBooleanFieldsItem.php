<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Model;

class StagedEmployeeCustomBooleanFieldsItem
{
    /**
     * The custom field category.  Acceptable value is 'PayrollAndHR'.
     *
     * @var string
     */
    protected $category;
    /**
     * The custom field label whose value is to be added/updated. Must match to the label defined in Web Pay Custom Fields setup.  Max length: 255.
     *
     * @var string|null
     */
    protected $label;
    /**
     * The custom boolean field value.
     *
     * @var bool|null
     */
    protected $value;

    /**
     * The custom field category.  Acceptable value is 'PayrollAndHR'.
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * The custom field category.  Acceptable value is 'PayrollAndHR'.
     */
    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * The custom field label whose value is to be added/updated. Must match to the label defined in Web Pay Custom Fields setup.  Max length: 255.
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * The custom field label whose value is to be added/updated. Must match to the label defined in Web Pay Custom Fields setup.  Max length: 255.
     */
    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * The custom boolean field value.
     */
    public function getValue(): ?bool
    {
        return $this->value;
    }

    /**
     * The custom boolean field value.
     */
    public function setValue(?bool $value): self
    {
        $this->value = $value;

        return $this;
    }
}
