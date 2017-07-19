<?php
/**
 * Created by PhpStorm.
 * User: Silvena
 * Date: 19-Jul-17
 * Time: 3:35 PM
 */
namespace CalculatorBundle\Entity;

class Calculator
{
    /**
     * @var  float
     */
    private $leftOperand;

    /**
     * @var float
     */

    private $rightOperand;
    /**
     * @var string
     */
    private $operator;

    /**
     * Get left operand
     * @return float
     */

    public function getLeftOperand()
    {
        return $this->leftOperand;
    }
    /** Set left operand
     *@param float $operand
     * @return  Calculator
     */
    public function setLeftOperand(float $operand)
    {
        $this->leftOperand = $operand;

        return $this;
    }

    /** Get right operand
     * @return float
     */
    /**
     * @return float
     */
    public function getRightOperand()
    {
        return $this->rightOperand;
    }
    /**
     * Set right operand
     * @param float $operand
     *
     * @return Calculator
     */

    public function setRightOperand(float $operand)
    {
        $this->rightOperand = $operand;
        return $this;
    }
    /** Get operator
     * @return float
     */

    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Set right operand
     * @param string $operator
     * @return  Calculator
     */
    public function setOperator(string $operator)
    {
        $this->operator = $operator;
        return $this;
    }
}