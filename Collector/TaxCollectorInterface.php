<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GPLv3 and CCL
 */

declare(strict_types=1);

namespace CoreShop\Component\Taxation\Collector;

use CoreShop\Component\Taxation\Calculator\TaxCalculatorInterface;
use CoreShop\Component\Taxation\Model\TaxItemInterface;

interface TaxCollectorInterface
{
    /**
     * @return TaxItemInterface[]
     */
    public function collectTaxes(TaxCalculatorInterface $taxCalculator, int $price, array $usedTaxes = []): array;

    /**
     * @return TaxItemInterface[]
     */
    public function collectTaxesFromGross(TaxCalculatorInterface $taxCalculator, int $price, array $usedTaxes = []): array;

    /**
     * Merges to Tax arrays from TaxCollector into one.
     *
     * @param TaxItemInterface[] $taxes1
     * @param TaxItemInterface[] $taxes2
     *
     * @return TaxItemInterface[]
     */
    public function mergeTaxes(array $taxes1, array $taxes2): array;
}
