<?php

namespace App\Factory;

use App\Entity\ProductDetails;
use App\Repository\ProductDetailsRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<ProductDetails>
 *
 * @method        ProductDetails|Proxy create(array|callable $attributes = [])
 * @method static ProductDetails|Proxy createOne(array $attributes = [])
 * @method static ProductDetails|Proxy find(object|array|mixed $criteria)
 * @method static ProductDetails|Proxy findOrCreate(array $attributes)
 * @method static ProductDetails|Proxy first(string $sortedField = 'id')
 * @method static ProductDetails|Proxy last(string $sortedField = 'id')
 * @method static ProductDetails|Proxy random(array $attributes = [])
 * @method static ProductDetails|Proxy randomOrCreate(array $attributes = [])
 * @method static ProductDetailsRepository|RepositoryProxy repository()
 * @method static ProductDetails[]|Proxy[] all()
 * @method static ProductDetails[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static ProductDetails[]|Proxy[] createSequence(array|callable $sequence)
 * @method static ProductDetails[]|Proxy[] findBy(array $attributes)
 * @method static ProductDetails[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static ProductDetails[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class ProductDetailsFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'Brand' => self::faker()->text(255),
            'Price' => self::faker()->randomNumber(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(ProductDetails $productDetails): void {})
        ;
    }

    protected static function getClass(): string
    {
        return ProductDetails::class;
    }
}
