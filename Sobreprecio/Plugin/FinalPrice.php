<?php

namespace Roma\Sobreprecio\Plugin;

class FinalPrice
{
    /**
     * @param \Magento\Catalog\Pricing\Price\FinalPrice $subject
     * @param float $result
     * @return float
     */
    public function afterGetValue(\Magento\Catalog\Pricing\Price\FinalPrice $subject, $result)
    {

        $sobre = $subject->getProduct()->getSobrePrecio();

        if(empty($sobre))
        {
            $sobre = 0;
        }        
        $envio = $subject->getProduct()->getCostoEnvio();
        if(empty($envio))
        {
            $envio = 0;
        }    

        return $result + $sobre + $envio;
    }
}