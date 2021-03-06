<?php

declare(strict_types=1);

namespace Symplify\EasyHydrator\Tests\HttpKernel;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symfony\Component\HttpKernel\Kernel;
use Symplify\EasyHydrator\EasyHydratorBundle;

final class EasyHydratorTestKernel extends Kernel
{
    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
    }

    /**
     * @return BundleInterface[]
     */
    public function registerBundles(): iterable
    {
        return [new EasyHydratorBundle()];
    }

    public function getCacheDir(): string
    {
        return sys_get_temp_dir() . '/eay_hydrator_test';
    }

    public function getLogDir(): string
    {
        return sys_get_temp_dir() . '/eay_hydrator_test_log';
    }
}
