<?php

declare(strict_types=1);
/**
 * @author: James Murray <jaimz@vertigolabs.org>
 *
 * @copyright:
 *
 * @date: 9/15/2015
 *
 * @time: 3:20 PM
 */

namespace VertigoLabs\DoctrineFullTextPostgres\ORM\Mapping;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\Annotation\Target;
use Doctrine\ORM\Mapping\MappingAttribute;

/**
 * Class TsVector.
 *
 * @Annotation
 * @Target("PROPERTY")
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
final class TsVector implements MappingAttribute
{
    /**
     * @var array<string>
     */
    #[Annotation\Required]
    public array $fields = [];

    public string $name;

    #[Annotation\Enum(['A', 'B', 'C', 'D'])]
    public string $weight = 'D';

    public string $language = 'english';

    public function __construct(string $name = null, array $fields = [], string $weight = 'D', string $language = 'english')
    {
        $this->name = $name;
        $this->fields = $fields;
        $this->weight = $weight;
        $this->language = $language;
    }
}
