<?php

namespace DesignPatterns\Structural\Facade;

use InvalidArgumentException;

/**
 * Class CashMan
 * @package DesignPatterns\Structural\Facade
 */
class CashMan
{
    /**
     * @var BurgerWorker
     */
    protected $burgerWorker;
    /**
     * @var WaterWorker
     */
    protected $waterWorker;
    /**
     * @var CashBox
     */
    protected $cashBox;

    /**
     * @var array
     */
    protected $order = [];
    /**
     * @var float
     */
    protected $orderPrice = 0.0;

    /**
     * CashMan constructor.
     *
     * @param BurgerWorker $burgerWorker
     * @param WaterWorker $waterWorker
     * @param CashBox $cashBox
     */
    public function __construct(BurgerWorker $burgerWorker, WaterWorker $waterWorker, CashBox $cashBox)
    {
        $this->burgerWorker = $burgerWorker;
        $this->waterWorker = $waterWorker;
        $this->cashBox = $cashBox;
    }

    /**
     * @param array $order
     * @param $cash
     *
     * @return array
     */
    public function makeOrder(array $order, $cash)
    {
        if (!array_key_exists('waters', $order) && !array_key_exists('burgers', $order)) {
            throw new InvalidArgumentException();
        }

        if (array_key_exists('waters', $order)) {
            $this->setProductsToOrderWithPrice($this->waterWorker, $order['waters']);
        }

        if (array_key_exists('burgers', $order)) {
            $this->setProductsToOrderWithPrice($this->burgerWorker, $order['burgers']);
        }

        $change = $this->cashBox->makeOrder($this->orderPrice, $cash);

        $fullOrder = [
            'order'  => $this->order,
            'price'  => $this->orderPrice,
            'change' => $change,
        ];

        $this->resetResult();

        return $fullOrder;
    }

    /**
     * @param WaterWorker|BurgerWorker $worker
     * @param array|string $products
     */
    protected function setProductsToOrderWithPrice($worker, $products)
    {
        if (is_array($products)) {
            foreach ($products as $product) {
                $this->setProductAndPrice($worker, $product);
            }
        } else {
            $this->setProductAndPrice($worker, $products);
        }
    }

    /**
     * @param WaterWorker|BurgerWorker $worker
     * @param string $product
     */
    protected function setProductAndPrice($worker, $product)
    {
        $this->order[] = $worker->make($product);
        $this->orderPrice += $worker->getPrice($product);
    }

    protected function resetResult()
    {
        $this->orderPrice = 0;
        $this->order = [];
    }
}
