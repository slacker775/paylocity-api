<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Model;

class CustomFieldDefinition
{
    /**
     * The custom field category.
     *
     * @var string
     */
    protected $category;
    /**
     * Specifies the default value of the custom field.
     *
     * @var string
     */
    protected $defaultValue;
    /**
     * Indicates whether the custom field is required.
     *
     * @var bool
     */
    protected $isRequired;
    /**
     * The custom field label.
     *
     * @var string
     */
    protected $label;
    /**
     * The custom field type.
     *
     * @var string
     */
    protected $type;
    /**
     * A set of values that are applicable to the custom field.
     *
     * @var CustomFieldDefinitionValuesItem[]
     */
    protected $values;

    /**
     * The custom field category.
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * The custom field category.
     */
    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Specifies the default value of the custom field.
     */
    public function getDefaultValue(): string
    {
        return $this->defaultValue;
    }

    /**
     * Specifies the default value of the custom field.
     */
    public function setDefaultValue(string $defaultValue): self
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }

    /**
     * Indicates whether the custom field is required.
     */
    public function getIsRequired(): bool
    {
        return $this->isRequired;
    }

    /**
     * Indicates whether the custom field is required.
     */
    public function setIsRequired(bool $isRequired): self
    {
        $this->isRequired = $isRequired;

        return $this;
    }

    /**
     * The custom field label.
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * The custom field label.
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * The custom field type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The custom field type.
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * A set of values that are applicable to the custom field.
     *
     * @return CustomFieldDefinitionValuesItem[]
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * A set of values that are applicable to the custom field.
     *
     * @param CustomFieldDefinitionValuesItem[] $values
     */
    public function setValues(array $values): self
    {
        $this->values = $values;

        return $this;
    }
}
