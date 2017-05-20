<?php declare(strict_types=1);

namespace Symplify\ModularRouting\Tests\Routing;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Loader\LoaderResolver;
use Symplify\ModularRouting\Tests\Routing\AbstractRouteCollectionProviderSource\MissingFileRouteCollectionProvider;
use Symplify\ModularRouting\Exception\FileNotFoundException;

final class AbstractRouteCollectionProviderTest extends TestCase
{
    public function testMissingFiles(): void
    {
        $missingFileRouteCollectionProvider = new MissingFileRouteCollectionProvider(
            new LoaderResolver
        );
        $this->expectException(FileNotFoundException::class);

        $missingFileRouteCollectionProvider->getRouteCollection();
    }
}
