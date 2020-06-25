<?php declare(strict_types=1);

namespace Kreadiv\ContaoCitationBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use Kreadiv\ContaoCitationBundle\ContaoCitationBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoCitationBundle::class)->setLoadAfter(
                [ContaoCoreBundle::class]
            )
        ];
    }
}
